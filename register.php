<?php

use App\Controller\AuthController;
require "app/controller/AuthController.php";

$register = new AuthController();
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    return $register->register($email, $pass, $nama, $telepon, $alamat);
?>