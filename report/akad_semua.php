<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Pernikahan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel-->
                    <div class="text-center">
                        <h2>Sistem Informasi Pendaftaran Pernikahan KUA Kisaran </h2>
                        <h4> Kec. Kota, Jl. Turi No.4, Mekar Baru, West Kisaran, Asahan Regency, North Sumatra 21216</h4>
                        <hr>
                        <h3>DATA SELURUH PERNIKAHAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                             <thead>
								<tr>
                                    <th>No.</th><th>Nama Calon Suami</th><th>Nama Calon Istri</th><th>Wali</th><th>Saksi</th><th>Penghulu</th>
                                    <th>Tanggal Akad</th><th>Mahar Pernikahan</th><th>Tempat Pelaksanaan Akad</th><th>ACTIONS</th>
                                </tr>
							</thead>
						<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_akad";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['calon_suami'] ?></td>
                                    <td><?= $data['calon_istri'] ?></td>
                                    <td><?= $data['wali'] ?></td>
                                    <td><?= $data['saksi'] ?></td>
                                    <td><?= $data['penghulu'] ?></td>
                                    <td><?= $data['tanggal_akad'] ?></td>
                                    <td><?= $data['mahar'] ?></td>
                                    <td><?= $data['tempat_nikah'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr class="text-right">
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Hukum, S.Hum<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>