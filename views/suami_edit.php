<?php
$nama=$_GET['nama'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_suami WHERE nama ='$nama'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Calon Suami</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
            
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Calon Suami</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama Calon Suami">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="bin" class="col-sm-3 control-label">Bin</label>
                            <div class="col-sm-9">
                                <input type="text" name="bin" value="<?=$data['bin']?>"class="form-control" id="inputEmail3" placeholder="Bin dari Calon Suami">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat/Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" value="<?=$data['tempat_lahir']?>"class="form-control" id="inputEmail3" placeholder="Tempat dan Tanggal Lahir dari Calon Suami">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="warganegara" class="col-sm-3 control-label">Warganegara</label>
                            <div class="col-sm-9">
                                <input type="text" name="warganegara" value="<?=$data['warganegara']?>"class="form-control" id="inputEmail3" placeholder="Warganegara Calon Suami">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" value="<?=$data['agama']?>"class="form-control" id="inputEmail3" placeholder="Agama dar Calon Suami" >
                            </div>
                        </div>         

                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputPassword3" placeholder="Alamat dari Calon Suami">
                            </div>
                        </div>

                        <!--Status-->
                        
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
                        <!--Akhir Status-->

                        <div class="form-group">
                            <label for="umut" class="col-sm-3 control-label">Umur</label>
                            <div class="col-sm-9">
                                <input type="text" name="umur" value="<?=$data['umur']?>" class="form-control" id="inputPassword3" placeholder="Umur dari Calon Suami">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Calon Suami</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=suami&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Calon Suami
                    </a>
                </div>
            </div>

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
    $sql="UPDATE tbl_suami SET nama='$nama',bin='$bin',tempat_lahir='$tempat_lahir',warganegara='$warganegara',agama='$agama',
	alamat='$alamat',status='$status',umur='$umur'WHERE nama ='$nama'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=suami&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



