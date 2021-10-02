<?php

use App\Controller\AuthController;
require "app/controller/AuthController.php";

$login = new AuthController();
    $email = $_POST['email'];
    $pass = $_POST['password'];
    return $login->login($email, $pass);
?>