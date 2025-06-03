<?php
$currentPage = basename($_SERVER['PHP_SELF']);
require_once '../head-nav-foo/header.php';
require_once '../head-nav-foo/navbar.php';

// Data jadwal wawancara
$jadwal = [
  [
    'tanggal' => 'Senin, 10 Juni 2025',
    'mata_kuliah' => 'Struktur Data',
    'warna' => 'text-blue-700',
    'data' => [
      ['npm' => '2217051001', 'nama' => 'Putri Aulia', 'jam' => '09:00 - 09:30', 'lokasi' => 'Lab A'],
      ['npm' => '2217051012', 'nama' => 'Joko Widodo', 'jam' => '09:30 - 10:00', 'lokasi' => 'Lab A'],
    ]
  ],

  [
    'tanggal' => 'Selasa, 11 Juni 2025',
    'mata_kuliah' => 'Basis Data',
    'warna' => 'text-green-700',
    'data' => [
      ['npm' => '2217051023', 'nama' => 'Rizky Kurnia', 'jam' => '10:00 - 10:30', 'lokasi' => 'Lab B'],
      ['npm' => '2217051056', 'nama' => 'Siti Nurhaliza', 'jam' => '10:30 - 11:00', 'lokasi' => 'Lab B'],
    ]
    ],

    [
    'tanggal' => 'Rabo, 13 Juni 2025',
    'mata_kuliah' => 'Pemrograman Web',
    'warna' => 'text-blue-700',
    'data' => [
      ['npm' => '2217051052', 'nama' => 'Antasari', 'jam' => '10:00 - 10:30', 'lokasi' => 'Lab B'],
      ['npm' => '2217051086', 'nama' => 'Samuel Ananta', 'jam' => '10:30 - 11:00', 'lokasi' => 'Lab B'],
    ]
  ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Jadwal Wawancara Calon Asisten</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <div class="max-w-7xl mx-auto p-6">
    <h1 class="text-3xl font-bold text-center mb-8">Jadwal Wawancara Calon Asisten</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <?php foreach ($jadwal as $sesi): ?>
        <div class="bg-white rounded-lg shadow p-4">
          <h2 class="text-xl font-bold text-gray-700 mb-2"><?= $sesi['tanggal'] ?></h2>
          <h3 class="text-lg font-semibold <?= $sesi['warna'] ?> mb-3"><?= $sesi['mata_kuliah'] ?></h3>
          <table class="w-full border text-sm">
            <thead class="bg-[#ffcc00]">
              <tr>
                <th class="border px-3 py-2">NPM</th>
                <th class="border px-3 py-2">Nama</th>
                <th class="border px-3 py-2">Jam</th>
                <th class="border px-3 py-2">Lokasi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($sesi['data'] as $peserta): ?>
                <tr class="hover:bg-gray-50 text-center">
                  <td class="border px-3 py-2"><?= $peserta['npm'] ?></td>
                  <td class="border px-3 py-2"><?= $peserta['nama'] ?></td>
                  <td class="border px-3 py-2"><?= $peserta['jam'] ?></td>
                  <td class="border px-3 py-2"><?= $peserta['lokasi'] ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>
