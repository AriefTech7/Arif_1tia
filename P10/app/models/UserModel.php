<?php
require_once 'config/koneksi.php';
class UserModel
{
    private $conn;
    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }
    public function getUser()
    {
      $query = mysqli_query(
            $this->conn,
            "SELECT * FROM user ORDER BY id_user DESC"
        );
        return $query;  
    }
    public function insertUser(
        $email,
        $nama,
        $jabatan,
        $password
    ) {
        $query = "INSERT INTO user
        (email,nama,jabatan,password)
        VALUES
        ('$email','$nama','$jabatan','$password')";
        return mysqli_query(
            $this->conn,
            $query
        );
    }
     public function deleteUser($id)
    {
        $query="DELETE FROM  user WHERE id_user='$id'";
        return mysqli_query($this->conn, $query);
    }
    public function updateUser(
        $id,
        $email,
        $nama,
        $jabatan,
        $password
    ) {
        $query = "UPDATE user SET
        email='$email',
        nama='$nama',
        jabatan='$jabatan',
        password='$password'
        WHERE id_user='$id'";

        return mysqli_query(
            $this->conn,
            $query
        );
    }
    public function getByIdUser($id)
    {
        $query = mysqli_query(
            $this->conn,
            "SELECT * FROM user WHERE id_user='$id'"
        );
        return mysqli_fetch_assoc($query);
    }
}
?>