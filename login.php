<?php 
include 'koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akun Masyarakat</title>

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
    <div class="wrapper">
        <div class="container align-items-center justify-content-center mt-5">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card radius-15">
                        <div class="card-header text-center">
                            <h4 class="mt-4 font-weight-bold">Login Akun Masyarakat</h4>
                        </div>
                        <div class="card-body p-md-5">
                            <form method="post" action="login.php">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control <?php if (isset($_GET['errorusername'])) { echo 'is-invalid'; } ?>" 
                                           name="Username" placeholder="cth: Ahmad">
                                    <?php if (isset($_GET['errorusername'])) { ?>
                                        <span class="text-danger"><?php echo htmlspecialchars($_GET['errorusername']); ?></span>
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control <?php if (isset($_GET['errorpassword'])) { echo 'is-invalid'; } ?>" 
                                           name="Password" placeholder="cth: 123456">
                                    <?php if (isset($_GET['errorpassword'])) { ?>
                                        <span class="text-danger"><?php echo htmlspecialchars($_GET['errorpassword']); ?></span>
                                    <?php } ?>
                                </div>
                                <p><a href="lupa-password.php">Lupa Password?</a></p>
                                <button type="submit" name="login" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                        <div class="card-footer">
                            <p class="mb-0">Belum punya akun? <a href="register.php">Daftar dulu sini</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>

    <!-- jQuery, Popper -->
    <script src="assets/js/jquery-min.js"></script>
</body>
</html>

<?php
if (isset($_POST['login'])) {
    $username = trim($_POST['Username']);
    $password = trim($_POST['Password']);

    // Validasi input kosong
    if (empty($username)) {
        header('Location: login.php?errorusername=Username wajib diisi!');
        exit();
    }
    if (empty($password)) {
        header('Location: login.php?errorpassword=Password wajib diisi!');
        exit();
    }

    // Query untuk login
    $query = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE username='$username' AND password='$password'") or die(mysqli_error($koneksi)); 

    $cek = mysqli_num_rows($query);

    if ($cek == 1) {
        $_SESSION['masyarakat'] = mysqli_fetch_assoc($query);
        echo "<script>alert('Login Berhasil'); window.location = 'index.php';</script>";
    } else {
        echo "<script>alert('Login Gagal'); window.location = 'login.php';</script>";
    }
}
?>
