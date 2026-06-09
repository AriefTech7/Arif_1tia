<?php
require_once 'app/models/UserModel.php';
class UserControllers
{
    private $model;
    public function __construct()
    {
        $this->model = new UserModel();
    }
    public function user()
    {
        $user = $this->model->getUser();
        include 'app/views/user/user.php';
    }
    public function simpanUser()
    {
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        
        $this->model->insertUser(
        $email,
        $nama,
        $jabatan,
        $password
        );
        header('Location:/Arif_1tia/P10/index.php?aksi=user');
    }
    public function tambahUser(){
        include 'app/views/user/tambahUser.php';
    }
    public function hapusUser()
    {
        $id = $_GET['id'];
        $this->model->deleteUser($id);
        header('Location:/Arif_1tia/P10/index.php?aksi=user');
    }
    public function editUser()
    {
        $id = $_GET['id'];
        $user = $this->model->getByIdUser($id);
        include 'app/views/user/editUser.php';
    }
    public function updateUser()
    {
        $id = $_POST['id_user'];
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $password = $_POST['password'];
    
        $this->model->updateUser(
            $id,
            $email,
            $nama,
            $jabatan,
            $password
        );
        header('Location:/Arif_1tia/P10/index.php?aksi=user');
    }
}
?>