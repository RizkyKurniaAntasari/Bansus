/**
 * Memeriksa apakah pengguna saat ini sudah memiliki slot di hari manapun.
 * @returns {boolean} - True jika sudah punya, false jika belum.
 */
function userSudahPunyaSlot() {
    // Mengiterasi setiap hari dalam jadwalDB
    for (let h in jadwalDB) {
        // .some() akan berhenti dan mengembalikan true jika menemukan slot yang cocok
        if (jadwalDB[h].some(slot => slot.npm === userNPM)) {
            return true;
        }
    }
    return false;
}

/**
 * Merender tabel jadwal untuk hari yang dipilih.
 * @param {string|number} hari - Nomor hari yang akan ditampilkan (misal: 1, 2, atau 3).
 */
function renderJadwal(hari) {
    const data = jadwalDB[hari] || [];
    let html = `<table class="w-full border text-sm table-fixed">
        <thead class="bg-yellow-400">
            <tr class="text-center">
                <th class="border px-2 py-2 w-[5%]">No</th>
                <th class="border px-2 py-2 w-[15%]">NPM</th>
                <th class="border px-2 py-2 w-[25%]">Nama</th>
                <th class="border px-2 py-2 w-[20%]">Jam</th>
                <th class="border px-2 py-2 w-[35%]">Keterangan</th>
            </tr>
        </thead>
        <tbody>`;

    const sudahPunyaSlot = userSudahPunyaSlot();

    data.forEach((item) => {
        const jamFormatted = item.waktu_text || '-';
        let keteranganCellHtml = ''; // Variabel untuk menampung HTML kolom keterangan

        // Tentukan apakah slot ini bisa diubah oleh pengguna
        const isMySlot = (item.npm === userNPM);
        const isAvailable = (!item.npm && !sudahPunyaSlot);

        if (isMySlot || isAvailable) {
            // Jika ini slot milikku ATAU slot ini kosong & aku belum punya jadwal
            // maka tampilkan dropdown.
            const isOfflineSelected = item.keterangan === 'Offline' ? 'selected' : '';
            const isOnlineSelected = item.keterangan === 'Online' ? 'selected' : '';
            const firstOptionText = isMySlot ? '-- Batalkan --' : '-- Pilih --';

            keteranganCellHtml = `
                <select onchange="isiKeterangan(${hari}, '${item.jam}', '${jamFormatted}', this.value)" class="border rounded p-1 text-center text-xs w-full">
                    <option value="">${firstOptionText}</option>
                    <option value="Offline" ${isOfflineSelected}>Offline</option>
                    <option value="Online" ${isOnlineSelected}>Online</option>
                </select>`;
        } else {
            // Jika slot sudah diisi orang lain, atau slot kosong tapi aku sudah punya jadwal lain.
            keteranganCellHtml = item.keterangan || '-';
        }

        html += `<tr class="hover:bg-gray-50 text-center">
            <td class="border px-2 py-2">${item.jam}</td>
            <td class="border px-2 py-2 truncate">${item.npm || '-'}</td>
            <td class="border px-2 py-2 truncate">${item.nama || '-'}</td>
            <td class="border px-2 py-2 font-mono">${jamFormatted}</td>
            <td class="border px-2 py-2">${keteranganCellHtml}</td>
        </tr>`;
    });

    html += '</tbody></table>';
    document.getElementById('jadwalContainer').innerHTML = html;
}

/**
 * Mengirim data pilihan jadwal ke server.
 * @param {number} hari - Nomor hari yang dipilih.
 * @param {string} jam - Kode slot jam (misal: 'S1').
 * @param {string} waktuText - Teks rentang waktu (misal: '09:00 - 09:20').
 * @param {string} keterangan - Pilihan keterangan ('Offline', 'Online', atau '' untuk batal).
 */
function isiKeterangan(hari, jam, waktuText, keterangan) {
    const pesanKonfirmasi = keterangan === "" ?
        "Yakin ingin membatalkan jadwal wawancara?" :
        `Yakin memilih jadwal pada jam ${waktuText} dengan keterangan: ${keterangan}?`;

    if (!confirm(pesanKonfirmasi)) {
        renderJadwal(document.getElementById('daySelector').value); // reset tampilan jika batal
        return;
    }

    const form = document.createElement('form');
    form.method = 'POST';
    form.action = '../../controller/asdos/jadwal_wawancara_logic.php';

    const inputs = {
        hari: hari,
        jam: jam,
        waktu_text: waktuText,
        npm: userNPM,
        nama: userNama,
        keterangan: keterangan
    };

    for (const key in inputs) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = key;
        input.value = inputs[key];
        form.appendChild(input);
    }
    document.body.appendChild(form);
    form.submit();
}

// Event listener untuk selector hari
document.getElementById('daySelector').addEventListener('change', e => {
    renderJadwal(e.target.value);
});

// Render jadwal pertama kali saat halaman dimuat
renderJadwal(document.getElementById('daySelector').value);