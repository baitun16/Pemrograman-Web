<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		.warning{color: #FF0000;}
	</style>
</head>
<body>
<?php


$error_tgl="";
$error_nama="";
$error_jk="";
$error_nisn="";
$error_nik="";
$error_tmptlhr="";
$error_tgllhr="";
$error_noregakta="";
$error_agama="";
$error_kwn="";
$error_negara="";
$error_kebkhus="";
$error_alamatjl="";
$error_rt="";
$error_rw="";
$error_dsn="";
$error_desa="";
$error_kec="";
$error_kdpos="";
$error_lintang="";
$error_bujur="";
$error_domisili="";
$error_transport="";
$error_nokks="";
$error_anke="";
$error_penerima="";
$error_nopenerima="";

$tgl="";
$nama="";
$jk="";
$nisn="";
$nik="";
$tmptlhr="";
$tgllhr="";
$noregakta="";
$agama="";
$kwn="";
$negara="";
$kebkhus="";
$alamatjl="";
$rt="";
$rw="";
$dsn="";
$desa="";
$kec="";
$kdpos="";
$lintang="";
$bujur="";
$domisili="";
$transport="";
$nokks="";
$anke="";
$penerima="";
$nopenerima="";


if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if (empty($_POST["tgl"])) {
		$error_tgl="Tidak boleh kosong";
	}else{
		$tgl = cek_input($_POST["tgl"]);
	}if (empty($_POST["nama"])) {
		$error_nama = "Tidak boleh kosong";
	}else{
		$nama= cek_input($_POST["nama"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
			$error_nama="Inputan hanya boleh huruf dan spasi";
		}
	}if (empty($_POST["jk"])) {
		$error_jk="Tidak boleh kosong";
	}else{
		$jk = cek_input($_POST["jk"]);
	}if (empty($_POST["nisn"])) {
		$error_nisn ="Tidak boleh kosong";
	}else{
		$nisn= cek_input($_POST["nisn"]);
		if (!is_numeric($nisn)) {
			$error_nisn="Tidak Valid"; 
		}
	}if (empty($_POST["nik"])) {
		$error_nik="Tidak boleh kosong";
	}else{
		$nik= cek_input($_POST["nik"]);
		if (!is_numeric($nik)) {
			$error_nik= "Tidak Valid";
		}
	}if (empty($_POST["tmptlhr"])) {
		$error_tmptlhr="Tidak boleh kosong";
	}else{
		$tmptlhr = cek_input($_POST["tmptlhr"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$tmptlhr)) {
			$error_tmptlhr="Inputan hanya huruf dan spasi";
		}
	}if (empty($_POST["tgllhr"])) {
		$error_tgllhr="Tidak boleh kosong";
	}else{
		$tgllhr= cek_input($_POST["tgllhr"]);
		if (!is_numeric($tgllhr)) {
			$error_tgllhr= "Tidak Valid";
		}
	}if (empty($_POST["noregakta"])) {
		$error_noregakta="Tidak boleh kosong";
	}else{
		$noregakta= cek_input($_POST["noregakta"]);
		if (!is_numeric($nik)) {
			$error_noregakta= "Tidak Valid";
		}
	}if (empty($_POST["agama"])) {
		$error_agama="Tidak boleh kosong";
	}else{
		$agama= cek_input($_POST["agama"]);
	}if (empty($_POST["kwn"])) {
		$error_kwn="Tidak boleh kosong";
	}else{
		$kwn= cek_input($_POST["kwn"]);
	}if (empty($_POST["negara"])) {

	}else{
		$negara= cek_input($_POST["negara"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$negara)) {
			$error_negara="Tidak Valid";
		}
	}if (empty($_POST["kebkhus"])) {
		$error_kebkhus="Tidak boleh kosong";
	}else{
		$kebkhus= cek_input($_POST["kebkhus"]);
	}if (empty($_POST["alamatjl"])) {
		$error_alamatjl="Tidak boleh kosong";
	}else{
		$alamatjl= cek_input($_POST["alamatjl"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$alamatjl)) {
			$error_alamatjl= "Tidak Valid";
		}
	}if (empty($_POST["rt"])) {
		$error_rt="Tidak boleh kosong";
	}else{
		$rt= cek_input($_POST["rt"]);
		if (!is_numeric($rt)) {
			$error_rt= "Tidak Valid";
		}
	}if (empty($_POST["rw"])) {
		$error_rw="Tidak boleh kosong";
	}else{
		$rw= cek_input($_POST["rw"]);
		if (!is_numeric($rw)) {
			$error_rw= "Tidak Valid";
		}
	}if (empty($_POST["dsn"])) {
		$error_dsn="Tidak boleh kosong";
	}else{
		$dsn= cek_input($_POST["dsn"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$dsn)) {
			$error_dsn= "Tidak valid";
		}
	}if (empty($_POST["desa"])) {
		$error_desa="Tidak boleh kosong";
	}else{
		$desa= cek_input($_POST["desa"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$desa)) {
			$error_desa= "Tidak valid";
		}
	}if (empty($_POST["kec"])) {
		$error_kec="Tidak boleh kosong";
	}else{
		$kec= cek_input($_POST["kec"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kec)) {
			$error_kec= "Tidak Valid";
		}
	}if (empty($_POST["kdpos"])) {
		$error_kdpos="Tidak boleh kosong";
	}else{
		$kdpos= cek_input($_POST["kdpos"]);
		if (!is_numeric($kdpos)) {
			$error_kdpos= "Tidak Valid";
		}
	}if (empty($_POST["lintang"])) {

	}else{
		$lintang= cek_input($_POST["lintang"]);
		if (!is_numeric($lintang)) {
			$error_lintang="Tidak Valid";
		}
	}if (empty($_POST["bujur"])) {

	}else{
		$bujur= cek_input($_POST["bujur"]);
		if (!is_numeric($bujur)) {
			$error_bujur="Tidak Valid";
		}
	}if (empty($_POST["domisili"])) {
		$error_domisili="Tidak boleh kosong";
	}else{
		$domisili= cek_input($_POST["domisili"]);
	}if (empty($_POST["transport"])) {
		$error_transport="Tidak boleh kosong";
	}else{
		$transport= cek_input($_POST["transport"]);
	}if (empty($_POST["nokks"])) {

	}else{
		$nokks= cek_input($_POST["nokks"]);
		if (!is_numeric($nokks)) {
			$error_nokks="Tidak Valid";
		}
	}if (empty($_POST["anke"])) {
		$error_anke="Tidak boleh kosong";
	}else{
		$anke= cek_input($_POST["anke"]);
	}if (empty($_POST["penerima"])) {
		$error_penerima="Tidak boleh kosong";
	}else{
		$penerima= cek_input($_POST["penerima"]);
	}if (empty($_POST["nopenerima"])) {

	}else{
		$nopenerima= cek_input($_POST["nopenerima"]);
		if (!is_numeric($nopenerima)) {
			$error_nopenerima="Tidak Valid";
		}
	}
}

function cek_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Formulir Pendaftaran Peserta Didik
			</div>
			
			<div class="card-body">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
					<div class="form-group row">
					<label for="tgl" class="col-sm-3 col-form-label">Tanggal</label>
					<div class="col-sm-10">
						<input type="date" name="tgl" class="form-control <?php echo ($error_tgl !="" ? "is-invalid" : ""); ?>" id="tgl" value="<?php echo $tgl; ?>"><span class="warning"><?php echo $error_tgl; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
					<div class="col-sm-10">
						<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
					<div class="col-xs-3 form-check">
						<input type="radio" name="jk" class="form-check-input <?php echo ($error_jk !="" ? "is-invalid" : ""); ?>" id="jk" value="lk" checked="">laki-laki <br>
						<input type="radio" name="jk" class="form-check-input <?php echo($error_jk !=""? "is-invalid" : ""); ?>" id="jk" value="pr">Perempuan<br><span class="warning"><?php echo $error_jk; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nisn" class="col-sm-3 col-form-label">NISN</label>
					<div class="col-sm-10">
						<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="nisn" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nik" class="col-sm-5 col-form-label">NIK/ No. KITAS(untuk WNA)</label>
					<div class="col-sm-10">
						<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="nik" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="tmptlhr" class="col-sm-3 col-form-label">Tempat Lahir</label>
					<div class="col-sm-10">
						<input type="text" name="tmptlhr" class="form-control <?php echo ($error_tmptlhr !="" ? "is-invalid" : ""); ?>" id="tmptlhr" placeholder="tmptlhr" value="<?php echo $tmptlhr; ?>"><span class="warning"><?php echo $error_tmptlhr; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="tgllhr" class="col-sm-3 col-form-label">Tanggal Lahir</label>
					<div class="col-sm-10">
						<input type="text" name="tgllhr" class="form-control <?php echo ($error_tgllhr !="" ? "is-invalid" : ""); ?>" id="tgllhr" placeholder="tgllhr" value="<?php echo $tgllhr; ?>"><span class="warning"><?php echo $error_tgllhr; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="noregakta" class="col-sm-4 col-form-label">No Regristrasi Akta Lahir</label>
					<div class="col-sm-10">
						<input type="text" name="noregakta" class="form-control <?php echo ($error_noregakta !="" ? "is-invalid" : ""); ?>" id="noregakta" placeholder="nik" value="<?php echo $noregakta; ?>"><span class="warning"><?php echo $error_noregakta; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="agama" class="col-sm-4 col-form-label">Agama dan Kepercayaan</label>
					<div class="col-sm-6 form-check">
						<select class="form-control" id="agama" name="agama">
							<option value="islam">Islam</option>
							<option value="katolik">Kristen Katolik</option>
							<option value="protestan">Kristen Protestan</option>
							<option value="hindu">Hindu</option>
							<option value="budha">Budha</option>
							<option value="kong hu cu">Kong Hu Chu</option>
							<option value="percaya pada tuhan YME">Kepercayaan kepada Tuhan YME</option>	
						</select><span class="warning"><?php echo $error_agama; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="jk" class="col-sm-4 col-form-label">Kewarganegaraan</label>
					<div class="col-xs-3 form-check">
						<input type="radio" name="kwn" class="form-check-input <?php echo ($error_kwn !="" ? "is-invalid" : ""); ?>" id="kwn" value="wni" checked="">Indonesia(WNI) <br>
						<input type="radio" name="kwn" class="form-check-input <?php echo($error_kwn !=""? "is-invalid" : ""); ?>" id="kwn" value="wna">Asing(WNA)<br><span class="warning"><?php echo $error_jk; ?></span>
					</div>
				</div>


				<div class="form-group row">
					<label for="negara" class="col-sm-3 col-form-label">Negara</label>
					<div class="col-sm-10">
						<input type="text" name="negara" class="form-control <?php echo ($error_negara !="" ? "is-invalid" : ""); ?>" id="negara" placeholder="negara" value="<?php echo $negara; ?>"><span class="warning"><?php echo $error_negara; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kebkhus" class="col-sm-4 col-form-label">Berkebutuhan Khusus</label>
					<div class="col-sm-6 form-check">
						<select class="form-control" id="kebkhus" name="kebkhus">
							<option value="tidak">Tidak</option>
							<option value="Netra">Netra</option>
							<option value="rungu">Rungu</option>
							<option value="grahita ringan">Grahita Ringan</option>
							<option value="grahita sedang">Grahita Sedang</option>
							<option value="daksa ringan">Daksa Ringan</option>
							<option value="daksa sedang">Daksa Sedang</option>
							<option value="laras">Laras</option>
							<option value="wicara">Wicara</option>
							<option value="tuna ganda">Tuna Ganda</option>
							<option value="hiperaktif">Hiperaktif</option>
							<option value="cerdas istimewah">Cerdas Istimewah</option>
							<option value="bakat istimewah">Bakat Istimewah</option>
							<option value="kesulitan belajar">Kesulitan Belajar</option>
							<option value="indigo">Indigo</option>
							<option value="down sindrome">Down Sindrome</option>
							<option value="autis">Autis</option>
						</select><span class="warning"><?php echo $error_kebkhus; ?></span>
					</div>
				</div>


				<div class="form-group row">
					<label for="alamatjl" class="col-sm-3 col-form-label">Alamat Jalan</label>
					<div class="col-sm-10">
						<input type="text" name="alamatjl" class="form-control <?php echo ($error_alamatjl !="" ? "is-invalid" : ""); ?>" id="alamatjl" placeholder="alamatjl" value="<?php echo $alamatjl; ?>"><span class="warning"><?php echo $error_alamatjl; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="rt" class="col-sm-3 col-form-label">RT</label>
					<div class="col-sm-10">
						<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="rt" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="rw" class="col-sm-3 col-form-label">RW</label>
					<div class="col-sm-10">
						<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="rw" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="dsn" class="col-sm-3 col-form-label">Nama Dusun</label>
					<div class="col-sm-10">
						<input type="text" name="dsn" class="form-control <?php echo ($error_dsn !="" ? "is-invalid" : ""); ?>" id="dsn" placeholder="dsn" value="<?php echo $dsn; ?>"><span class="warning"><?php echo $error_dsn; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="desa" class="col-sm-5 col-form-label">Nama Kelurahan/ Desa</label>
					<div class="col-sm-10">
						<input type="text" name="desa" class="form-control <?php echo ($error_desa !="" ? "is-invalid" : ""); ?>" id="desa" placeholder="desa" value="<?php echo $desa; ?>"><span class="warning"><?php echo $error_desa; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kec" class="col-sm-3 col-form-label">Kecamatan</label>
					<div class="col-sm-10">
						<input type="text" name="kec" class="form-control <?php echo ($error_kec !="" ? "is-invalid" : ""); ?>" id="kec" placeholder="kec" value="<?php echo $kec; ?>"><span class="warning"><?php echo $error_kec; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kdpos" class="col-sm-3 col-form-label">Kode Pos</label>
					<div class="col-sm-10">
						<input type="text" name="kdpos" class="form-control <?php echo ($error_kdpos !="" ? "is-invalid" : ""); ?>" id="kdpos" placeholder="kdpos" value="<?php echo $kdpos; ?>"><span class="warning"><?php echo $error_kdpos; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="lintang" class="col-sm-3 col-form-label">Lintang</label>
					<div class="col-sm-10">
						<input type="text" name="lintang" class="form-control <?php echo ($error_lintang !="" ? "is-invalid" : ""); ?>" id="lintang" placeholder="lintang" value="<?php echo $lintang; ?>"><span class="warning"><?php echo $error_lintang; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="bujur" class="col-sm-3 col-form-label">Bujur</label>
					<div class="col-sm-10">
						<input type="text" name="bujur" class="form-control <?php echo ($error_bujur !="" ? "is-invalid" : ""); ?>" id="bujur" placeholder="bujur" value="<?php echo $bujur; ?>"><span class="warning"><?php echo $error_bujur; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="domisili" class="col-sm-3 col-form-label">Tempat Tinggal</label>
					<div class="col-sm-7 form-check">
						<select class="form-control" id="domisili" name="domisili">
							<option value="sama ortu">Bersama Orang Tua</option>
							<option value="wali">Wali</option>
							<option value=kos>Kos</option>
							<option value="asrama">Asrama</option>
							<option value="panti asuhan">Panti Asuhan</option>
							<option value="lainnya">Lainnya</option>			
						</select><span class="warning"><?php echo $error_domisili; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="transport" class="col-sm-3 col-form-label">Moda Transportasi</label>
					<div class="col-sm-7 form-check">
						<select class="form-control" id="transport" name="transport">
							<option value="jalan kaki">Jalan Kaki</option>
							<option value="kendaraan pribadi">Kendaraan Pribadi</option>
							<option value="kendaraan umum">Kendaraan Umum</option>
							<option value="jemputan sekolah">Jemputan Sekolah</option>
							<option value="kereta api">Kereta Api</option>
							<option value="ojek">Ojek</option>
							<option value="andong">Andong/ Dokar/ Delman</option>
							<option value="perahu penyebrangan">Perahu Penyebrangan</option>
							<option value="lainnya">Lainnya</option>
						</select><span class="warning"><?php echo $error_transport; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nokks" class="col-sm-5 col-form-label">No KKS(Kartu Keluarga Sejahtera)</label>
					<div class="col-sm-10">
						<input type="text" name="nokks" class="form-control <?php echo ($error_nokks !="" ? "is-invalid" : ""); ?>" id="nokks" placeholder="nokks" value="<?php echo $nokks; ?>"><span class="warning"><?php echo $error_nokks; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="anke" class="col-sm-3 col-form-label">Anak Ke-berapa (Berdasarkan KK)</label>
					<div class="col-sm-10">
						<input type="text" name="anke" class="form-control <?php echo ($error_anke !="" ? "is-invalid" : ""); ?>" id="anke" placeholder="anke" value="<?php echo $anke; ?>"><span class="warning"><?php echo $error_anke; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="penerima" class="col-sm-4 col-form-label">Penerima KPS/PKH: </label>
					<div class="col-xs-3 form-check">
						<input type="radio" name="penerima" class="form-check-input <?php echo ($error_penerima !="" ? "is-invalid" : ""); ?>" id="penerima" value="ya" checked="">Ya<br>
						<input type="radio" name="penerima" class="form-check-input <?php echo($error_penerima !=""? "is-invalid" : ""); ?>" id="penerima" value="tidak">Tidak <br><span class="warning"><?php echo $error_penerima; ?></span>
					</div>
				</div>


				<div class="form-group row">
					<label for="nopenerima" class="col-sm-5 col-form-label">No.KPS/PKH (apabila menerima)</label>
					<div class="col-sm-10">
						<input type="text" name="nopenerima" class="form-control <?php echo ($error_nopenerima !="" ? "is-invalid" : ""); ?>" id="nopenerima" placeholder="nopenerima" value="<?php echo $nopenerima; ?>"><span class="warning"><?php echo $error_nopenerima; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" name="submit" class="btn btn-primary">Kirim</button>
					</div>
				</div>
			</form>

			</div>
		</div>
	</div>
</div>
</body>
</html>

<?php

include 'koneksi.php';

if (!empty($tgl) && !empty($nama) && !empty($jk) && !empty($nisn) && !empty($nik) && !empty($tmptlhr) && !empty($noregakta) && !empty($agama) && !empty($kwn) && !empty($kebkhus) && !empty($alamatjl) && !empty($rt) && !empty($rw) && !empty($dsn) && !empty($desa) && !empty($kec) && !empty($kdpos) && !empty($domisili) && !empty($transport) && !empty($anke) && !empty($penerima)){
	
		$sql=mysqli_query($conn, "INSERT INTO maba (tgl, nama, jk, nisn, nik, tmptlhr, tgllhr, noregakta, agama, kwn, negara, kebkhus, alamatjl, rt, rw, dsn, desa, kec, kdpos, lintang, bujur, domisili, transport, nokks, anke, penerima, nopenerima)VALUES('$tgl', '$nama', '$jk', '$nisn', '$nik', '$tmptlhr', '$tgllhr', '$noregakta', '$agama', '$kwn', '$negara', '$kebkhus', '$alamatjl', '$rt', '$rw', '$dsn', '$desa', '$kec', '$kdpos', '$lintang', '$bujur', '$domisili', '$transport', '$nokks', '$anke', '$penerima', '$nopenerima')");

	if (mysqli_query($conn,$sql)) {
		echo "<script>alert('Data anda berhasil di simpan');window.location='tugas10.php'</script>";
	} else {
		
		echo "<h4>Maaf Data Anda Gagal Disimpan</h4>";
		echo "<hr>";
		echo "<a href='tugas10.php'>Kembali";
		
	}

}

?>