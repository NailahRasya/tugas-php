<?php
    $mahasiswa = [
        ["Rafi Ahmad", "231001", "PSTI"],
        ["Bunga Citra", "231002", "SISTEL"],
        ["Andi Wijaya", "231003", "MKB"],
        ["Dewi Lestari", "231004", "MEKATRONIKA"],
        ["Rio Saputra", "231005", "KOMPUTER"]
    ];
?>

<h3>Data Mahasiswa</h3>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
    </tr>
    <?php foreach($mahasiswa as $mhs): ?>
    <tr>
        <td><?= $mhs[0]; ?></td>
        <td><?= $mhs[1]; ?></td>
        <td><?= $mhs[2]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
