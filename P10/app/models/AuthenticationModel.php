<?php
require_once 'config/koneksi.php';

class AuthenticationModel
{
    private $conn;
    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function getByEmail($email)
    {
        $query = mysqli_query(
            $this->conn, 
            "SELECT * FROM user WHERE email='$email'"
        );
        return mysqli_fetch_assoc($query);
    }
    
    public function register(
        $nama,
        $email,
        $jabatan,
        $password
    ) {
        $query = "INSERT INTO user (nama,email,jabatan,password)
        VALUES ('$nama','$email','$jabatan','$password')";
        return mysqli_query(
            $this->conn,
            $query
        );
    }
    
}
?>