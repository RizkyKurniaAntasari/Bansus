<?php
require_once '../head-nav-foo/header.php';
require_once '../head-nav-foo/navbar.php';
require_once '../../db.php';

// Part to get user data from the session
$nama = '';
$npm = '';

if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user'];
    // Use prepared statement for security
    $query = "SELECT nama, npm FROM asdos WHERE npm = ? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $nama = $row['nama'];
        $npm = $row['npm'];
        $_SESSION['nama'] = $nama;
        $_SESSION['npm'] = $npm;
    }
    $stmt->close();
}

// Main block to generate schedule data
$jadwalDB = [];
for ($hari = 1; $hari <= 3; $hari++) {
    // 1. Get the filled data from the database for the related day
    $dbSlots = [];
    $sql = "SELECT jam, waktu_text, npm, nama, keterangan, hari FROM jadwal_wawancara WHERE hari = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $hari);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $dbSlots[$row['jam']] = $row;
    }
    $stmt->close();

    // 2. Create a complete schedule framework from 09:00 - 15:00
    $jadwalHariIni = [];
    $start = new DateTime('09:00');
    $end   = new DateTime('15:00');
    $breakStart = new DateTime('12:00');
    $breakEnd   = new DateTime('12:40');
    $interval = new DateInterval('PT20M');
    $slotIndex = 1;

    // This is the only loop needed
    while ($start < $end) {
        // Logic to skip break time
        if ($start >= $breakStart && $start < $breakEnd) {
            $start = clone $breakEnd; // Jump straight to 12:40
        }

        $slotLabel = "S$slotIndex";
        $jamAwal = $start->format('H:i');

        // Calculate the end time of the slot
        $jamAkhirDt = clone $start;
        $jamAkhirDt->add($interval);
        $jamAkhir = $jamAkhirDt->format('H:i');

        $waktuText = "$jamAwal - $jamAkhir";

        // 3. Prepare default data for each slot
        $slotData = [
            'jam' => $slotLabel,
            'waktu_text' => $waktuText,
            'npm' => null,
            'nama' => null,
            'keterangan' => null,
            'hari' => $hari,
        ];

        // 4. If this slot is in the database, just take the booking details
        // This ensures that the 'waktu_text' we calculate will not be overwritten
        if (isset($dbSlots[$slotLabel])) {
            $slotData['npm']        = $dbSlots[$slotLabel]['npm'];
            $slotData['nama']       = $dbSlots[$slotLabel]['nama'];
            $slotData['keterangan'] = $dbSlots[$slotLabel]['keterangan'];
        }

        $jadwalHariIni[] = $slotData;

        $start->add($interval);
        $slotIndex++;
    }

    $jadwalDB[$hari] = $jadwalHariIni;
}
?>