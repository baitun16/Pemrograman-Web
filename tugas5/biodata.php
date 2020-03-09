<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<form action="output.php" method="POST">
		<center>
			<h3>ISI BIODATA ANDA</h3>
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nama Panggilan</td>
				<td>:</td>
				<td><input type="text" name="namaP"></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td><select name="agama">
					<option disabled="">-PILIH-</option>
					<option value="Islam">Islam</option>
					<option value="kristen">Kristen</option>
					<option value="hindu">Hindu</option>
					<option value="budha">Budha</option>
				</select></td>
			</tr>
			<tr>
				<td>NPM</td>
				<td>:</td>
				<td><input type="text" name="npm"></td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td><input type="text" name="ttl" placeholder="Gresik, 08-01-00"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk" value="Laki-laki">Laki-laki<br><input type="radio" name="jk" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td><input type="text" name="hp" maxlength="12"></td>
			</tr>
			<tr>
				<td>Nama Ibu</td>
				<td>:</td>
				<td><input type="text" name="namaIbu"></td>
			</tr>
			<tr>
				<td>Nama Ayah</td>
				<td>:</td>
				<td><input type="text" name="namaAyah"></td>
			</tr>
			<tr>
				<td>Deskripsi Diri</td>
				<td>:</td>
				<td><textarea name="deskripsi" cols="30" rows="4" placeholder="Tuliskan deskripsi diri secara singkat"></textarea></td>
			</tr>
			<tr>
				<td>Photo</td>
				<td>:</td>
				<td><input type="file" name="foto"></td>
			</tr>
			<tr>
				<td><br><input style="background-color: blue" type="submit" name="kirim" value="Kirim">
				<input style="background-color: red" type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
		</center>
	</form>
</body>
</html>