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
                header('location:index.php');
            }
        } else {
            echo "Error";
        }
    }
}
?>