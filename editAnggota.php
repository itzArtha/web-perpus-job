<?php
require "app/controller/ViewController.php";
use App\Controller\ViewController;

if(isset($_GET['editId'])) {
    $fetch = new ViewController();
    $id = $_GET['editId'];
    $response = $fetch->show("users", "id=" . $id);
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require "components/head.php"; ?>
<body>
<div class="mx-24 mt-48">
    <div class="mb-8">
        <h1 class="text-center text-2xl">Edit Data Anggota</h1>
    </div>
    <form method="post" action="updateanggota.php?editId=<?= $id ?>">
        <div class="my-2">
            <input name="nama" class="form-control" placeholder="Nama" value="<?= $response['nama'] ?>">
        </div>
        <div class="my-2">
            <input name="email" class="form-control" placeholder="Email" value="<?= $response['email'] ?>">
        </div>
        <div class="my-2">
            <input name="telepon" class="form-control" placeholder="Telepon" value="<?= $response['telepon'] ?>">
        </div>
        <div class="my-2">
            <input name="alamat" class="form-control" placeholder="Alamat" value="<?= $response['alamat'] ?>">
        </div>
        <div class="my-2">
            <input name="password" class="form-control" placeholder="Password" value="<?= $response['password'] ?>">
        </div>
        <div class="my-4 text-center">
            <button class="btn btn-success bg-green-500" type="submit">Simpan</button>
        </div>
    </form>
</div>
</body>
</html>