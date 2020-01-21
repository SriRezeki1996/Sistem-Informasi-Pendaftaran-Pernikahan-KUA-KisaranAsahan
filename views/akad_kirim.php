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
                    </div>
                </div>

                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                         <div class="form-group">
                            <label for="calon_suami" class="col-sm-3 control-label">Nama Calon Suami</label>
                            <div class="col-sm-9">
                                <input type="text" name="calon_suami" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Calon Suami Sesuai KTP" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="calon_istri" class="col-sm-3 control-label">Nama Calon Istri</label>
                            <div class="col-sm-9">
                                <input type="text" name="calon_istri" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Calon Istri Sesuai KTP" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="wali" class="col-sm-3 control-label">Wali</label>
                            <div class="col-sm-9">
                                <input type="text" name="wali" class="form-control" id="inputEmail3" placeholder="Inputkan Wali dari Calon Istri" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="saksi" class="col-sm-3 control-label">Saksi</label>
                            <div class="col-sm-9">
                                <input type="text" name="saksi"class="form-control" id="inputEmail3" placeholder="Inputkan Nama Saksi dari Kedua Calon Pengantin" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="penghulu" class="col-sm-3 control-label">Penghulu</label>
                            <div class="col-sm-3 col-xs-9">
                                <select name="penghulu" class="form-control">
                                    <option value="MuhammadAlwi">Muhammad Alwi</option>
                                    <option value="ArifZinan">Arif Zinan</option>
                                    <option value="FirdawsiAiman">Firdawsi Aiman</option>
                                    <option value="Syahwaluddin">Syahwaluddin</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_akad" class="col-sm-3 control-label">Tanggal Akad Nikah</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal_akad" class="form-control" id="inputPassword3" placeholder="Inputkan Tanggal Akad Nikah" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mahar" class="col-sm-3 control-label">Mahar Pernikahan</label>
                            <div class="col-sm-9">
                                <input type="text" name="mahar" class="form-control" id="inputPassword3" placeholder="Inputkan Mahar dari Pernikahan Calon Kedua Mempelai" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_nikah" class="col-sm-3 control-label">Tempat Pelaksanaan Akad</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_nikah" class="form-control" id="inputPassword3" placeholder="Inputkan Tempat Akad dari Calon Kedua Mempelai" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-send"></span> Kirim Data Akad Kedua Mempelai </button>
                            </div>
                        </div>
                    </form>

<?php
    if($_POST){
        //Ambil data dari form
        $calon_suami      =$_POST['calon_suami'];
        $calon_istri      =$_POST['calon_istri'];
        $wali             =$_POST['wali'];
        $saksi            =$_POST['saksi'];
        $penghulu         =$_POST['penghulu'];
        $tanggal_akad     =$_POST['tanggal_akad'];
        $mahar            =$_POST['mahar'];
        $tempat_nikah     =$_POST['tempat_nikah'];
        //buat sql
        $sql="INSERT INTO tbl_akad VALUES ('$calon_suami','$calon_istri','$wali','$saksi','$penghulu','$tanggal_akad','$mahar','$tempat_nikah')";
        $query=  mysqli_query($koneksi, $sql) or die ("SQL Kirim Data Pernikahan Error");
        if ($query){
            echo "<script>window.location.assign('?page=syarat&actions=tampil');</script>";
        }else{
            echo "<script>alert('Simpan Data Gagal');<script>";
        }
        }

?>

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
