<!DOCTYPE html>
<html>
<head>
	<title>Formulir</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
  <h5>PENDAFTARAN CALON KETUA HIMPUNAN DAN BADAN LEGISLATIF JURUSAN SISTEM INFORMASI</h5>
</div>

<!-- Tombol Navigasi -->

<div class="nav">
  <a href="form1.php">HOME</a>
  <a href="pendaftaran.php">PENDAFTARAN</a>
  <a href="galeri.php">GALERI</a>
  <a href="calon.php">CALON</a>
  <a href="tentang.php">TENTANG</a>  
  <a href="cd.php">COMING SOON</a> 
</div>
 
<!-- isi konten tengah -->

<div class="row">
  <div class="content">
    <div class="card">
      <h2 style="font-family: sitka small; font-size: 35px;">Formulir</h2>
      <p style="color: red;">Max file transfer 2MB</p>
      <hr>

    <div class="kotak">
      <div class="img">
      
          <fieldset>
            <legend style="font-size: 25px;">Formulir Pendaftaran Badan Legislatif Jurusan</legend>
            <p></p>
 
            <form method="post" enctype="multipart/form-data">
            <table>
              <tr>
                <td>Angkatan</td>
                <td>:</td>
                <td><input type="radio" name="angkatan" value="2018">2018<input type="radio" name="angkatan" value="2019">2019<input type="radio" name="angkatan" value="2020">2020</td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
              </tr>
              <tr>
                <td>NPM</td>
                <td>:</td>
                <td><input type="text" name="npm" required></td>
              </tr>
              <tr>
                <td>Tempat tanggal Lahir</td>
                <td>:</td>
                <td><input type="text" name="ttl" placeholder="Kota, DD-MM-YYYY" required></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" required></td>
              </tr>
              <tr>
                <td>No.WA</td>
                <td>:</td>
                <td><input type="text" name="wa" required></td>
              </tr>
              <tr>
                <td>Foto</td>
                <td>:</td>
                <td><input type="file"name="fupload"></input></td>
              </tr>
              <tr>
                <td>Syarat Pendukung</td>
                <td>:</td>
                <td><input type="file"name="fuploadd" ></input></td>
              </tr>
            </table>
            <hr>
                <center>
                  <h2>Visi</h2>
                      <textarea name="visi" required style="width: 60%; height: 100px; font-size: 16px;"></textarea>
            
                  <h2>Misi</h2>
                      <textarea name="misi" required style="width: 60%; height: 200px; font-size: 16px;"></textarea>
                </center>
            <br> <input type="submit" name="kirim" value="Kirim" style="background-color: #4169e1; font-size: 20px;">
            <input type="reset" name="reset" value="Reset" style="background-color: red; font-size: 20px;">
            </form>    
          </fieldset>
      </div>     
    </div> 
    </div>   
  </div>

<!-- informasi kontak -->

  <div class="sui">
    <div class="widget">
      <h3 style="font-family: sitka small;">Temukan  Kami Melalui</h3>
    </div>
    <div class="widget">
      <a href="https://www.youtube.com/channel/UComN7Zo6fWi9NSw6uXTzjhQ">Youtube</a>
    </div>
    <div class="widget">
      <a href="http://www.himasifo-upnjatim.com/">Website Himasifo</a>
    </div>
    <div class="widget">
      <a href="https://www.instagram.com/himasifo_upnvjatim/?hl=id">Instagram</a>
    </div>
    <div class="widget">
      <div class="img">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.167937374337!2d112.7883666!3d-7.335028799999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb792f87d495%3A0xaae1e1cbcc3e2778!2sFakultas%20Ilmu%20Komputer%202%20UPN%20Veteran%20Jatim!5e0!3m2!1sid!2sid!4v1584764961890!5m2!1sid!2sid" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
</div>
 
<!-- footer -->

<div class="footer">
      <p>By: Baitun Nadhiroh_18082010004</p>   
</div>
</body>
</html>


<?php
include 'kon.php';

if (isset($_POST['angkatan'])) {
  $angkatan = $_POST['angkatan'];
  $nama = $_POST['nama'];
  $npm = $_POST['npm'];
  $ttl = $_POST['ttl'];
  $alamat = $_POST['alamat'];
  $wa = $_POST['wa'];
  
  $visi = $_POST['visi'];
  $misi = $_POST['misi'];
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];
  
  $folder = "images/".$nama_file;
  move_uploaded_file($lokasi_file,$folder);
  $lokasi_file1 = $_FILES['fuploadd']['tmp_name'];
  $nama_file1   = $_FILES['fuploadd']['name'];
  
  $folder1 = "surat/".$nama_file1;
  move_uploaded_file($lokasi_file1,$folder1);

  
    $sql = "INSERT INTO blj (angkatan, nama, npm, ttl, alamat, wa, foto, syarat, visi, misi) VALUES ('$angkatan', '$nama', '$npm', '$ttl', '$alamat', '$wa', '$nama_file', '$nama_file1', '$visi', '$misi')";

    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Data berhasil ditambahkan. Tunggu Informasi Selanjutnya')</script>";
    }else{
      echo "<script>alert('Maaf Data Anda Belum Tersimpan')</script>";
    }
}
?>