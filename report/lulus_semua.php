<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Pendaftar</title>
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
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pendaftaran Siswa SD SWASTA TAMSIS KISARAN</h2>
                        <h4> JL. Hos Cokroaminoto NO. 341 Kec. Kisaran Barat,<br> Kab. Asahan Prov. Sumatera Utara </h4>
                        <hr>
                        <h3>DATA SELURUH PENDAFTAR LULUS</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
								<th>No</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Jenis Kelamain</th>
                                <th>Agama</th>
                                <th>Nama Ayah/Ibu</th>
                                <th>Pekerjaan</th>
                                <th>Alamat</th>
                                <th>Status</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_pendaftar where id_status='Lulus'";
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
									<td><?= $data['nmsiswa'] ?></td>
                                    <td><?= $data['tgllahir'] ?></td>
                                    <td><?= $data['tempatlahir'] ?></td>
                                    <td><?= $data['jk'] ?></td>
                                    <td><?= $data['agama'] ?></td>
                                    <td><?= $data['nmortu'] ?></td>
                                    <td><?= $data['pekerjaan'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['id_status'] ?></td>

                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="10" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br>
                                        Kepala Sekolah
                                        <br><br><br><br>
                                        <u>Pahliono<strong></u><br>
                                       
                                    </td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
             <script>
        window.print();
    </script>
    </body>
</html>