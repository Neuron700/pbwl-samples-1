<?php

require_once "app/Koneksi.php";
require_once "app/Mahasiswa.php";

$koneksi = new Koneksi();
$mhsw = new Mahasiswa($koneksi);

$rows = $mhsw->show();

?>

<h2>Mahasiswa</h2>

<a href="index.php?page=mhsw_input" class="btn btn-primary mb-2">Input Mahasiswa Baru</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($rows as $row) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['mhsw_nim']; ?></td>
                <td><?php echo $row['mhsw_nama']; ?></td>
                <td><?php echo $row['mhsw_alamat']; ?></td>
                <td>
                    <a href="index.php?page=mhsw_edit&id=<?php echo $row['mhsw_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="mhsw_proses.php?action=delete&id=<?php echo $row['mhsw_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
