<?php
    //variabel yang berfungsi menyimpan detail dari sub judul website
    $nama = 'Tambah Pegawai'; 
    //variabel yang berfungsi mengatifkan sidebar
    $pegawai = 'pegawai';
    // menambahkan style khusus untuk halaman ini saja
    $addstyles = '_assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css';
    // menghubungkan file header dengan file tambah Pegawai
    require_once "_template/_header.php";
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('pegawai') ?>">Data Barang</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
  </ol>
</nav>

<div class="card mb-4">
    <div class="card-body">
        <form method="POST" action="<?= base_url('_config/proses_pegawai') ?>?add" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="kodebarang" class="col-sm-3 col-form-label">Kode Barang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="kodebarang" id="kodebarang" placeholder="Kode Barang" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="namabarang" class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="namabarang" id="namabarang" placeholder="Nama Barang" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="jenisbarang" class="col-sm-3 col-form-label">Jenis Barang</label>
                <div class="col">
                    <input type="text" class="form-control" name="jenisbarang" id="jenisbarang" placeholder="Jenis Barang" required autocomplete="off">
                </div>
                
            </div>
            <div class="form-group row">
                <label for="noregister" class="col-sm-3 col-form-label">No. Register</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="noregister" id="noregister" placeholder="No. Register" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="merktype" class="col-sm-3 col-form-label">Merk/Type</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="merktype" id="merktype" placeholder="Merk/Type" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="ukurancc" class="col-sm-3 col-form-label">Ukuran/CC</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="ukurancc" id="ukurancc" placeholder="Ukuran/CC" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="bahan" class="col-sm-3 col-form-label">Bahan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="bahan" id="bahan" placeholder="Bahan" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="tahunpembelian" class="col-sm-3 col-form-label">Tahun Pembelian</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tahunpembelian" id="tahunpembelian" placeholder="Tahun Pembelian" required autocomplete="off">
                </div>
            </div>
            
			 <div class="form-group row">
                <label for="nopabrik" class="col-sm-3 col-form-label">No. Pabrik</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nopabrik" id="nopabrik" placeholder="No. Pabrik" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="norangka" class="col-sm-3 col-form-label">No. Rangka</label>
                <div class="col">
                    <input type="text" class="form-control" name="norangka" id="norangka" placeholder="No. Rangka" required autocomplete="off">
                </div>
            </div>
			<div class="form-group row">
                <label for="nomesin" class="col-sm-3 col-form-label">No. Mesin</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nomesin" id="nomesin" placeholder="No. Mesin" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="nopolisi" class="col-sm-3 col-form-label">No. Polisi</label>
                <div class="col">
                    <input type="text" class="form-control" name="nopolisi" id="nopolisi" placeholder="No. Polisi" required autocomplete="off">
                </div>
            </div>
			<div class="form-group row">
                <label for="nobpkb" class="col-sm-3 col-form-label">No. BPKB</label>
                <div class="col">
                     <input type="text" class="form-control" name="nobpkb" id="nobpkb" placeholder="No. BPKB" required autocomplete="off">
                </div>
            </div>
			<div class="form-group row">
                <label for="asalusul" class="col-sm-3 col-form-label">Asal Usul</label>
                <div class="col">
                     <input type="text" class="form-control" name="asalusul" id="asalusul" placeholder="Pembelian/Hibah" required autocomplete="off">
                </div>
            </div>
			<div class="form-group row">
                <label for="harga" class="col-sm-3 col-form-label">Harga (RP)</label>
                <div class="col">
                     <input type="text" class="form-control" name="harga" id="harga" placeholder=" RP" required autocomplete="off">
                </div>
            </div>
			<div class="form-group row">
                <label for="kondisi" class="col-sm-3 col-form-label">Kondisi</label>
                <div class="col-sm-9">
                    <select class="form-control" name="kondisi" id="kondisi" required autocomplete="off">
                        <option value="Baik">Baik</option>
                        <option value="Kurang Baik">Kurang Baik</option>
						<option value="Rusak ">Rusak</option>
                    </select>
                </div>
            </div>
			<div class="form-group row">
                <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col">
                    <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="foto_pegawai" class="col-sm-3 col-form-label"> Photo Barang</label>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="foto" required>
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

    // menambahkan script khusus untuk halaman ini saja
    $addscript = '
        <script src="'.asset('_assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js').'"></script>
        <script>
            $(".datepicker").datepicker()

            
        $(document).on("change", ".custom-file-input", function (event) {
            $(this).next(".custom-file-label").html(event.target.files[0].name);
            })    
        </script>
    ';
    // menghubungkan file footer dengan file tambah Pegawai
    require_once "_template/_footer.php";
?>