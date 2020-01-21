<?php
//membuat query untuk hapus data
$sql="DELETE FROM tbl_akad WHERE calon_suami ='".$_GET['calon_suami']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=akad&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=akad&actions=tampil');</scripr>";
}

