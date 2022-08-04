<?php
    include "../_config/config.php";
    require_once "../_assets/vendor/vendor/autoload.php";

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $pegawai = query("SELECT * FROM pegawai");
    $content = ' <center><h1>KANTOR CAMAT PEGASING<br/></h1><h2>Laporan Inventaris Barang Mesin/Kendaraan Bermotor</h2></center><br/><br/>';;
    $content .= '<table border="1" cellspacing="0" cellpadding="3" width="100%" >
    
    <tr>
	<th>No</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Jenis Barang</th>
    <th>No. Register</th>
    <th>Merk/Tipe</th>
    <th>Ukuran/CC</th>
    <th>Bahan</th>
    <th>Tahun Pembelian</th>
    <th>No. Pabrik</th>
	<th>No. Rangka</th>
    <th>No. Mesin</th>
	<th>No. Polisi</th>
	<th>No. BPKB</th>
    <th>Asal Usul</th>
	<th>Harga</th>
	<th>Kondisi</th>
    <th>Keterangan</th>
    </tr>';
    $no = 1;
    foreach ($pegawai as $all_pegawai ) {
    $content .= "<tr>
        <td>".$no."</td>
        <td>".$all_pegawai['kodebarang']."</td>
        <td>".ucwords($all_pegawai['namabarang'])."</td>
        <td>".ucwords($all_pegawai['jenisbarang'])."</td>
        <td>".ucwords($all_pegawai['noregister'])."</td>
        <td>".$all_pegawai['merktype']."</td>
        <td>".strtoupper($all_pegawai['ukurancc'])."</td>
        <td>".$all_pegawai['bahan']."</td>
        <td>".ucwords($all_pegawai['tahunpembelian'])."</td>
		<td>".ucwords($all_pegawai['nopabrik'])."</td>
		<td>".ucwords($all_pegawai['norangka'])."</td>
		<td>".ucwords($all_pegawai['nomesin'])."</td>
		<td>".ucwords($all_pegawai['nopolisi'])."</td>
		<td>".ucwords($all_pegawai['nobpkb'])."</td>
		<td>".ucwords($all_pegawai['asalusul'])."</td>
		<td>".ucwords($all_pegawai['harga'])."</td>
		<td>".ucwords($all_pegawai['kondisi'])."</td>
		<td>".ucwords($all_pegawai['keterangan'])."</td>
        </tr>";
    $no++;
    }
	
    $content .= "</html>";

    $dompdf->loadHtml($content);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('Legal', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Ball_pegawai[0]ser
    $dompdf->stream("Report Barang.pdf",["Attachment" => false]);
	?>
	