<?php
//membuat query untuk hapus data
$sql="DELETE FROM tbl_suami WHERE nama ='".$_GET['nama']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=suami&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=suami&actions=tampil');</scripr>";
}

