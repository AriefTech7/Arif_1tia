<?php
$host = 'localhost';
$user = 'root';
$pass='';
$db = 'bpw_arif';

$conn = mysqli_connect($host, $user,$pass,$db);
if($conn){
    echo "koneksi berhasil";
}else{
    echo "koneksi gagal";
}
?>