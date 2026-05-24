<?php
require_once 'app/controllers/BeritaController.php';
$controller = new BeritaController();
$aksi = isset($_GET['aksi'])
    ? $_GET['aksi']
    : 'index';
switch ($aksi) {
    case 'tambah':
        $controller->tambah();
        break;
    case 'simpan':
        $controller->simpan();
        break;
    default:
        $controller->index();
        break;
}
