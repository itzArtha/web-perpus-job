<?php
require "app/controller/CreateController.php";
use App\Controller\CreateController;

$add = new CreateController();
if($_POST['type'] == 'add') {
    $data = array(
        // 'nama' => $_POST['nama'],
        'nama' => $_POST['nama'],
        'email' => $_POST['email'],
        'hp' => $_POST['phone'],
    );
    $add->create('peserta', $data);
    header('location:index.php');
}
?>