<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Calon Istri</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_istri WHERE nama ='" . $_GET ['nama'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel-->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>Nama Calon Istri</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Binti Calon Itri</td> <td><?= $data['binti'] ?></td>
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
                            <td>Status Calon istri</td> <td><?= $data['status'] ?></td>
                        </tr>
						<tr>
                            <td>Umur Calon istri</td> <td><?= $data['umur'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=istri&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Calon Istri </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

