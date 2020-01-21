<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pernikahan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail Pernikahan -->
                    <?php
                    $sql = "SELECT *FROM tbl_akad WHERE calon_suami ='" . $_GET ['calon_suami'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel-->
                    <table class="table table-bordered table-striped table-hover"> 
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
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=akad&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pernikahan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

