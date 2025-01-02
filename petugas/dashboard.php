<div class="row">
   <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-violet">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <?php 
                    if ($koneksi) {
                        $query_masyarakat = mysqli_query($koneksi, "SELECT * FROM masyarakat") or die(mysqli_error($koneksi));
                        $jumlah_masyarakat = $query_masyarakat->num_rows;
                    } else {
                        $jumlah_masyarakat = 0; // Jika koneksi gagal
                    }
                    ?>
                    <div>
                        <h2 class="mb-0 text-white"><?php echo $jumlah_masyarakat; ?></h2>
                    </div>
                    <div class="ml-auto font-35 text-white"><i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-white">Jumlah Masyarakat</p>
                    </div>
                </div>
            </div>
        </div>
     </div>

     <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-primary-blue">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <?php 
                    if ($koneksi) {
                        $query_petugas = mysqli_query($koneksi, "SELECT * FROM petugas") or die(mysqli_error($koneksi));
                        $jumlah_petugas = $query_petugas->num_rows;
                    } else {
                        $jumlah_petugas = 0; // Jika koneksi gagal
                    }
                    ?>
                    <div>
                        <h2 class="mb-0 text-white"><?php echo $jumlah_petugas; ?></h2>
                    </div>
                    <div class="ml-auto font-35 text-white"><i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-white">Jumlah Petugas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-rose">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <?php 
                    if ($koneksi) {
                        $query_pengaduan = mysqli_query($koneksi, "SELECT * FROM pengaduan") or die(mysqli_error($koneksi));
                        $jumlah_pengaduan = $query_pengaduan->num_rows;
                    } else {
                        $jumlah_pengaduan = 0; // Jika koneksi gagal
                    }
                    ?>
                    <div>
                        <h2 class="mb-0 text-white"><?php echo $jumlah_pengaduan; ?></h2>
                    </div>
                    <div class="ml-auto font-35 text-white"><i class="bx bx-repeat"></i>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-white">Jumlah Pengaduan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--breadcrumb-->
    <!--end breadcrumb-->
    <div class="card radius-15">
        <div class="card-body">
            <div class="card-title">
                <?php 
                if (!isset($_SESSION['petugas'])) {
                    echo "<h4 class='mb-0 text-danger'>Sesi Tidak Ditemukan!</h4>";
                } else { 
                ?>
                <h4 class="mb-0">Selamat Datang, <?php echo $_SESSION['petugas']['nama_petugas']; ?></h4>
                <?php } ?>
            </div>
            <hr/>
            <?php if (isset($_SESSION['petugas'])) { ?>
            <p>Nama : <?php echo $_SESSION['petugas']['nama_petugas']; ?></p>
            <p>Username : <?php echo $_SESSION['petugas']['username']; ?></p>
            <p>Level : <?php echo strtoupper($_SESSION['petugas']['level']); ?></p>
            <?php } ?>
        </div>
    </div>
</div>
