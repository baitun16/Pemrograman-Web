<?php
if (empty($_POST['nama'] && $_POST['namaP'] && $_POST['agama'] && $_POST['npm'] && $_POST['ttl'] && $_POST['jk'] && $_POST['alamat'] && $_POST['email'] && $_POST['hp'] && $_POST['namaIbu'] && $_POST['namaAyah'] && $_POST['deskripsi'] && $_POST['foto'])) {
	header("Location:infor.php");
}else {
echo "<table border=1>";
echo "<center><h2>BIODATAKU</h2></center><br>";
echo "<th width=100>Nama</th> 
	<th>Nama Panggilan</th> 
	<th>Agama</th> 
	<th>NPM</th> 
	<th>TTL</th> 
	<th>Jenis Kelamin</th> 
	<th>Alamat</th> 
	<th>Email</th> 
	<th>Telepon</th> 
	<th>Nama Ibu</th> 
	<th>Nama Ayah</th> 
	<th>Deskripsi</th> 
	<th>Photo</th>";
echo "<tr>
	<td>".$_POST['nama']."</td>
	<td>".$_POST['namaP']."</td>
	<td>".$_POST['agama']."</td>
	<td>".$_POST['npm']."</td>
	<td>".$_POST['ttl']."</td>
	<td>".$_POST['jk']."</td>
	<td>".$_POST['alamat']."</td>
	<td>".$_POST['email']."</td>
	<td>".$_POST['hp']."</td>
	<td>".$_POST['namaIbu']."</td>
	<td>".$_POST['namaAyah']."</td>
	<td>".$_POST['deskripsi']."</td>
	<td>".$_POST['foto']."</td></tr>";
echo "</table>";
}
?>