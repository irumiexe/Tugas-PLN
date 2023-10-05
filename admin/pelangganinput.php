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
                            <th class="text-center">Daya</th>
                            <th class="text-center">Tipe Pembayaran</th>
                            <th class="text-center">Maps</th>
                            <th class="text-center">Photo Meteran</th>
                            <th class="text-center">Keterangann</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>