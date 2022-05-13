<?php
require "app/controller/UpdateController.php";

use App\Controller\UpdateController;

$update = new UpdateController();
$id = $_GET['editId'];
$update->update('users', $_POST, 'id=' . $id);

header('location: admin.php');