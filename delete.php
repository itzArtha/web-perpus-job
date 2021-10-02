<?php
require "app/controller/DeleteController.php";
use App\Controller\DeleteController;

$delete = new DeleteController();
$delete->delete('t_user', 'id_user = ' . $_GET['id_user']);

header('location:index.php');

?>