<?php
include ('login.php');
date_default_timezone_set('Asia/Jakarta');
function tglindo($indo_tgl){
	$tr = trim($indo_tgl);
	$indo_tgl = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
		array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
	return $indo_tgl;
}
if (empty($_POST['nama'] && $_POST['email'])) {
	header("Location:infor.php");
} else {
	echo "<br>";
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Email :".$_POST['email']."</center><br>";
	echo "<center>Anda login pada:".tglindo(date("D, d F Y, H:i:s "))."</center>";
} 
?>