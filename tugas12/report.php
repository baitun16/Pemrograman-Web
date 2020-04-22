<?php
include 'konek.php';
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf= new Dompdf();
$query= mysqli_query($conn, "select * from maba");
$html ='<center><h1>Daftar Nama Siswa Pendaftar</h1></center><hr/><br/>';
$html .= '<center>
		<table border="1" width="100%">
		<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>NISN</th>
		<th>NIK</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>No Regristrasi Akta</th>
		<th>Agama</th>
		<th>Kewarganegaraan</th>
		<th>Negara</th>
		<th>Kebutuhan Khusus</th>
		<th>Alamat Jalan</th>
		<th>RT</th>
		<th>RW</th>
		<th>Dusun</th>
		<th>Desa</th>
		<th>Kecamatan</th>
		<th>Kode Pos</th>
		<th>Lintang</th>
		<th>Bujur</th>
		<th>Tempat Tinggal</th>
		<th>Moda Transportasi</th>
		<th>Nomor KKS</th>
		<th>Anak Ke</th>
		<th>Penerima KPS/PKH</th>
		<th>NO KPS/PKH</th>
		</tr>
		</center>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
	$html .="<tr>
	<td>".$no."</td>
	<td>".$row['tgl']."</td>
	<td>".$row['nama']."</td>
	<td>".$row['jk']."</td>
	<td>".$row['nisn']."</td>
	<td>".$row['nik']."</td>
	<td>".$row['tmptlhr']."</td>
	<td>".$row['tgllhr']."</td>
	<td>".$row['noregakta']."</td>
	<td>".$row['agama']."</td>
	<td>".$row['kwn']."</td>
	<td>".$row['negara']."</td>
	<td>".$row['kebkhus']."</td>
	<td>".$row['alamatjl']."</td>
	<td>".$row['rt']."</td>
	<td>".$row['rw']."</td>
	<td>".$row['dsn']."</td>
	<td>".$row['desa']."</td>
	<td>".$row['kec']."</td>
	<td>".$row['kdpos']."</td>
	<td>".$row['lintang']."</td>
	<td>".$row['bujur']."</td>
	<td>".$row['domisili']."</td>
	<td>".$row['transport']."</td>
	<td>".$row['nokks']."</td>
	<td>".$row['anke']."</td>
	<td>".$row['penerima']."</td>
	<td>".$row['nopenerima']."</td>
	</tr>";
	$no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
$dompdf->setPaper('A2','landscape');
$dompdf->render();
$dompdf->stream('laporan_pendaftaran.pdf');

?>