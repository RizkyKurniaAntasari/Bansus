<!-- Asisten Dosen / User -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="src/css//style.css" rel="stylesheet">
</head>

<body class="bg-[#ffcc00] min-h-screen flex items-center justify-center">

    <div class="flex bg-[#ffcc00] w-full max-w-4xl mx-auto rounded-lg overflow-hidden">
        <div class="w-2/3 bg-[#ffcc00] flex flex-col items-start justify-center">
            <div class="bg-black rounded-full p-6 mb-4">
                <img src="img/logo/bansus.png" alt="Logo" class="w-40 h-40 object-contain">
            </div>
            <p class="text-black text-4xl font-bold ml-10 text-left">BADAN</p>
            <p class="text-black text-4xl font-bold ml-9 text-left">KHUSUS</p>
        </div>

        <div class="w-5/6 bg-white p-8 flex flex-col justify-center items-center rounded-3xl shadow-2xl">
            <div class="w-full max-w-md">
                <h2 class="text-4xl font-bold text-gray-800 mb-8 text-center">Daftar Akun</h2>
                

                <form action="create_account.php" method="POST">
                    <div class="mb-4">
                        <input type="nama" id="nama" name="nama" placeholder="Masukkan Nama Lengkap"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                    <div class="mb-4">
                        <input type="npm" id="npm" name="npm" placeholder="Masukkan NPM"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                    <div class="mb-4">
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Masukkan Password Anda"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                    <div class="mb-6">
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Konfirmasi Password Anda"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                    <button type="submit"
                        class="w-full bg-[#ffcc00] text-white font-bold py-3 px-4 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50">
                        Daftar
                    </button>
                </form>

                <p class="text-center text-gray-600 text-sm mt-6">
                    Sudah memiliki akun? <a href="#" class="text-[#ffcc00] hover:underline">Masuk</a>
                </p>
            </div>
        </div>
    </div>

</body>

</html>