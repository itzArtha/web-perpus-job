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
<section class="pt-4 bg-success">
  <div>
     <div class="container">
        <h1 class="display-5 pt-5 text-light">PROJECT SERTIFIKASI</h1>
        <p class="lead text-light">MENAMPILKAN DAFTAR PESERTA SERTIFIKASI</p>
     </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f5f5f5" fill-opacity="1" d="M0,192L48,192C96,192,192,192,288,208C384,224,480,256,576,240C672,224,768,160,864,154.7C960,149,1056,203,1152,213.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Data Peserta<b> Sertifikasi</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>					
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Foto Profil</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                <?php foreach($fetch->fetch('peserta', 'id_user') as $a) { ?>
					<tr>
						<td>
                            <img width="40" height="40" src="<?= $a['foto'] ?>" alt="">
						</td>
						<td><?= $a['nama'] ?></td>
						<td><?= $a['email'] ?></td>
						<td><?= $a['hp'] ?></td>
						<td>
							<a href="#editEmployeeModal" onClick="editData(['<?= $a['nama'] ?>', '<?= $a['email'] ?>', '<?= $a['hp'] ?>', '<?= $a['id_user'] ?>'])" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="delete.php?id_user=<?= $a['id_user'] ?>" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
                    <?php } ?>
				</tbody>
			</table>
		</div>
	</div>        
</div>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="add.php" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="nama" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="hidden" name="type" value="add">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="update.php" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" id="editNama" name="nama" class="form-control" value="" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" id="editEmail" name="email" class="form-control" value="" required>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" id="editPhone" name="phone" class="form-control" value="" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="hidden" name="type" value="update">
                    <input type="hidden" id="editId" name="id_user">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Footer -->
<footer class="footer my-5">
   <div class="container">
      <span class="text-muted">A Triyana Artha's Development | <?= date('Y') ?></span>
   </div>
</footer>
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