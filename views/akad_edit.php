<?php
$calon_suami=$_GET['calon_suami'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_akad WHERE calon_suami ='$calon_suami'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pernikahan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
            
                        <div class="form-group">
                            <label for="calon_suami" class="col-sm-3 control-label">Nama Calon Suami</label>
                            <div class="col-sm-9">
                                <input type="text" name="calon_suami" value="<?=$data['calon_suami']?>"class="form-control" id="inputEmail3" placeholder="Nama Calon Suami">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="calon_istri" class="col-sm-3 control-label">Nama Calon Istri</label>
                            <div class="col-sm-9">
                                <input type="text" name="calon_istri" value="<?=$data['calon_istri']?>"class="form-control" id="inputEmail3" placeholder="Nama Calon Istri">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="wali" class="col-sm-3 control-label">Wali Nikah</label>
                            <div class="col-sm-9">
                                <input type="text" name="wali" value="<?=$data['wali']?>"class="form-control" id="inputEmail3" placeholder="Wali Nikah">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="saksi" class="col-sm-3 control-label">Saksi</label>
                            <div class="col-sm-9">
                                <input type="text" name="saksi" value="<?=$data['saksi']?>"class="form-control" id="inputEmail3" placeholder="Saksi Nikah kedua Mempelai">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="penghulu" class="col-sm-3 control-label">Penghulu</label>
                            <div class="col-sm-9">
                                <input type="text" name="penghulu" value="<?=$data['penghulu']?>"class="form-control" id="inputEmail3" placeholder="Penghulu">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tanggal_akad" class="col-sm-3 control-label">Tanggal Akad/Nikah</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal_akad" value="<?=$data['tanggal_akad']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Akad/Nikah" >
                            </div>
                        </div>         

                        <div class="form-group">
                            <label for="mahar" class="col-sm-3 control-label">Mahar Pernikahan</label>
                            <div class="col-sm-9">
                                <input type="text" name="mahar" value="<?=$data['mahar']?>" class="form-control" id="inputPassword3" placeholder="Mahar untuk Pernikahan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_nikah" class="col-sm-3 control-label">Tempat Akad/Pernikahan</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_nikah" value="<?=$data['tempat_nikah']?>" class="form-control" id="inputPassword3" placeholder="Tempat atau Lokasi untuk Akad/Pernikahan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pernikahan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=akad&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pernikahan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

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
    $sql="UPDATE tbl_akad SET calon_suami='$calon_suami',calon_istri='$calon_istri',wali='$wali',saksi='$saksi',penghulu='$penghulu',
	tanggal_akad='$tanggal_akad',mahar='$mahar',tempat_nikah='$tempat_nikah'WHERE calon_suami ='$calon_suami'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=akad&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



