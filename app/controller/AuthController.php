<?php 
namespace App\Controller;
session_start();
require "app/database/Connect.php";
use App\Database\Connect;

class AuthController {

    public $result;
    public function __construct()
    {
        $this->result = [];
        $this->data = new Connect();
    }
    
    public function login($email, $pass)
    {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
        $success = $this->data->con->query($sql);
        if($success) {
            $_SESSION['auth'] = $success->fetch_assoc();
            if($success->fetch_assoc()['role'] == 0) {
                header('location:admin.php');
            } else {
                header('location:user.php');
            }
        } else {
            echo "Error";
        }
    }
    public function register($email, $pass, $nama, $telepon, $alamat)
    {
        $rule = 1;
        $sql = "INSERT INTO users (email, password, role, telepon, alamat, nama)
        VALUES ('$email', '$pass', '$rule', '$telepon', '$alamat', '$nama')";
        var_dump($sql);
        $success = $this->data->con->prepare($sql);
        $success->execute();
        if($success) {
            header('location:auth/user.php');
        } else {
            echo "Error";
        }
    }
}
?>