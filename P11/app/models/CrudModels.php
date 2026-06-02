<?php
require_once 'config/koneksi.php';
class CrudModels
{
    private $conn;
    public function getAll()
    {
        $query = mysqli_query($this->conn,
        "SELECT * FROM user");
        return $query;
    }
}
?>