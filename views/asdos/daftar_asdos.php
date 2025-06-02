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
    <title>Daftar Asisten Dosen</title>
</head>

<body class="Poppins">
    <section class="p-8 max-w-4xl mx-auto bg-white shadow-md rounded-md mt-6">
        <h2 class="text-2xl font-bold text-[#ffcc00] mb-4">Form Pendaftaran Asisten Dosen</h2>
        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4" autocomplete="off">

            <!-- Nama Lengkap -->
            <div>
                <label class="block font-semibold">Nama Lengkap</label>
                <input type="text" name="nama" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- NPM -->
            <div>
                <label class="block font-semibold">NPM</label>
                <input type="text" name="npm" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Email -->
            <div>
                <label class="block font-semibold">Email</label>
                <input type="email" name="email" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Mata Kuliah Pilihan 1 -->
            <div>
                <label class="block font-semibold">Mata Kuliah Pilihan 1</label>
                <select name="matkul1" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    <option value="" disabled selected>Pilih Mata Kuliah</option>
                    <option>Algoritma & Struktur Data</option>
                    <option>Pemrograman Web</option>
                    <option>Sistem Operasi</option>
                    <option>Jaringan Komputer</option>
                    <option>Pemrograman Berorientasi Objek</option>
                    <option>Basis Data</option>
                    <option>AI Dasar</option>
                    <option>Statistik Komputasi</option>
                </select>
            </div>

            <!-- Mata Kuliah Pilihan 2 -->
            <div>
                <label class="block font-semibold">Mata Kuliah Pilihan 2</label>
                <select name="matkul2" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    <option value="" disabled selected>Pilih Mata Kuliah</option>
                    <option>Algoritma & Struktur Data</option>
                    <option>Pemrograman Web</option>
                    <option>Sistem Operasi</option>
                    <option>Jaringan Komputer</option>
                    <option>Pemrograman Berorientasi Objek</option>
                    <option>Basis Data</option>
                    <option>AI Dasar</option>
                    <option>Statistik Komputasi</option>
                </select>
            </div>

            <!-- Motivasi -->
            <div>
                <label class="block font-semibold">Motivasi</label>
                <textarea name="motivasi" rows="4" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Tuliskan alasan Anda ingin menjadi asisten dosen..."></textarea>
            </div>

            <!-- Upload CV (Opsional) -->
            <div>
                <label class="block font-semibold">Upload CV (Opsional)</label>
                <input type="file" name="cv" accept=".pdf,.doc,.docx" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Tombol Submit -->
            <div class="text-right">
                <button type="submit" class="bg-[#ffcc00] hover:bg-yellow-500 text-white font-bold py-2 px-6 rounded shadow">Kirim</button>
            </div>

        </form>
    </section>

</body>

</html>