<?php 

session_start();
session_destroy();

echo "<script>alert('Logout Berhasil, Terima Kasih Sudah Menggunakan Layanan Kami'); window.location = 'login.php';</script>";

?>