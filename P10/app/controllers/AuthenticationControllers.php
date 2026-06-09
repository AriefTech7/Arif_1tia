<?php
require_once 'app/models/AuthenticationModel.php';
class AuthenticationControllers
{
    private $model;
    public function __construct()
    {
        $this->model = new AuthenticationModel();
    }
    public function login()
    {
        include 'app/views/auth/login.php';
    }
    public function register()
    {
        include 'app/views/auth/register.php';
    }

    public function prosesRegister()
    {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $jabatan = $_POST['jabatan'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $this->model->register($nama,$email,$jabatan,$password);
        header('Location:?aksi=login');
    }

    public function prosesLogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->model->getByEmail($email);

        if ($user && password_verify($password, $user['password']))
            {
                $_SESSION['login'] =true;
                $_SESSION['nama'] = $user['nama'];
                $_SESSION['jabatan'] = strtolower($user['jabatan']);
                header('Location:index.php');
            } 
        else
            {
                echo "email atau password salah";
            }
    }
    public function logout()
    {
        session_destroy();
        header('Location:?aksi=frontend');
    }
}
    ?>