<?php
require "app/controller/DeleteController.php";
use App\Controller\DeleteController;

$delete = new DeleteController();
$delete->delete('peserta', 'id_user = ' . $_GET['id_user']);

header('location:index.php');

?>