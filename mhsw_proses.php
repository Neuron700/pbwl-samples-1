<?php

require_once "app/Koneksi.php";
require_once "app/Mahasiswa.php";

$koneksi = new Koneksi();
$mhsw = new Mahasiswa($koneksi);

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'save':
        if (isset($_POST['save'])) {
            $mhsw->save();
        }
        break;

    case 'update':
        if (isset($_POST['update'])) {
            $mhsw->update();
        }
        break;

    case 'delete':
        if (isset($_GET['id'])) {
            $mhsw->delete($_GET['id']);
        }
        break;

    default:
        header("Location: index.php?page=mhsw");
        break;
}

header("Location: index.php?page=mhsw");
exit;
