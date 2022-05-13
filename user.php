<?php
session_start();
if(!isset($_SESSION['auth'])) {
	header('location:auth/option.php');
};
require "app/controller/ViewController.php";
use App\Controller\ViewController;
$fetch = new ViewController();
?>

<!DOCTYPE html>
<html lang="en">
<?php require "components/head.php"; ?>
<body>
<section>
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent" style="background-color:#dc6ecf !important ;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistem Informasi Perputakaan Taman Baca Palembang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
     
      </ul>
    </div>
  </div>
</nav>

  <div class="bg">
     <div class="container text-center ">
        <h1 class="display-5 pt-5 text-dark font-weight-bold">SELAMAT DATANG DI PERPUSTAKAAN TAMAN BACA PALEMBANG</h1>
        <p class="lead text-dark font-weight-bold fs-2">"HALO, USER..."</p>
     </div>
  </div>
</section>




<script>
    const editData = (data) => {
        const id = document.getElementById('editId');
        const nama = document.getElementById('editNama');
        const email = document.getElementById('editEmail');
        const phone = document.getElementById('editPhone');

        nama.value = data[0];
        email.value = data[1];
        phone.value = data[2];
        id.value = data[3];
    }
</script>
</body>
</html>