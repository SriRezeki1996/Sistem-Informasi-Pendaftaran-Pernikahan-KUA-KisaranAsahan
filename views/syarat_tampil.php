<div class="container">
    <div class="row">
        <div class ="col-xs-12">

            <div class="alert alert-info">
                <strong>Selamat Datang di SIPP Kantor Urusan Agama Kisaran</strong>
            </div>
        </div>
    </div>
    <div class="row">
        <!--colomn kedua-->
        <div class="col-sm-9 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-footer">
                        <a href="?page=suami&actions=kirim" class="btn btn-danger btn-sm">
                            Data Calon Suami
                        </a>

                        <a href="?page=istri&actions=kirim" class="btn btn-danger btn-sm">
                            Data Calon Istri
                        </a>

                        <a href="?page=akad&actions=kirim" class="btn btn-danger btn-sm">
                            Data Pelaksanaan Akad Nikah
                        </a>

                        <a href="?page=syarat&actions=tampil" class="btn btn-info btn-sm">
                            Syarat Yang Harus Diantar Ke KUA
                        </a>
                    </div>
                </div>

                <div class="panel-body">
                <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                       <thead>
                          <p class="label-title" align="left"><strong>Persyaratan Calon Suami Yang Harus Diantar :</strong></p>
                          <p class="col-sm-12 col-xs-12" align="left">
                               1. N1 (Surat Keterangan Untuk Nikah)<br>
                               2. N2 (Surat Keterangan Asal Usul)<br>
                               3. N3 (Surat Keterangan Tentang Orang Tua)<br>
                               4. N4 (Surat Persetujuan Mempelai)<br>
                               5. Fotocopy KTP<br>
                               6. Fotocopy KK<br>
                               7. Fotocopy Akte Kelahiran<br>
                               8. Pas Photo 2x3 6 Lembar

                          </p><br><br>

                          <p class="label-title" align="left"><strong>Persyaratan Calon Istri Yang Harus Diantar :</strong></p>
                          <p class="col-sm-12 col-xs-12" align="left">
                               1. N1 (Surat Keterangan Untuk Nikah)<br>
                               2. N2 (Surat Keterangan Asal Usul)<br>
                               3. N3 (Surat Keterangan Tentang Orang Tua)<br>
                               4. N4 (Surat Persetujuan Mempelai)<br>
                               5. Fotocopy KTP<br>
                               6. Fotocopy KK<br>
                               7. Fotocopy Akte Kelahiran<br>
                               8. Pas Photo 2x3 6 Lembar<br><br>

                          </p><br><br>

                          <p class="col-sm-12 col-xs-12" align="right">
                               Pendaftaran Sudah Berhasil di Lakukan...
                          </p><br><br><br>

                          <p class="label-title" align="left"><strong><u>Jika bertempat tinggal diluat Daerah Kabupaten Asahan, anda harus
                          melampirkan<br> Berkas Rekomendasi dari Desa/Lurah Setempat.</u></strong></p><br><br><br>

                          <p class="label-title" align="center"><strong><font color="green">
                              Berkas Asli dari persyaratan di atas Harus di Antar<br>
                              Dalam Jangka Waktu Paling Lambat 10 Hari Terhitung dari Mulai Tanggal Mendaftar<br>
                              Di Kantor KUA Kisaran Kabupaten Asahan</font>
                          </strong></p>

                        </thead>

                </table>

                </div>
            </div>
        </div>



        <!--akhir colomn kedua-->
        <div class="col-sm-3 col-xs-12">
            <!--Jika terjadi login error tampilkan pesan ini-->
            <?php if(isset($_GET['error']) ) {?>
            <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php }?>

            <?php if (isset($_SESSION['username'])) { ?>
            <div class="alert alert-info">
                <strong>Welcome <?=$_SESSION['nama']?></strong>
            </div>
            <?php
           } else { ?>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Masuk Ke Sistem</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="proses_login.php" method="post">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" name="user" class="form-control input-sm"
                                   placeholder="Username" required="" autocomplete="off"/>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" name="pwd" class="form-control input-sm"
                                   placeholder="Password" required="" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="login" value="login"
                                        class="btn btn-success btn-block"><span class="fa fa-unlock-alt"></span>
                                    Login Sistem
                                </button>
                            </div>
                    </form>
                </div>
            </div>

        </div>
            <?php } ?>
    </div>
</div>
