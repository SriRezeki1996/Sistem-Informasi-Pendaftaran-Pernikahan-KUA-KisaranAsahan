<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Calon Suami</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_suami WHERE nama ='" . $_GET ['nama'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel-->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>Nama Calon Suami</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Bin Calon Suami</td> <td><?= $data['bin'] ?></td>
                        </tr>
                        <tr>
                            <td>Tempat / Tanggal Lahir</td> <td><?= $data['tempat_lahir'] ?></td>
                        </tr>
						<tr>
                            <td>Warganegara</td> <td><?= $data['warganegara'] ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td> <td><?= $data['agama'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
						<tr>
                            <td>Status Calon Suami</td> <td><?= $data['status'] ?></td>
                        </tr>
						<tr>
                            <td>Umur Calon Suami</td> <td><?= $data['umur'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=suami&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Calon Suami </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

