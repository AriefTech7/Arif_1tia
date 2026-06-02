<?php
require_once 'app/controllers/CrudControllers.php';
$controller = new CrudControllers();
$aksi = isset($_GET['aksi'])
    ? $_GET['aksi']
    : 'index';
switch ($aksi) {
    default:
        $controller->index();
        break;
}
