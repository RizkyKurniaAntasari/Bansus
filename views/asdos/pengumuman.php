<?php
$currentPage = basename($_SERVER['PHP_SELF']);
require_once '../head-nav-foo/header.php';
require_once '../head-nav-foo/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">

    <div class="px-10 py-6">
        <h1 class="text-3xl font-bold mb-8 pt-3 text-center text-gray-800">Selamat & Sukses Asisten Dosen Baru!</h1>

        <?php
        $jadwal = [
            'Semester 1' => [
                'Pengantar Ilmu Komputer' => [
                    ['npm' => '2310110001', 'nama' => 'Ali Akbar'],
                    ['npm' => '2310110002', 'nama' => 'Budi Santoso'],
                ],
                'Logika Matematika' => [
                    ['npm' => '2310110003', 'nama' => 'Citra Lestari'],
                    ['npm' => '2310110004', 'nama' => 'Dewi Ayu'],
                ],
            ],
            'Semester 3' => [
                'Struktur Data' => [
                    ['npm' => '2310110005', 'nama' => 'Eka Putra'],
                    ['npm' => '2310110006', 'nama' => 'Fajar Pratama'],
                ],
                'Basis Data' => [
                    ['npm' => '2310110007', 'nama' => 'Gina Rahma'],
                    ['npm' => '2310110008', 'nama' => 'Hadi Saputra'],
                ],
            ],
            'Semester 5' => [
                'Kecerdasan Buatan' => [
                    ['npm' => '2310110009', 'nama' => 'Indah Meilani'],
                    ['npm' => '2310110010', 'nama' => 'Joko Setiawan'],
                ],
                'Rekayasa Perangkat Lunak' => [
                    ['npm' => '2310110011', 'nama' => 'Kiki Ardian'],
                    ['npm' => '2310110012', 'nama' => 'Laras Sari'],
                ],
            ],
        ];

        foreach ($jadwal as $semester => $matkulList) {
            echo "<div class='mb-8'>";
            echo "<h2 class='text-2xl font-semibold text-gray-700 mb-4'>$semester</h2>";

            echo "<div class='grid grid-cols-1 md:grid-cols-2 gap-6'>";
            foreach ($matkulList as $matkul => $mahasiswa) {
                echo "<div class='bg-white shadow-md rounded-lg overflow-hidden'>";
                echo "<div class='bg-[#ffcc00] text-black px-4 py-2 text-lg font-semibold'>$matkul</div>";
                echo "<div class='p-4 overflow-x-auto'>";
                echo "<table class='min-w-full border border-gray-200 text-sm'>";
                echo "<thead class='bg-gray-100'>";
                echo "<tr>
                        <th class='text-left px-4 py-2 border-b border-gray-300'>NPM</th>
                        <th class='text-left px-4 py-2 border-b border-gray-300'>Nama</th>
                      </tr>";
                echo "</thead><tbody>";

                foreach ($mahasiswa as $mhs) {
                    echo "<tr class='hover:bg-gray-50'>
                            <td class='px-4 py-2 border-b border-gray-200'>{$mhs['npm']}</td>
                            <td class='px-4 py-2 border-b border-gray-200'>{$mhs['nama']}</td>
                          </tr>";
                }

                echo "</tbody></table></div></div>";
            }
            echo "</div></div>";
        }
        ?>
    </div>
</body>

</html>
