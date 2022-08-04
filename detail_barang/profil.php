<?php
$data_pegawai = query("SELECT * FROM pegawai WHERE kodebarang='$kodebarang'");
?>
<table class="text-dark mt-3">
    <tr>
        <td>Kode barang</td>
        <td>:</td>
        <td><?= $data_pegawai[0]['kodebarang'] ?></td>
    </tr>
    <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><?= ucwords($data_pegawai[0]['namabarang']) ?></td>
    </tr>
    <tr>
        <td>Jenis Barang</td>
        <td>:</td>
        <td><?= ucwords($data_pegawai[0]['jenisbarang'])?> </td>
    </tr>
    <tr>
        <td>No. Register</td>
        <td>:</td>
        <td><?= ucwords($data_pegawai[0]['noregister']) ?> </td>
    </tr>
    <tr>
        <td>Merk/Tipe</td>
        <td>:</td>
        <td><?= ucwords($data_pegawai[0]['merktype']) ?> </td>
    </tr>
    <tr>
        <td>Ukuran / CC</td>
        <td>:</td>
        <td><?= strtoupper($data_pegawai[0]['ukurancc']) ?> </td>
    </tr>
    <tr>
        <td>Bahan</td>
        <td>:</td>
        <td><?= ucwords($data_pegawai[0]['bahan']) ?> </td>
    </tr>
    <tr>
        <td>Tahun Pembelian</td>
        <td>:</td>
        <td><?= strtoupper($data_pegawai[0]['tahunpembelian']) ?> </td>
    </tr>
    <tr>
        <td>No. Pabrik</td>
        <td>:</td>
        <td><?= ucwords($data_pegawai[0]['nopabrik']) ?> </td>
    </tr>
    <tr>
        <td>No. Rangka</td>
        <td>:</td>
        <td><?= $data_pegawai[0]['norangka'] ?> </td>
    </tr>
    <tr>
        <td>No. Mesin</td>
        <td>:</td>
        <td><?= $data_pegawai[0]['nomesin'] ?> </td>
    </tr>
	<tr>
        <td>No. Polisi</td>
        <td>:</td>
        <td><?= $data_pegawai[0]['nopolisi'] ?> </td>
    </tr>
    <tr>
        <td>No. BPKB</td>
        <td>:</td>
        <td><?= $data_pegawai[0]['nobpkb'] ?> </td>
    </tr>
	 <tr>
        <td>Asal Usul</td>
        <td>:</td>
        <td><?= $data_pegawai[0]['asalusul'] ?> </td>
    </tr>
	 <tr>
        <td>Harga</td>
        <td>:</td>
        <td><?= $data_pegawai[0]['harga'] ?> </td>
    </tr>
	 <tr>
        <td>Kondisi</td>
        <td>:</td>
        <td><?= $data_pegawai[0]['kondisi'] ?> </td>
    </tr>
	 <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td><?= $data_pegawai[0]['keterangan'] ?> </td>
    </tr>
</table>