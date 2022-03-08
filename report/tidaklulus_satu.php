<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pendaftar</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_pendaftar WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pendaftaran Siswa SD SWASTA TAMSIS KISARAN</h2>
                        <h4> JL. Hos Cokroaminoto NO. 341 Kec. Kisaran Barat,<br> Kab. Asahan Prov. Sumatera Utara </h4>
                        <hr>
                        <h3>DATA PENDAFTAR TIDAK LULUS</h3>
                    </div>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                                <tr>
                                    <td>Nama Siswa</td> <td><?= $data['nmsiswa'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Tanggal Lahir</td> <td><?= $data['tgllahir'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td> <td><?= $data['tempatlahir'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td> <td><?= $data['jk'] ?></td>
                                </tr>
                                <tr>
                                    <td>Agama</td> <td><?= $data['agama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Ayah/Ibu</td> <td><?= $data['nmortu'] ?></td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td> <td><?= $data['pekerjaan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td> <td><?= $data['id_status'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
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
               <script>
        window.print();
    </script>
    </body>
</html>