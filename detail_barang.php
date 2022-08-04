<?php
    //variabel yang berfungsi menyimpan detail dari sub judul website
    $nama = 'Detail Barang'; 
    //variabel yang berfungsi mengatifkan sidebar
    $pegawai = 'pegawai';

    // menghubungkan file header dengan file detail Pegawai
    require_once "_template/_header.php";

    //simpan data id(nip) yang dikirim dari halaman pegawai ke dalam variabel nip
    $kodebarang = $_GET['id'];

    // letakkan kondisi function yang diinginkan
    // tentukan variabel yang akan digunakan untuk menyimpan data function penghubung kehalaman. defualt halaman yaitu profile
    // cek data function yang dikirim dari halaman sebelumnya untuk menampilkan detail data pegawai yang diinginkan
    if (isset($_SESSION['func'])) {
        $func = $_SESSION['func'];
    }else{
        $func = "link_profil";
    }
    

    // lakukan filter data berdasarkan nip yang telah ditangkap divariabel nip dan jalankan function query
    // simpan hasil query kedalam variabel data_detail
    $data_detail = query("SELECT * FROM pegawai WHERE kodebarang='$kodebarang'");
        
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('pegawai') ?>">Data Inventaris</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Barang</li>
    </ol>
</nav>

<!-- DataTales Example -->
<div class="row">
    <div class="col-md-4">
        <div class="card shadow mb-4 border-left-primary">
            <div class="card-body">
                <div class="text-center">
                    <img src="<?= asset('_assets/img/').$data_detail[0]['foto_pegawai']; ?>" class="img-fluid shadow" alt="Foto Pegawai">
                    <h2 class="mt-3"><?= ucwords($data_detail[0]['namabarang']) ?></h2>
                    <span class="text-muted"><?= $data_detail[0]['kodebarang'] ?></span>
                </div>
              
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card shadow mb-4 border-bottom-primary">
            <div class="card-body">
                
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-profil" role="tabpanel">
                        <?php
                            require_once "detail_barang/profil.php";
                        ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>



<?php
    
    // menghubungkan file footer dengan file detail pegawai
    require_once "_template/_footer.php";
    
    
?>