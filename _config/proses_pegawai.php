<?php

require_once "config.php";

if (isset($_GET['add'])) {
    $kodebarang = mysqli_real_escape_string($koneksi, $_POST['kodebarang']);
    $namabarang = strip_tags($_POST['namabarang']);
    $jenisbarang = strip_tags($_POST['jenisbarang']);
    $noregister = strip_tags($_POST['noregister']);
    $merktype = strip_tags($_POST['merktype']);
    $ukurancc = strip_tags($_POST['ukurancc']);
    $bahan = strip_tags($_POST['bahan']);
    $tahunpembelian = strip_tags($_POST['tahunpembelian']);
    $nopabrik = strip_tags($_POST['nopabrik']);
    $norangka = strip_tags($_POST['norangka']);
    $nomesin = strip_tags($_POST['nomesin']);
    $nopolisi = strip_tags($_POST['nopolisi']);
	$nobpkb = strip_tags($_POST['nobpkb']);
	$asalusul = strip_tags($_POST['asalusul']);
	$harga = strip_tags($_POST['harga']);
    $kondisi = strip_tags($_POST['kondisi']);
	$keterangan = strip_tags($_POST['keterangan']);
    
	$ekstensi  = ['png', 'jpeg', 'jpg'];
    $namaFile    = strtolower($_FILES['foto']['name']);
    $tipe   = pathinfo($namaFile, PATHINFO_EXTENSION);
    $ukuranFile    = $_FILES['foto']['size'];
    $sumber   = $_FILES['foto']['tmp_name'];
    $foto = uniqid();
    $foto .= '.';
    $foto .= $tipe;

    if (in_array($tipe, $ekstensi) === true) {
        if ($ukuranFile < 1048576) { //1 mb
            $lokasi = "../_assets/img/" . $foto;
            create("INSERT INTO pegawai VALUES ('$kodebarang','$namabarang','$jenisbarang','$noregister','$merktype','$ukurancc','$bahan','$tahunpembelian','$nopabrik','$norangka','$nomesin','$nopolisi','$nobpkb','$asalusul','$harga','$kondisi','$keterangan','$foto')");
            $upload = move_uploaded_file($sumber, $lokasi);
            if ($upload) {
                echo '<script>
                        alert("Data Berhasil Ditambah")
                        window.location = "' . base_url('pegawai') . '";
                        </script>';
            } else {
                echo '<script>
                        alert("Data Gagal Diupload")
                        window.location = "' . base_url('tambah_pegawai') . '";
                        </script>';
            }
        } else {
            echo '<script>alert("Maaf Ukuran File Terlalu Besar")
                        window.location = "' . base_url('tambah_pegawai') . '";
                        </script>';
        }
    } else {
        echo '<script>alert("Maaf Jenis File Tidak Diizinkan")
                window.location = "' . base_url('tambah_pegawai') . '";
                </script>';
    }
} elseif (isset($_GET['edit'])) {
	
    $foto_lama = strip_tags($_POST['foto_lama']);
    $kodebarang = mysqli_real_escape_string($koneksi, $_POST['kodebarang']);
    $namabarang = strip_tags($_POST['namabarang']);
    $jenisbarang = strip_tags($_POST['jenisbarang']);
    $noregister = strip_tags($_POST['noregister']);
    $merktype = strip_tags($_POST['merktype']);
    $ukurancc = strip_tags($_POST['ukurancc']);
    $bahan = strip_tags($_POST['bahan']);
    $tahunpembelian = strip_tags($_POST['tahunpembelian']);
    $nopabrik = strip_tags($_POST['nopabrik']);
    $norangka = strip_tags($_POST['norangka']);
    $nomesin = strip_tags($_POST['nomesin']);
    $nopolisi = strip_tags($_POST['nopolisi']);
	$nobpkb = strip_tags($_POST['nobpkb']);
	$asalusul = strip_tags($_POST['asalusul']);
	$harga = strip_tags($_POST['harga']);
    $kondisi = strip_tags($_POST['kondisi']);
	$keterangan = strip_tags($_POST['keterangan']);
    
 

    // cek form, apakah user hanya mengubah data tanpa mengganti foto
    // jika foto tidak diubah, simpan data formnya saja
    if ($_FILES['foto']['name'] == '') {
        $query = mysqli_query($koneksi, "UPDATE pegawai SET kodebarang='$kodebarang',namabarang='$namabarang', jenisbarang='$jenisbarang', noregister='$noregister', merktype='$merktype', ukurancc='$ukurancc', bahan='$bahan', tahunpembelian='$tahunpembelian',nopabrik='$nopabrik',norangka='$norangka',nomesin='$nomesin', nopolisi='$nopolisi', nobpkb='$nobpkb',asalusul='$asalusul',harga='$harga',kondisi='$kondisi',keterangan='$keterangan' ");
        if ($query) {
            echo '<script>
                alert("Data Berhasil Diperbarui")
                window.location = "' . base_url('pegawai') . '";
                </script>';
        } else {
            echo '<script>
                alert("Data Gagal Diperbarui")
                window.location = "' . base_url('edit_pegawai') . '?id=' . $nipAsli . '";
                </script>';
        }
    } elseif ($_FILES['foto']['name'] !== '') {
        $ekstensi  = ['png', 'jpeg', 'jpg'];
        $namaFile    = strtolower($_FILES['foto']['name']);
        $tipe   = pathinfo($namaFile, PATHINFO_EXTENSION);
        $ukuranFile    = $_FILES['foto']['size'];
        $sumber   = $_FILES['foto']['tmp_name'];
        $foto = uniqid();
        $foto .= '.';
        $foto .= $tipe;

        if (in_array($tipe, $ekstensi) === true) {
            if ($ukuranFile < 1048576) { //1 mb
                // hapus foto lama sebelum upload foto baru
                unlink("../_assets/img/" . $foto_lama);

                mysqli_query($koneksi, "UPDATE pegawai SET kodebarang='$kodebarang',namabarang='$namabarang',foto_pegawai='$foto', jenisbarang='$jenisbarang', noregister='$noregister', merktype='$merktype', ukurancc='$ukurancc', bahan='$bahan', tahunpembelian='$tahunpembelian',nopabrik='$nopabrik',norangka='$norangka',nomesin='$nomesin', nopolisi='$nopolisi', nobpkb='$nobpkb',asalusul='$asalusul',harga='$harga',kondisi='$kondisi',keterangan='$keterangan' WHERE kodebarang='$nipAsli' ");
                $lokasi = "../_assets/img/" . $foto;
                $upload = move_uploaded_file($sumber, $lokasi);
                if ($upload) {
                    echo '<script>
                            alert("Data Berhasil Ditambah")
                            window.location = "' . base_url('pegawai') . '";
                            </script>';
                } else {
                    echo '<script>
                            alert("Data Gagal Diupload")
                            window.location = "' . base_url('edit_pegawai') . '?id=' . $nipAsli . '";
                            </script>';
                }
            } else {
                echo '<script>alert("Maaf Ukuran File Terlalu Besar")
                            window.location = "' . base_url('edit_pegawai') . '?id=' . $nipAsli . '";
                            </script>';
            }
        } else {
            echo '<script>alert("Maaf Jenis File Tidak Diizinkan")
                    window.location = "' . base_url('edit_pegawai') . '?id=' . $nipAsli . '";
                    </script>';
        }
    } else {
        echo '<script>
            alert("Data Gagal Diperbarui")
            window.location = "' . base_url('edit_pegawai') . '?id=' . $nipAsli . '";
            </script>';
    }
}
