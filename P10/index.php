<?php
require_once '/opt/lampp/htdocs/Arif_1tia/P10/app/controllers/BeritaController.php';
$controller = new BeritaController();
$aksi=isset($_GET['aksi'])
?$_GET['aksi']:'index';
switch ($aksi) {
    default:
        $controller->index();
        break;
}
?>