<?php
$currentPage = basename($_SERVER['PHP_SELF']);
require_once '../head-nav-foo/header.php';
require_once '../head-nav-foo/navbar.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Open Recruitment Asisten Dosen Ganjil 2025</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#ffcc00",
                        secondary: "#000000"
                    },
                    borderRadius: {
                        none: "0px",
                        sm: "4px",
                        DEFAULT: "8px",
                        md: "12px",
                        lg: "16px",
                        xl: "20px",
                        "2xl": "24px",
                        "3xl": "32px",
                        full: "9999px",
                        button: "8px",
                    },
                },
            },
        };
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .timeline-container::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 4px;
            background-color: #e5e7eb;
            top: 50%;
            transform: translateY(-50%);
            z-index: -1;
        }

        .timeline-point {
            position: relative;
            z-index: 1;
        }

        .timeline-point::before {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: #3b82f6;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
        }

        .slider-container {
            position: relative;
            overflow: hidden;
            height: 600px;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            height: 100%;
        }

        .slide {
            min-width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0) 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 10%;
        }

        .slide-content {
            max-width: 600px;
        }

        .slider-nav {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .slider-dot.active {
            background-color: #fff;
        }

        input[type="checkbox"] {
            appearance: none;
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #d1d5db;
            border-radius: 4px;
            outline: none;
            cursor: pointer;
            position: relative;
        }

        input[type="checkbox"]:checked {
            background-color: #3b82f6;
            border-color: #3b82f6;
        }

        input[type="checkbox"]:checked::after {
            content: '';
            position: absolute;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            top: 2px;
            left: 6px;
            transform: rotate(45deg);
        }

        .search-input:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Hero Section with Slider -->
    <section id="beranda" class="pt-16">
        <div class="slider-container">
            <div class="slider">
                <div
                    class="slide"
                    style="background-image: url('https://readdy.ai/api/search-image?query=university%20students%20collaborating%20in%20a%20modern%20classroom%2C%20teaching%20assistants%20helping%20other%20students%2C%20academic%20environment%2C%20bright%20and%20airy%20space%20with%20natural%20lighting%2C%20students%20discussing%20academic%20materials&width=1280&height=600&seq=1&orientation=landscape')">
                    <div class="slide-overlay">
                        <div class="slide-content">
                            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                                Open Recruitment Asisten Dosen Ganjil 2025
                            </h1>
                            <p class="text-white text-lg mb-8">
                                Jadilah bagian dari tim pengajar dan kembangkan potensi
                                akademik Anda bersama kami
                            </p>
                            <a
                                href="#daftar"
                                class="bg-primary hover:bg-black text-white font-semibold py-3 px-8 !rounded-button whitespace-nowrap inline-flex items-center">
                                Daftar Sekarang
                                <div class="w-5 h-5 ml-2 flex items-center justify-center">
                                    <i class="ri-arrow-right-line"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="slide"
                    style="background-image: url('https://readdy.ai/api/search-image?query=teaching%20assistant%20explaining%20concepts%20to%20a%20group%20of%20university%20students%2C%20collaborative%20learning%20environment%2C%20academic%20setting%20with%20computers%20and%20educational%20materials%2C%20bright%20classroom%20with%20modern%20facilities&width=1280&height=600&seq=2&orientation=landscape')">
                    <div class="slide-overlay">
                        <div class="slide-content">
                            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                                Tingkatkan Kemampuan Akademik Anda
                            </h1>
                            <p class="text-white text-lg mb-8">
                                Menjadi asisten dosen membuka peluang untuk mengembangkan soft
                                skill dan hard skill Anda
                            </p>
                            <a
                                href="#daftar"
                                class="bg-primary hover:bg-blue-600 text-white font-semibold py-3 px-8 !rounded-button whitespace-nowrap inline-flex items-center">
                                Daftar Sekarang
                                <div class="w-5 h-5 ml-2 flex items-center justify-center">
                                    <i class="ri-arrow-right-line"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="slide"
                    style="background-image: url('https://readdy.ai/api/search-image?query=university%20teaching%20assistants%20conducting%20a%20workshop%2C%20students%20engaged%20in%20learning%2C%20academic%20discussion%20in%20a%20modern%20university%20setting%2C%20bright%20and%20professional%20environment%20with%20educational%20tools&width=1280&height=600&seq=3&orientation=landscape')">
                    <div class="slide-overlay">
                        <div class="slide-content">
                            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                                Berbagi Pengetahuan, Tumbuh Bersama
                            </h1>
                            <p class="text-white text-lg mb-8">
                                Bergabunglah dengan komunitas asisten dosen dan bantu
                                mahasiswa lain untuk berkembang
                            </p>
                            <a
                                href="#daftar"
                                class="bg-primary hover:bg-blue-600 text-white font-semibold py-3 px-8 !rounded-button whitespace-nowrap inline-flex items-center">
                                Daftar Sekarang
                                <div class="w-5 h-5 ml-2 flex items-center justify-center">
                                    <i class="ri-arrow-right-line"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-nav">
                <div class="slider-dot active"></div>
                <div class="slider-dot"></div>
                <div class="slider-dot"></div>
            </div>
        </div>
    </section>
    <!-- Syarat dan Ketentuan Section -->
    <section id="syarat" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Syarat dan Ketentuan
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Berikut adalah persyaratan yang harus dipenuhi untuk menjadi asisten
                    dosen pada semester Ganjil 2025
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class="ri-user-line ri-lg text-primary"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Persyaratan Akademik</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>
                            <span>Mahasiswa aktif minimal semester 3</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>
                            <span>IPK minimal 3.25</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>
                            <span>Nilai mata kuliah yang dilamar minimal A-</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>
                            <span>Tidak sedang mengambil cuti akademik</span>
                        </li>
                    </ul>
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class="ri-file-list-line ri-lg text-primary"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Dokumen Pendaftaran</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>
                            <span>Transkrip nilai terbaru</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>
                            <span>CV akademik (format PDF)</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>
                            <span>Surat motivasi (maks. 500 kata)</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>
                            <span>Pas foto terbaru (3x4)</span>
                        </li>
                    </ul>
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class="ri-time-line ri-lg text-primary"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Komitmen Waktu</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>
                            <span>Bersedia mengalokasikan 6-10 jam per minggu</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>
                            <span>Menghadiri pertemuan koordinasi mingguan</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>
                            <span>Berpartisipasi dalam sesi pelatihan awal</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>
                            <span>Tidak ada jadwal bentrok dengan jadwal mata kuliah</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 text-center">
                <div class="inline-flex items-center text-primary">
                    <div class="w-5 h-5 flex items-center justify-center mr-2">
                        <i class="ri-information-line"></i>
                    </div>
                    <span>Pendaftaran hanya dapat dilakukan melalui sistem online. Dokumen
                        fisik tidak diperlukan pada tahap awal.</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Timeline Section -->
    <section id="timeline" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Timeline Pendaftaran
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Berikut adalah jadwal dan tahapan proses seleksi asisten dosen untuk
                    semester Ganjil 2025
                </p>
            </div>
            <div class="relative timeline-container max-w-4xl mx-auto px-4 py-10">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                    <!-- Timeline Point 1 -->
                    <div class="timeline-point flex flex-col items-center">
                        <div
                            class="w-16 h-16 bg-black rounded-full border-4 border-primary flex items-center justify-center mb-4">
                            <div
                                class="w-8 h-8 flex items-center justify-center text-primary">
                                <i class="ri-file-upload-line ri-lg"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4 class="font-semibold text-gray-900">Pendaftaran</h4>
                            <p class="text-sm text-gray-600 mt-1">2 - 15 Juni 2025</p>
                            <p class="text-xs text-gray-500 mt-2">
                                Pengisian formulir dan upload dokumen
                            </p>
                        </div>
                    </div>
                    <!-- Timeline Point 2 -->
                    <div class="timeline-point flex flex-col items-center">
                        <div
                            class="w-16 h-16 bg-black rounded-full border-4 border-primary flex items-center justify-center mb-4">
                            <div
                                class="w-8 h-8 flex items-center justify-center text-primary">
                                <i class="ri-file-search-line ri-lg"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4 class="font-semibold text-gray-900">Seleksi Berkas</h4>
                            <p class="text-sm text-gray-600 mt-1">16 - 22 Juni 2025</p>
                            <p class="text-xs text-gray-500 mt-2">
                                Verifikasi dokumen dan persyaratan
                            </p>
                        </div>
                    </div>
                    <!-- Timeline Point 3 -->
                    <div class="timeline-point flex flex-col items-center">
                        <div
                            class="w-16 h-16 bg-black rounded-full border-4 border-primary flex items-center justify-center mb-4">
                            <div
                                class="w-8 h-8 flex items-center justify-center text-primary">
                                <i class="ri-edit-line ri-lg"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4 class="font-semibold text-gray-900">Tes Tertulis</h4>
                            <p class="text-sm text-gray-600 mt-1">24 - 25 Juni 2025</p>
                            <p class="text-xs text-gray-500 mt-2">
                                Ujian pengetahuan mata kuliah
                            </p>
                        </div>
                    </div>
                    <!-- Timeline Point 4 -->
                    <div class="timeline-point flex flex-col items-center">
                        <div
                            class="w-16 h-16 bg-black rounded-full border-4 border-primary flex items-center justify-center mb-4">
                            <div
                                class="w-8 h-8 flex items-center justify-center text-primary">
                                <i class="ri-user-voice-line ri-lg"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4 class="font-semibold text-gray-900">Wawancara</h4>
                            <p class="text-sm text-gray-600 mt-1">27 - 30 Juni 2025</p>
                            <p class="text-xs text-gray-500 mt-2">
                                Wawancara dengan dosen pengampu
                            </p>
                        </div>
                    </div>
                    <!-- Timeline Point 5 -->
                    <div class="timeline-point flex flex-col items-center">
                        <div
                            class="w-16 h-16 bg-black rounded-full border-4 border-primary flex items-center justify-center mb-4">
                            <div
                                class="w-8 h-8 flex items-center justify-center text-primary">
                                <i class="ri-medal-line ri-lg"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4 class="font-semibold text-gray-900">Pengumuman</h4>
                            <p class="text-sm text-gray-600 mt-1">5 Juli 2025</p>
                            <p class="text-xs text-gray-500 mt-2">
                                Pengumuman hasil seleksi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 text-center">
                <div
                    class="inline-flex items-center bg-primary/10 text-primary px-4 py-2 rounded-lg">
                    <div class="w-5 h-5 flex items-center justify-center mr-2">
                        <i class="ri-calendar-check-line"></i>
                    </div>
                    <span class="font-medium">Saat ini: Tahap Pendaftaran (2 - 15 Juni 2025)</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Mata Kuliah Section -->
    <section id="matakuliah" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Daftar Mata Kuliah
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Berikut adalah daftar mata kuliah yang membuka rekrutmen asisten
                    dosen untuk semester Ganjil 2025
                </p>
            </div>
            <!-- Search and Filter -->
            <div class="mb-8 flex flex-col md:flex-row gap-4 justify-between">
                <div class="relative w-full md:w-96">
                    <input
                        type="text"
                        id="search-matkul"
                        placeholder="Cari mata kuliah..."
                        class="w-full pl-10 pr-4 py-3 bg-white border border-gray-200 rounded-lg search-input" />
                    <div
                        class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center text-gray-400">
                        <i class="ri-search-line"></i>
                    </div>
                </div>
                <div class="flex flex-wrap gap-3">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" id="filter-all" checked />
                        <label for="filter-all" class="text-sm text-gray-700">Semua</label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input type="checkbox" id="filter-informatika" />
                        <label for="filter-informatika" class="text-sm text-gray-700">Informatika</label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input type="checkbox" id="filter-sistem-informasi" />
                        <label for="filter-sistem-informasi" class="text-sm text-gray-700">Sistem Informasi</label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input type="checkbox" id="filter-teknik-komputer" />
                        <label for="filter-teknik-komputer" class="text-sm text-gray-700">Teknik Komputer</label>
                    </div>
                </div>
            </div>
            <!-- Mata Kuliah Grid -->
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Mata Kuliah 1 -->
                <div
                    class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Algoritma dan Pemrograman
                            </h3>
                            <span
                                class="bg-black text-primary text-xs px-2 py-1 rounded-full">IF-201</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            Dasar-dasar algoritma dan implementasi dalam bahasa pemrograman
                        </p>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-xs text-gray-500">Kuota Tersedia</p>
                                <div class="flex items-center mt-1">
                                    <div
                                        class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div
                                            class="h-full bg-primary rounded-full"
                                            style="width: 40%"></div>
                                    </div>
                                    <span class="text-sm ml-2 text-gray-700">4/10</span>
                                </div>
                            </div>
                            <button
                                class="text-primary hover:text-blue-700 text-sm font-medium !rounded-button whitespace-nowrap">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Mata Kuliah 2 -->
                <div
                    class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-semibold text-gray-900">Basis Data</h3>
                            <span
                                class="bg-black text-primary text-xs px-2 py-1 rounded-full">IF-304</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            Konsep dan implementasi database relasional
                        </p>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-xs text-gray-500">Kuota Tersedia</p>
                                <div class="flex items-center mt-1">
                                    <div
                                        class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div
                                            class="h-full bg-primary rounded-full"
                                            style="width: 60%"></div>
                                    </div>
                                    <span class="text-sm ml-2 text-gray-700">6/10</span>
                                </div>
                            </div>
                            <button
                                class="text-primary hover:text-blue-700 text-sm font-medium !rounded-button whitespace-nowrap">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Mata Kuliah 3 -->
                <div
                    class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Pemrograman Web
                            </h3>
                            <span
                                class="bg-black text-primary text-xs px-2 py-1 rounded-full">IF-305</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            Pengembangan aplikasi berbasis web dengan HTML, CSS, dan
                            JavaScript
                        </p>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-xs text-gray-500">Kuota Tersedia</p>
                                <div class="flex items-center mt-1">
                                    <div
                                        class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div
                                            class="h-full bg-primary rounded-full"
                                            style="width: 30%"></div>
                                    </div>
                                    <span class="text-sm ml-2 text-gray-700">3/10</span>
                                </div>
                            </div>
                            <button
                                class="text-primary hover:text-blue-700 text-sm font-medium !rounded-button whitespace-nowrap">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Mata Kuliah 4 -->
                <div
                    class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Jaringan Komputer
                            </h3>
                            <span
                                class="bg-black text-primary text-xs px-2 py-1 rounded-full">IF-306</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            Konsep dan implementasi jaringan komputer
                        </p>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-xs text-gray-500">Kuota Tersedia</p>
                                <div class="flex items-center mt-1">
                                    <div
                                        class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div
                                            class="h-full bg-primary rounded-full"
                                            style="width: 50%"></div>
                                    </div>
                                    <span class="text-sm ml-2 text-gray-700">5/10</span>
                                </div>
                            </div>
                            <button
                                class="text-primary hover:text-blue-700 text-sm font-medium !rounded-button whitespace-nowrap">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Mata Kuliah 5 -->
                <div
                    class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Sistem Operasi
                            </h3>
                            <span
                                class="bg-black text-primary text-xs px-2 py-1 rounded-full">IF-303</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            Konsep dan implementasi sistem operasi
                        </p>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-xs text-gray-500">Kuota Tersedia</p>
                                <div class="flex items-center mt-1">
                                    <div
                                        class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div
                                            class="h-full bg-primary rounded-full"
                                            style="width: 70%"></div>
                                    </div>
                                    <span class="text-sm ml-2 text-gray-700">7/10</span>
                                </div>
                            </div>
                            <button
                                class="text-primary hover:text-blue-700 text-sm font-medium !rounded-button whitespace-nowrap">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Mata Kuliah 6 -->
                <div
                    class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Kecerdasan Buatan
                            </h3>
                            <span
                                class="bg-black text-primary text-xs px-2 py-1 rounded-full">IF-401</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            Dasar-dasar kecerdasan buatan dan machine learning
                        </p>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-xs text-gray-500">Kuota Tersedia</p>
                                <div class="flex items-center mt-1">
                                    <div
                                        class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div
                                            class="h-full bg-primary rounded-full"
                                            style="width: 20%"></div>
                                    </div>
                                    <span class="text-sm ml-2 text-gray-700">2/10</span>
                                </div>
                            </div>
                            <button
                                class="text-primary hover:text-blue-700 text-sm font-medium !rounded-button whitespace-nowrap">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Mata Kuliah 7 -->
                <div
                    class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Analisis Algoritma
                            </h3>
                            <span
                                class="bg-black text-primary text-xs px-2 py-1 rounded-full">IF-302</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            Analisis kompleksitas dan efisiensi algoritma
                        </p>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-xs text-gray-500">Kuota Tersedia</p>
                                <div class="flex items-center mt-1">
                                    <div
                                        class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div
                                            class="h-full bg-primary rounded-full"
                                            style="width: 40%"></div>
                                    </div>
                                    <span class="text-sm ml-2 text-gray-700">4/10</span>
                                </div>
                            </div>
                            <button
                                class="text-primary hover:text-blue-700 text-sm font-medium !rounded-button whitespace-nowrap">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Mata Kuliah 8 -->
                <div
                    class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Pemrograman Mobile
                            </h3>
                            <span
                                class="bg-black text-primary text-xs px-2 py-1 rounded-full">IF-405</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            Pengembangan aplikasi mobile untuk Android dan iOS
                        </p>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-xs text-gray-500">Kuota Tersedia</p>
                                <div class="flex items-center mt-1">
                                    <div
                                        class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div
                                            class="h-full bg-primary rounded-full"
                                            style="width: 30%"></div>
                                    </div>
                                    <span class="text-sm ml-2 text-gray-700">3/10</span>
                                </div>
                            </div>
                            <button
                                class="text-primary hover:text-blue-700 text-sm font-medium !rounded-button whitespace-nowrap">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="mt-10 flex justify-center">
                <div class="inline-flex rounded-md shadow-sm">
                    <button
                        class="px-3 py-2 border border-gray-300 bg-white text-gray-500 rounded-l-lg hover:bg-gray-50 !rounded-button whitespace-nowrap">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-arrow-left-s-line"></i>
                        </div>
                    </button>
                    <button
                        class="px-4 py-2 border-t border-b border-r border-gray-300 bg-primary text-black hover:bg-primary/90 !rounded-button whitespace-nowrap">
                        1
                    </button>
                    <button
                        class="px-4 py-2 border-t border-b border-r border-gray-300 bg-white text-gray-700 hover:bg-gray-50 !rounded-button whitespace-nowrap">
                        2
                    </button>
                    <button
                        class="px-4 py-2 border-t border-b border-r border-gray-300 bg-white text-gray-700 hover:bg-gray-50 !rounded-button whitespace-nowrap">
                        3
                    </button>
                    <button
                        class="px-3 py-2 border-t border-b border-r border-gray-300 bg-white text-gray-500 rounded-r-lg hover:bg-gray-50 !rounded-button whitespace-nowrap">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
    <section id="daftar" class="py-20 bg-black text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">
                    Siap Menjadi Bagian dari Tim Pengajar?
                </h2>
                <p class="text-lg mb-8 opacity-90">
                    Jangan lewatkan kesempatan untuk mengembangkan kemampuan akademik
                    dan soft skill Anda. Daftar sekarang dan jadilah bagian dari tim
                    asisten dosen semester Ganjil 2025!
                </p>
                <a
                    href="#"
                    class="inline-block bg-primary text-black font-semibold py-3 px-8 rounded-lg shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1 !rounded-button whitespace-nowrap">
                    Daftar Sekarang
                </a>
                <p class="mt-6 text-sm opacity-80">
                    Pendaftaran ditutup pada 15 Juni 2025, pukul 23:59 WIB
                </p>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer id="kontak" class="bg-black text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div>
                    <h3 class="text-xl font-['Pacifico'] mb-4">logo</h3>
                    <p class="text-gray-400 mb-4">
                        Program rekrutmen asisten dosen untuk membantu proses pembelajaran
                        dan memberikan pengalaman berharga bagi mahasiswa.
                    </p>
                    <div class="flex space-x-4">
                        <a
                            href="#"
                            class="w-8 h-8 flex items-center justify-center bg-gray-800 rounded-full hover:bg-primary transition-colors">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a
                            href="#"
                            class="w-8 h-8 flex items-center justify-center bg-gray-800 rounded-full hover:bg-primary transition-colors">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a
                            href="#"
                            class="w-8 h-8 flex items-center justify-center bg-gray-800 rounded-full hover:bg-primary transition-colors">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a
                            href="#"
                            class="w-8 h-8 flex items-center justify-center bg-gray-800 rounded-full hover:bg-primary transition-colors">
                            <i class="ri-youtube-fill"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li>
                            <a
                                href="#beranda"
                                class="text-gray-400 hover:text-white transition-colors">Beranda</a>
                        </li>
                        <li>
                            <a
                                href="#daftar-asdos"
                                class="text-gray-400 hover:text-white transition-colors">Daftar Asdos</a>
                        </li>
                        <li>
                            <a
                                href="#jadwal-wawancara"
                                class="text-gray-400 hover:text-white transition-colors">Jadwal Wawancara</a>
                        </li>
                        <li>
                            <a
                                href="#pengumuman"
                                class="text-gray-400 hover:text-white transition-colors">Pengumuman</a>
                        </li>
                        <li>
                            <a
                                href="#kontak"
                                class="text-gray-400 hover:text-white transition-colors">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Informasi</h4>
                    <ul class="space-y-2">
                        <li>
                            <a
                                href="#"
                                class="text-gray-400 hover:text-white transition-colors">FAQ</a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="text-gray-400 hover:text-white transition-colors">Panduan Pendaftaran</a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="text-gray-400 hover:text-white transition-colors">Kebijakan Privasi</a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="text-gray-400 hover:text-white transition-colors">Syarat & Ketentuan</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-map-pin-line"></i>
                            </div>
                            <span class="text-gray-400">Gedung Fakultas Ilmu Komputer, Lantai 3, Ruang 3.01</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-mail-line"></i>
                            </div>
                            <span class="text-gray-400">asdos@universitascontoh.ac.id</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-phone-line"></i>
                            </div>
                            <span class="text-gray-400">(021) 1234-5678</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-5 h-5 flex items-center justify-center mt-0.5 mr-2 text-primary">
                                <i class="ri-time-line"></i>
                            </div>
                            <span class="text-gray-400">Senin - Jumat: 08.00 - 16.00 WIB</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div
                class="pt-8 border-t border-gray-800 text-center text-gray-500 text-sm">
                <p>
                    &copy; 2025 Open Recruitment Asisten Dosen. Hak Cipta Dilindungi.
                </p>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script id="slider-script">
        document.addEventListener("DOMContentLoaded", function() {
            const slider = document.querySelector(".slider");
            const slides = document.querySelectorAll(".slide");
            const dots = document.querySelectorAll(".slider-dot");
            let currentSlide = 0;
            const slideCount = slides.length;

            function goToSlide(index) {
                slider.style.transform = translateX(-$ {
                    index * 100
                } % );
                // Update active dot
                dots.forEach((dot) => dot.classList.remove("active"));
                dots[index].classList.add("active");
                currentSlide = index;
            }
            // Set up dot click events
            dots.forEach((dot, index) => {
                dot.addEventListener("click", () => {
                    goToSlide(index);
                });
            });
            // Auto slide
            function nextSlide() {
                let next = currentSlide + 1;
                if (next >= slideCount) {
                    next = 0;
                }
                goToSlide(next);
            }
            // Start auto sliding
            const slideInterval = setInterval(nextSlide, 5000);
            // Stop auto sliding on hover
            slider.addEventListener("mouseenter", () => {
                clearInterval(slideInterval);
            });
        });
    </script>
    <script id="mobile-menu-script">
        document.addEventListener("DOMContentLoaded", function() {
            const menuButton = document.querySelector(".ri-menu-line");
            const mobileMenu = document.getElementById("mobile-menu");
            menuButton.addEventListener("click", function() {
                if (mobileMenu.classList.contains("hidden")) {
                    mobileMenu.classList.remove("hidden");
                    mobileMenu.classList.add("flex");
                } else {
                    mobileMenu.classList.add("hidden");
                    mobileMenu.classList.remove("flex");
                }
            });
            // Close mobile menu when clicking on a link
            const mobileLinks = mobileMenu.querySelectorAll("a");
            mobileLinks.forEach((link) => {
                link.addEventListener("click", function() {
                    mobileMenu.classList.add("hidden");
                    mobileMenu.classList.remove("flex");
                });
            });
        });
    </script>
    <script id="search-filter-script">
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("search-matkul");
            const filterAll = document.getElementById("filter-all");
            const filterInformatika = document.getElementById("filter-informatika");
            const filterSistemInformasi = document.getElementById(
                "filter-sistem-informasi",
            );
            const filterTeknikKomputer = document.getElementById(
                "filter-teknik-komputer",
            );
            // Filter functionality would go here in a real application
            // This is just a placeholder for demonstration
            searchInput.addEventListener("input", function() {
                // Search functionality would go here
                console.log("Searching for:", this.value);
            });
            // When "All" is checked, uncheck others
            filterAll.addEventListener("change", function() {
                if (this.checked) {
                    filterInformatika.checked = false;
                    filterSistemInformasi.checked = false;
                    filterTeknikKomputer.checked = false;
                }
            });
            // When any other filter is checked, uncheck "All"
            [filterInformatika, filterSistemInformasi, filterTeknikKomputer].forEach(
                (filter) => {
                    filter.addEventListener("change", function() {
                        if (this.checked) {
                            filterAll.checked = false;
                        }
                        // If none are checked, check "All"
                        if (
                            !filterInformatika.checked &&
                            !filterSistemInformasi.checked &&
                            !filterTeknikKomputer.checked
                        ) {
                            filterAll.checked = true;
                        }
                    });
                },
            );
        });
    </script>
    <script id="smooth-scroll-script">
        document.addEventListener("DOMContentLoaded", function() {
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
                anchor.addEventListener("click", function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute("href");
                    if (targetId === "#") return;
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80, // Adjust for header height
                            behavior: "smooth",
                        });
                    }
                });
            });
        });
    </script>
     
</body>

</html>