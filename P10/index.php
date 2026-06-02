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
    case 'user':
        $controller->user();
        break;
    case 'simpanUser':
        $controller->simpanUser();
        break;
    case 'tambahUser':
        $controller->tambahUser();
        break;
    case 'hapusUser':
        $controller->hapusUser();
        break;
    case 'updateUser':
        $controller->updateUser();
        break;
    case 'editUser':
        $controller->editUser();
        break;
    default:
        $controller->index();
        break;
}
