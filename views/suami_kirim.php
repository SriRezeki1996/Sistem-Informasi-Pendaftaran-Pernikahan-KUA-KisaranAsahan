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
                            <label for="nama" class="col-sm-3 control-label">Nama Calon Suami</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Calon Suami Sesuai KTP" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="bin" class="col-sm-3 control-label">Bin</label>
                            <div class="col-sm-9">
                                <input type="text" name="bin" class="form-control" id="inputEmail3" placeholder="Inputkan Bin Dari Calon Suami" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat/ Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tempat dan Tanggal Lahir Calon Suami Sesuai KTP" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="warganegara" class="col-sm-3 control-label">Warganegara</label>
                            <div class="col-sm-9">
                                <input type="text" name="warganegara"class="form-control" id="inputEmail3" placeholder="Inputkan Kewarganegaraan Calon Suami Sesuai KTP" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" class="form-control" id="inputEmail3" placeholder="Inputkan Agama Calon Suami Sesuai KTP" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputPassword3" placeholder="Inputkan Alamat Calon Suami Sesuai kTP" required>
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="status" class="form-control">
                                    <option value="Jejaka">Jejaka</option>
                                    <option value="DudaMati">Duda Mati</option>
                                    <option value="DudaTalak">Duda Talak/Cerai</option>
                                    <option value="Beristri">Beristri 1,2,3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="umur" class="col-sm-3 control-label">Umur</label>
                            <div class="col-sm-9">
                                <input type="text" name="umur" class="form-control" id="inputPassword3" placeholder="Inputkan Umur dari Calon Suami" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-send"></span> Kirim Data Calon Suami </button>
                            </div>
                        </div>
                    </form>    

                </div>
            </div>
        </div>

        <?php
            if($_POST){
                //Ambil data dari form
                $nama           =$_POST['nama'];
                $bin            =$_POST['bin'];
                $tempat_lahir   =$_POST['tempat_lahir'];
                $warganegara    =$_POST['warganegara'];
                $agama          =$_POST['agama'];
                $alamat         =$_POST['alamat'];
                $status         =$_POST['status'];
                $umur           =$_POST['umur'];
                //buat sql
                $sql="INSERT INTO tbl_suami VALUES ('$nama','$bin','$tempat_lahir','$warganegara','$agama','$alamat','$status','$umur')";
                $query=  mysqli_query($koneksi, $sql) or die ("SQL Kirim Data Calon Suami Error");
                if ($query){
                    echo "<script>window.location.assign('index.php');</script>";
                }else{
                    echo "<script>alert('Simpan Data Gagal');<script>";
                }
                }

        ?>



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
