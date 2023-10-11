<?php
include 'header.php';
?>

<style>
    .excel-btn {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
        transition: background-color 0.2s ease;
    }
</style>

<div class="container-xl">
    <div class="row">
        <ol class="breadcrumb">
            <h4>INPUT DATA PELANGGAN</h4>
        </ol>
    </div>
    <div class="panel-container">
        <div class="bootstrap-tabel">
            <div class="d-flex justify-content-between mb-3">
                <a href="pelangganaksi.php?aksi=tambah" class="btn btn-primary">Tambah Data</a>
                
            </div>
            
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">ID Pelanggan</th>
                            <th class="text-center">Nama Pelanggan</th>
                            <th class="text-center">Daya (VA)</th>
                            <th class="text-center">Tipe Pembayaran</th>
                            <th class="text-center">Maps</th>
                            <th class="text-center">Photo Meteran</th>
                            <th class="text-center">Keterangann</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $hasil = "SELECT * from tbl_pelanggan order by idpel asc";
                        $tampil = mysqli_query($db, $hasil);
                        while ($d = $tampil->fetch_array()) {
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $d['idpel'] ?></td>
                                <td class="text-center"><?php echo $d['nama_pel'] ?></td>
                                <td class="text-center"><?php echo $d['daya'] ?></td>
                                <td class="text-center"><?php echo $d['tipe'] ?></td>
                                <td style="width: 250px; height: 250px;">
                                    <iframe src='https://www.google.com/maps?q=<?Php echo $d["latitude"] ?>,<?php echo $d["longitude"]; ?>&hl=es;z=14&output=embed' style="width:100%; height:100%;"></iframe>
                                </td>
                                <td class="text-center"><img src="../file/<?php echo $d['pmet']; ?>" style="width: 100px; height:200px"></td>
                                <td class="text-center"><?php echo $d['ket'] ?></td>
                                <td class="text-center">
                                    <a href="pelangganaksi.php?kode=<?php echo $d['idpel'] ?>&aksi=ubah" class="btn btn-success">Ubah</a>
                                    <a href="javascript:void(0);" class="btn btn-danger" onclick="hapusData('<?php echo $d['idpel']; ?>')">Hapus</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function hapusData(idpelanggan) {
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            window.location.href = 'pelangganproses.php?kode=' + idpelanggan + '&proses=proseshapus';
        }
    }
</script>