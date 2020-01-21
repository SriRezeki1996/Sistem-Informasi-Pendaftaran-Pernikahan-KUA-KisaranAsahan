<?php
$nama=$_GET['nama'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_istri WHERE nama ='$nama'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Calon Istri</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
            
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Calon Istri</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama Calon Istri">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="binti" class="col-sm-3 control-label">Binti Calon Istri</label>
                            <div class="col-sm-9">
                                <input type="text" name="binti" value="<?=$data['binti']?>"class="form-control" id="inputEmail3" placeholder="Bin dari Calon Istri">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat/Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" value="<?=$data['tempat_lahir']?>"class="form-control" id="inputEmail3" placeholder="Tempat dan Tanggal Lahir dari Calon Istri">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="warganegara" class="col-sm-3 control-label">Warganegara</label>
                            <div class="col-sm-9">
                                <input type="text" name="warganegara" value="<?=$data['warganegara']?>"class="form-control" id="inputEmail3" placeholder="Warganegara Calon Istri">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" value="<?=$data['agama']?>"class="form-control" id="inputEmail3" placeholder="Agama dari Calon Istri" >
                            </div>
                        </div>         

                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputPassword3" placeholder="Alamat dari Calon Istri">
                            </div>
                        </div>

                        <!--Status-->
                        
                         <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status Calon Istri</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="status" class="form-control">
                                    <option value="Perawan">Perawan</option>
                                    <option value="JandaMati">Janda Mati</option>
                                    <option value="JandaTalak">Janda Talak/Cerai</option>
                                </select>
                            </div>
                        </div>
                        <!--Akhir Status-->

                        <div class="form-group">
                            <label for="umut" class="col-sm-3 control-label">Umur</label>
                            <div class="col-sm-9">
                                <input type="text" name="umur" value="<?=$data['umur']?>" class="form-control" id="inputPassword3" placeholder="Umur dari Calon Istri">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Calon Istri</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=istri&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Calon Istri
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
     $binti          =$_POST['binti'];
     $tempat_lahir   =$_POST['tempat_lahir'];
     $warganegara    =$_POST['warganegara'];
     $agama          =$_POST['agama'];
     $alamat         =$_POST['alamat'];
     $status         =$_POST['status'];
     $umur           =$_POST['umur'];
    //buat sql
    $sql="UPDATE tbl_istri SET nama='$nama',binti='$binti',tempat_lahir='$tempat_lahir',warganegara='$warganegara',agama='$agama',
	alamat='$alamat',status='$status',umur='$umur'WHERE nama ='$nama'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=istri&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



