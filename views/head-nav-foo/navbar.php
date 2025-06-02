<!-- Navbar -->
<nav class="bg-black text-white">
    <ul class="flex justify-center space-x-10 py-3 text-sm font-semibold uppercase">
        <li><a href="index.php" class="<?php echo ($currentPage == 'index.php') ? 'text-yellow-400' : 'hover:text-yellow-400'; ?>">Beranda</a></li>
        <li><a href="daftar_asdos.php" class="<?php echo ($currentPage == 'daftar_asdos.php') ? 'text-yellow-400' : 'hover:text-yellow-400'; ?>">Daftar Asdos</a></li>
        <li><a href="jadwal_wawancara.php" class="<?php echo ($currentPage == 'jadwal_wawancara.php') ? 'text-yellow-400' : 'hover:text-yellow-400'; ?>">Jadwal Wawancara</a></li>
        <li><a href="pengumuman.php" class="<?php echo ($currentPage == 'pengumuman.php') ? 'text-yellow-400' : 'hover:text-yellow-400'; ?>">Pengumuman</a></li>
        <li><a href="kontak_kami.php" class="<?php echo ($currentPage == 'kontak_kami.php') ? 'text-yellow-400' : 'hover:text-yellow-400'; ?>">Kontak Kami</a></li>
    </ul>
</nav>