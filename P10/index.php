<?php
require_once 'app/controllers/BeritaController.php';
require_once 'app/controllers/UserControllers.php';
$Usercontroller= new UserControllers();
$Beritacontroller = new BeritaController();
$aksi = isset($_GET['aksi'])
    ? $_GET['aksi']
    : 'index';
switch ($aksi) {
    case 'tambah':
        $Beritacontroller->tambah();
        break;
    case 'simpan':
        $Beritacontroller->simpan();
        break;
    case 'edit':
        $Beritacontroller->edit();
        break;
    case 'update':
        $Beritacontroller->update();
        break;
    case 'hapus':
        $Beritacontroller->hapus();
        break;
    case 'frontend':
        $Beritacontroller->fronted();
        break;
    case 'berita':
        $Beritacontroller->all();
        break;
    case 'user':
        $Usercontroller->user();
        break;
    case 'simpanUser':
        $Usercontroller->simpanUser();
        break;
    case 'tambahUser':
        $Usercontroller->tambahUser();
        break;
    case 'hapusUser':
        $Usercontroller->hapusUser();
        break;
    case 'updateUser':
        $Usercontroller->updateUser();
        break;
    case 'editUser':
        $Usercontroller->editUser();
        break;
    default:
        $Beritacontroller->index();
        break;
}
