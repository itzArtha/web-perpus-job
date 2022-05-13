<?php
require "app/controller/DeleteController.php";
use App\Controller\DeleteController;

$delete = new DeleteController();
$delete->delete('users', 'id = ' . $_GET['id']);

header('location:user.php');

?>