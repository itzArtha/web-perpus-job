<?php
require "app/controller/DeleteController.php";

use App\Controller\DeleteController;

$delete = new DeleteController();
$id = $_GET['deleteId'];
$delete->delete('users', 'id=' . $id);

header('location: admin.php');