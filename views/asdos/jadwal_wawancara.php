<?php require_once 'needs/jadwal_wawancara_needs.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Jadwal Wawancara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        select {
            min-width: 100px;
            max-width: 100%;
        }

        td,
        th {
            min-height: 44px;
            line-height: 1.5;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="max-w-5xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-8">Jadwal Wawancara Calon Asisten</h1>

        <div class="flex justify-end mb-4">
            <select id="daySelector" class="p-2 rounded border">
                <option value="1">28 Juli 2025</option>
                <option value="2">29 Juli 2025</option>
                <option value="3">30 Juli 2025</option>
            </select>
        </div>

        <div id="jadwalContainer" class="overflow-x-auto"></div>
    </div>

    <script>
        // Pass PHP variables to JavaScript
        const userNPM = "<?= htmlspecialchars($npm ?? '', ENT_QUOTES, 'UTF-8') ?>";
        const userNama = "<?= htmlspecialchars($nama ?? '', ENT_QUOTES, 'UTF-8') ?>";
        const jadwalDB = <?= json_encode($jadwalDB) ?>;
    </script>
    <script src="js/jadwal_wawancara_script.js"></script>

</body>

</html>