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
    case 'edit':
        $controller->edit();
        break;
    case 'update':
        $controller->update();
        break;
    case 'hapus':
        $controller->hapus();
        break;
    case 'frontend':
        $controller->fronted();
        break;
    case 'berita':
        $controller->all();
        break;
    default:
        $controller->index();
        break;
}
