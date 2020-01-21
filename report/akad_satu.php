<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pernikahan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_akad WHERE calon_suami='" . $_GET ['calon_suami'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel-->
                    <div class="text-center">
                        <h2>Sistem Informasi Pendaftaran Pernikahan KUA Kisaran </h2>
                        <h4> Kec. Kota, Jl. Turi No.4, Mekar Baru, West Kisaran, Asahan Regency, North Sumatra 21216</h4>
                        <hr>
                        <h3>DATA Pernikahan</h3>
                        <table class="table table-bordered "> 
                            <tbody class="text-left">
								<tr>
                                    <td>Nama Calon Suami</td> <td><?= $data['calon_suami'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Calon Istri</td> <td><?= $data['calon_istri'] ?></td>
                                </tr>
                                <tr>
                                    <td>Wali Nikah</td> <td><?= $data['wali'] ?></td>
                                </tr>
                                <tr>
                                    <td>Saksi Nikah</td> <td><?= $data['saksi'] ?></td>
                                </tr>
                                <tr>
                                    <td>Penghulu</td> <td><?= $data['penghulu'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Akad/Nikah</td> <td><?= $data['tanggal_akad'] ?></td>
                                </tr>
                                <tr>
                                    <td>Mahar Pernikahan</td> <td><?= $data['mahar'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat Akad/Nikah</td> <td><?= $data['tempat_nikah'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
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