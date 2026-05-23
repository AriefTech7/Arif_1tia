<?php

require_once '/opt/lampp/htdocs/Arif_1tia/P10/app/models/BeritaModel.php';
class BeritaController
{
    private $model;

    public function __construct()
    {
        $this->model = new BeritaModel();
    }

    public function index()
    {
        $berita = $this->model->getAll();
        include '/opt/lampp/htdocs/Arif_1tia/P10/app/views/berita/index.php';
    }
    public function tambah()
    {
        include 'app/views/berita/tambah.php';
    }
}
?>