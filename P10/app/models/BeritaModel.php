<?php

$path = "/opt/lampp/htdocs/Arif_1tia/P10/config/koneksi.php";
require_once $path;

class BeritaModel
{
    private $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll()
    {
        $query = mysqli_query($this->conn,
        "SELECT * FROM berita ORDER BY id_berita DESC");
        return $query;
    }
}