<?php 

include'koneksi.php';


session_start();

if(!isset($_SESSION['masyarakat'])) {
    echo "<script>alert('Anda belum login! Mohon login terlebih dahulu');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi APPEM</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon-32x32.png">

    <!-- Loader -->
    <link rel="stylesheet" href="assets/css/pace.min.css">
    <script src="assets/js/pace.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Icons CSS -->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!-- App CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 text-white bg-dark border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Aplikasi Pengaduan Masyarakat</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="index.php">Home</a>
        <a class="p-2 text-white" href="?halaman=narahubung">NaraHubung</a>
        <a  class="p-2 text-white" href="">Laporan</a>
    </nav>
    <a onclick="return confirm('Anda yakin ingin logout?')" class="btn btn-outline-light" href="logout.php">Logout</a>
</div>

<div class="wrapper">
        <div class="container align-items-center justify-content-center mt-5">
            <div class="row">
                
            <?php 
            
                if(isset($_GET['halaman'])){
                    if($_GET['halaman']=="narahubung"){
                        include 'narahubung.php';
                    }elseif($_GET['halaman']=="tambahpengaduan"){
                        include 'tambahpengaduan.php';
                    }elseif($_GET['halaman']=="editpengaduan"){
                        include 'editpengaduan.php';
                    }elseif($_GET['halaman']=="hapuspengaduan"){
                        include 'hapuspengaduan.php';
                    }elseif($_GET['halaman']=="detailpengaduan"){
                        include 'detailpengaduan.php';
                    }
                } else{
                    include 'home.php';
                }
                
            ?>

                </div>
            </div>
        </div>  
    </div>

 <!-- jQuery, Popper -->
 <script src="assets/js/jquery-min.js"></script>
</body>
</html>