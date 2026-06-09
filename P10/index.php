<?php
session_start();
require_once 'app/controllers/BeritaController.php';
require_once 'app/controllers/UserControllers.php';
require_once 'app/controllers/AuthenticationControllers.php';
$AuthenticationController=new AuthenticationControllers();
$Usercontroller= new UserControllers();
$Beritacontroller = new BeritaController();
$aksi = isset($_GET['aksi'])
    ? $_GET['aksi']
    : 'frontend';
$halaman_wajib_login = ['index','tambah','simpan','edit','update','hapus','user',
'editUser','updateUser','hapusUser'];
$halaman_auth = ['login', 'prosesLogin'];
if (in_array($aksi, $halaman_wajib_login) && ! isset($_SESSION['login'])){
    header('Location:?aksi=login');
    exit;
}
if(isset($_SESSION['login'])){
    $role = $_SESSION['jabatan'];
    $halaman_khusus_admin=['register', 'prosesRegister', 'user','editUser','updateUser','hapusUser'];
    if (in_array($aksi, $halaman_khusus_admin) && $role !== 'admin'){
        echo "<script> 
        alert('akses ditolak! jabatan anda ($role) tidak diizinkan mengakses halaman ini.');
        windows.location='?aksi=index';
        </script>";
        exit;
    }
}
if(in_array($aksi,$halaman_auth) && isset($_SESSION['login']) && $aksi != 'logout'){
    header('Location:index.php');
    exit;
}


switch ($aksi) {
    case 'login':
        $AuthenticationController->login();
        break;
    case 'register':
        $AuthenticationController->register();
        break;
    case 'prosesLogin':
        $AuthenticationController->prosesLogin();
        break;
    case 'prosesRegister':
        $AuthenticationController->prosesRegister();
        break;
    case 'logout':
        $AuthenticationController->logout();
        break;
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
    case 'dashboard':
        $Beritacontroller->index();
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
        $Beritacontroller->fronted();
        break;
}
