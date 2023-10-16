<?php
include 'header.php';
?>

<div class="container-xl">
    <div class="row">
        <ol class="breadcrumb">
            <h4>INPUT DATA HAK AKSES</h4>
        </ol>
    </div>
    <div class="panel-container">
        <div class="bootstrap-tabel">
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Nama Lengkap</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_GET['cari'])) {
                            $pencarian = $_GET['cari'];
                            $hasil = "SELECT * from tbl_akun where nama_lengkap like '%" . $pencarian . "%' or level like '%" . $pencarian . "%' 
                                                                            or username like '%" . $pencarian . "%' order by kd_akun asc";
                        } else {
                            $hasil = "SELECT * from tbl_akun order by kd_akun asc";
                        }
                        $tampil = mysqli_query($db, $hasil);
                        while ($d = $tampil->fetch_array()) {
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $d['nama_lengkap'] ?></td>
                                <td class="text-center"><?php echo $d['username'] ?></td>
                                <td class="text-center"><?php echo $d['level'] ?></td>
                                
                            </tr>
                        <?php
                        }
                        ?>
                        <script>
                            function hapusAkun(kode) {
                                var konfirmasi = confirm('Apakah Anda yakin ingin menghapus data ini?');
                                if (konfirmasi) {
                                    window.location.href = 'akunproses.php?kode=' + kode + '&proses=proseshapus';
                                }
                            }
                        </script>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>