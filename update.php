<?php
require "app/controller/UpdateController.php";
use App\Controller\UpdateController;

$add = new UpdateController();
if($_POST['type'] == 'update') {
    $data = array(
        'nama' => $_POST['nama'],
        'email' => $_POST['email'],
        'hp' => $_POST['phone'],
    );
    $add->update('peserta', $data, 'id_user = ' . $_POST['id_user']);
    header('location:index.php');
}
?>