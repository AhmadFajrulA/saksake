<?php 

include '../koneksi.php';

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Register Petugas</title>
	<!--favicon-->
	<link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="../assets/css/pace.min.css" rel="stylesheet" />
	<script src="../assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="../assets/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="../assets/css/app.css" />
	<style>
		/* Tambahan CSS untuk membuat tampilan lebih kecil dan tetap di tengah */
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			margin: 0;
			background-color: #f8f9fa;
		}
		.card {
			max-width: 750px; /* Ukuran diperbesar menjadi sedikit lebih kecil */
			border-radius: 25px; /* Membuat form tampak lonjong */
			box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
		}
		.form-section {
			padding: 25px;
			border-radius: 25px 0 0 25px;
		}
		.img-section {
			object-fit: cover;
			width: 100%;
			height: 100%;
			border-radius: 0 25px 25px 0;
		}
	</style>
</head>

<body class="bg-login">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<!-- Form Section -->
							<div class="col-lg-6 form-section">
								<div class="card-body p-md-4">
									<div class="text-center">
										<!-- Logo -->
										<img src="../assets/images/logo-icon.png" width="80" alt="Logo">
										<h3 class="mt-4 font-weight-bold">Silahkan Daftar Akun!</h3>
									</div>

									<form method="POST" action="">
										<div class="form-group mt-4">
											<label>Username</label>
											<input type="text" name="Username" class="form-control" placeholder="Masukkan Username Anda :" />
										</div>

										<div class="form-group">
											<label>Password</label>
											<input type="password" name="Password" class="form-control" placeholder="Masukkan Password Anda :" />
										</div>

										<div class="form-group mt-4">
											<label>Nama Lengkap</label>
											<input type="text" name="nama_petugas" class="form-control" placeholder="Masukkan Nama Lengkap Anda :" />
										</div>

										<div class="form-group mt-4">
											<label>Nomor Telepon</label>
											<input type="text" name="telp" class="form-control" placeholder="Masukkan Nomor Telepon Anda :" />
										</div>

										<div class="btn-group mt-3 w-100">
											<button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
											<button type="button" class="btn btn-primary"><i class="lni lni-arrow-right"></i></button>
										</div>
										<hr>
									</form>
								</div>
							</div>
							<!-- Image Section -->
							<div class="col-lg-6">
								<img src="../assets/images/login-images/register-frent-img.jpg" class="card-img img-section h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>

<?php

   if(isset($_POST['register'])) {
	    $nama_petugas = $_POST['nama_lengkap'];
		$telp = $_POST['telp'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = 'petugas';

		$query_register = mysqli_query($koneksi, "INSERT INTO petugas(nama_petugas, username, password, telp, level) 
		                VALUES('$nama_petugas', '$telp', '$username', '$password', $level)") or die (mysqli_error($koneksi));

		if($query_register){
			echo "<script>alert('berhasil daftar akun! Silahkan Login'); </script>";
			echo "<script>document.location.href='login.php'; </script>";
		} else {
			echo "<script>alert('Gagal daftar akun! Silahkan Coba Lagi'); </script>";
			echo "<script>document.location.href='register.php'; </script>";
		}
   }

?>

