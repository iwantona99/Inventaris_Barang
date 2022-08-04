<?php
    //variabel yang berfungsi menyimpan detail dari sub judul website
    $nama = 'Data Pegawai'; 

    //variabel yang berfungsi mengatifkan sidebar
    $pegawai = 'pegawai';

    // menambahkan style khusus untuk halaman ini saja
    $addstyles = '_assets/vendor/datatables/dataTables.bootstrap4.min.css';

    // menghubungkan file header dengan file Pegawai
    require_once "_template/_header.php";
	
	
	
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Cetak Output Inventaris</li>
    </ol>
</nav>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        
        <a href="<?= base_url('_report/all_pegawai') ?>" target="_blank" class="btn btn-info "><i class="fas fa-print"></i> Cetak Data Inventaris Mesin dan Kendaraan Bermotor</a>
    </div>
    
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        
        <a href="<?= base_url('_report/kategori2') ?>" target="_blank" class="btn btn-info "><i class="fas fa-print"></i> Cetak Data Inventaris Elektronik dan Alat Listrik</a>
    </div>
    
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        
        <a href="<?= base_url('_report/kategori3') ?>" target="_blank" class="btn btn-info "><i class="fas fa-print"></i> Cetak Data Inventaris Barang Mebelair</a>
    </div>
    
</div>
<?php

    // menambahkan script khusus untuk halaman ini saja
    $addscript = '
        <script src="'.asset('_assets/vendor/datatables/jquery.dataTables.min.js').'"></script>
        <script src="'.asset('_assets/vendor/datatables/dataTables.bootstrap4.min.js').'"></script>
    
        <script src="'.asset('_assets/js/demo/datatables-demo.js').'"></script>
    ';

    // menghubungkan file footer dengan file detail Pegawai
    require_once "_template/_footer.php";
?>