<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	 
	<script type="text/javascript" src="jquery-3.4.1.min.js" ></script>
	<script type="text/javascript">
		$(document).ready(function(){
			setTimeout(function(){
			$(".preload").fadeOut("slow", function(){
				$(document).remove("slow");
			});
			}, 5000);
		});
	</script>
	<style type="text/css">
		.preload {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background-color: #0000CD;
			background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6));
		}
		.preload .loading {
			animation: putar 3s ease infinite;
			position: absolute;
			left: 40%;
			top: 30%;
		}
		@keyframes putar{
			from {
				transform: rotateY(0deg);
			} to{
				transform:  rotateY(360deg); 
			}
		}
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="preload">
		<div class="loading">
			<img src="hima.png" width="200">
		</div>
	</div>
<div class="header">
  <h5>PENDAFTARAN CALON KETUA HIMPUNAN DAN BADAN LEGISLATIF JURUSAN SISTEM INFORMASI</h5>
</div>
 
<div class="nav">
  <a href="form1.php">HOME</a>
  <a href="pendaftaran.php">PENDAFTARAN</a>
  <a href="galeri.php">GALERI</a>
  <a href="calon.php">CALON</a>
  <a href="tentang.php">TENTANG</a>  
  <a href="cd.php">COMING SOON</a> 
</div>
 
<div class="row">
  <div class="content">
    <div class="card">
      <h2 style="font-family: sitka small;">Pengumuman</h2>
      <hr>
      <h5 style="font-family: lucida fax;">Rabu, 18 Maret 2020</h5>
    <div class="kotak">
      <div class="img">
        <img src="timeline.JPG" style="height: 200px; border: 1px solid black;">
      </div>     
      <p style="font-family: times new roman;"> Jangan lupa timeline pemira tahun ini, catat baik-baik tanggalnya. Daftarkan dirimu demi terwujudnya Himasifo yang lebih maju. </p>
    </div> 
    </div>   
  </div>

  <div class="sui">
    <div class="widget">
      <h3 style="font-family: sitka small;">Hubungi Kami Melalui</h3>
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
 
<div class="footer">
      <p>By: Baitun Nadhiroh_18082010004</p>   
</div>

</body>
</html>