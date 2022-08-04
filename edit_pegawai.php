<?php
    //variabel yang berfungsi menyimpan detail dari sub judul website
    $nama = 'Edit Data Pegawai'; 
    //variabel yang berfungsi mengatifkan sidebar
    $pegawai = 'pegawai';
    // menambahkan style khusus untuk halaman ini saja
    $addstyles = '_assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css';

    // menghubungkan file header dengan file edit_pegawai
    require_once "_template/_header.php";
    //simpan data id(nip) yang dikirim dari halaman pegawai ke dalam variabel nip
    $kodebarang = $_GET['id'];

    // paggil data pegawai berdasarkan nip untuk ditampilkan di form sebelum melakukan perubahan data
    $result = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE kodebarang='$kodebarang'");
    // hasil dari proses result akan disimpan ke variabel data
    $data = mysqli_fetch_assoc($result);
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('pegawai') ?>">Data Inventaris</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>

<div class="card mb-4">
    <div class="card-body">
        <form method="POST" action="<?= base_url('_config/proses_pegawai') ?>?edit" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="kodebarang" class="col-sm-3 col-form-label">Kode Barang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="kodebarang" id="kodebarang" value="<?= $data['kodebarang'] ?>" placeholder="Kode Barang" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="namabarang" class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="namabarang" id="namabarang" value="<?= $data['namabarang'] ?>" placeholder="Nama Barang" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="jenisbarang" class="col-sm-3 col-form-label">Jenis Barang</label>
                <div class="col">
                    <input type="text" class="form-control" name="jenisbarang" id="jenisbarang" value="<?= $data['jenisbarang'] ?>" placeholder="Jenis Barang" required autocomplete="off">
                </div>
                
            </div>
            <div class="form-group row">
                <label for="noregister" class="col-sm-3 col-form-label">No. Register</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="noregister" id="noregister" value="<?= $data['noregister'] ?>" placeholder="No. Register" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="merktype" class="col-sm-3 col-form-label">Merk/Type</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="merktype" id="merktype" value="<?= $data['merktype'] ?>" placeholder="Merk/Type" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="ukurancc" class="col-sm-3 col-form-label">Ukuran/CC</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="ukurancc" id="ukurancc" value="<?= $data['ukurancc'] ?>" placeholder="Ukuran/CC" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="bahan" class="col-sm-3 col-form-label">Bahan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="bahan" id="bahan" value="<?= $data['bahan'] ?>" placeholder="Bahan" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="tahunpembelian" class="col-sm-3 col-form-label">Tahun Pembelian</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tahunpembelian" id="tahunpembelian" value="<?= $data['tahunpembelian'] ?>" placeholder="Tahun Pembelian" required autocomplete="off">
                </div>
            </div>
            
			 <div class="form-group row">
                <label for="nopabrik" class="col-sm-3 col-form-label">No. Pabrik</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nopabrik" id="nopabrik" value="<?= $data['nopabrik'] ?>" placeholder="No. Pabrik" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="norangka" class="col-sm-3 col-form-label">No. Rangka</label>
                <div class="col">
                    <input type="text" class="form-control" name="norangka" id="norangka" value="<?= $data['norangka'] ?>" placeholder="No. Rangka" required autocomplete="off">
                </div>
            </div>
			<div class="form-group row">
                <label for="nomesin" class="col-sm-3 col-form-label">No. Mesin</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nomesin" id="nomesin" value="<?= $data['nomesin'] ?>" placeholder="No. Mesin" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="nopolisi" class="col-sm-3 col-form-label">No. Polisi</label>
                <div class="col">
                    <input type="text" class="form-control" name="nopolisi" id="nopolisi" value="<?= $data['nopolisi'] ?>" placeholder="No. Polisi" required autocomplete="off">
                </div>
            </div>
			<div class="form-group row">
                <label for="nobpkb" class="col-sm-3 col-form-label">No. BPKB</label>
                <div class="col">
                     <input type="text" class="form-control" name="nobpkb" id="nobpkb" value="<?= $data['nobpkb'] ?>" placeholder="No. BPKB" required autocomplete="off">
                </div>
            </div>
			<div class="form-group row">
                <label for="asalusul" class="col-sm-3 col-form-label">Asal Usul</label>
                <div class="col">
                     <input type="text" class="form-control" name="asalusul" id="asalusul" value="<?= $data['asalusul'] ?>" placeholder="Pembelian/Hibah" required autocomplete="off">
                </div>
            </div>
			<div class="form-group row">
                <label for="harga" class="col-sm-3 col-form-label">Harga (RP)</label>
                <div class="col">
                     <input type="text" class="form-control" name="harga" id="harga" value="<?= $data['harga'] ?>" placeholder=" RP" required autocomplete="off">
                </div>
            </div>
			<div class="form-group row">
                <label for="kondisi" class="col-sm-3 col-form-label">Kondisi</label>
                <div class="col-sm-9">
                    <select class="form-control" name="kondisi" id="kondisi" required autocomplete="off">
                        <option value="Baik" <?= $data['kondisi'] == 'Baik' ? 'selected' :null ?>>Baik</option>
                        <option value="Kurang Baik" <?= $data['kondisi'] == 'Kurang Baik' ? 'selected' :null ?>>Kurang Baik</option>
						<option value="Rusak" <?= $data['kondisi'] == 'Rusak' ? 'selected' :null ?>>Rusak</option>
                    </select>
                </div>
            </div>
			<div class="form-group row">
                <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col">
                    <input type="text" class="form-control" name="keterangan" id="keterangan" value="<?= $data['keterangan'] ?>" placeholder="Keterangan" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label"> Photo Barang</label>
               <div class="col-sm-9">
                    <a href="<?= asset('_assets/img/').$data['foto_pegawai'] ?>" target="_blank" class="text-decoration-none">
                        <img src="<?= asset('_assets/img/').$data['foto_pegawai'] ?>" alt="Foto Pegawai" class="img-fluid mb-3" width="60px" height="70px">
                    </a>
                    <input type="hidden" name="foto_lama" value="<?= $data['foto_pegawai'] ?>">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="foto">
                        <label class="custom-file-label" for="customFile">Tentukan file</label>
                    </div>
                    <span class="text-info">* Maksimal Ukuran File 1 MB</span>
                </div>
            </div>

        <!-- disini tanda tempat form -->
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-success float-right"><i class="fas fa-fw fa-save"></i> Simpan</button>
        <a href="<?= base_url('pegawai') ?>" class="btn btn-warning"><i class="fas fa-fw fa-chevron-left"></i> Kembali</a>
    </div>
    </form>
</div>


<?php

    $addscript = '
        <script src="'.asset('_assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js').'"></script>
        <script>
            $(".datepicker").datepicker()

            
        $(document).on("change", ".custom-file-input", function (event) {
            $(this).next(".custom-file-label").html(event.target.files[0].name);
            })    
        </script>
    ';

    // menghubungkan file footer dengan file edit_pegawai
    require_once "_template/_footer.php";
?>