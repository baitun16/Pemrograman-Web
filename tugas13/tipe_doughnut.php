<?php
include('koneksi.php');
$Negara = mysqli_query($koneksi,"select * from datacovid");
while($row = mysqli_fetch_array($Negara)){
	$nama_Negara[] = $row['id negara'];
	$jumlah_kasus[] = $row['Total Cases'];
	$kasus_baru[] = $row['New Cases'];
	$total_meninggal[] = $row['Total Deaths'];
	$baru_meninggal[] = $row['New Deaths'];
	$total_sembuh[] = $row['Total Recovered'];
	$kasus_aktiv[] = $row['Active Cases'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<div style="width: 800px;height: 1000px">
		<h2>Jumlah Kasus COVID-19 di 10 Negara </h2>
		<br>
		<canvas id="myChart"></canvas>
	</div>
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				datasets: [{
					data:<?php echo json_encode($jumlah_kasus); ?>,
					backgroundColor: [
					'rgba(0, 255, 0, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(176, 196, 222, 0.2)',
					'rgba(188, 143, 143, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(255, 0, 0, 0.2)',
					'rgba(47, 79, 79, 0.2)',
					'rgba(255,215, 0, 0.2)'
					
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(199, 21, 133, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 0, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(85, 107, 47, 1)'
					],
					label: 'Presentase Kasus COVID-19'
				}],
				labels: <?php echo json_encode($nama_Negara); ?>},
			
			options: {

				scales: {
					
				}
			}
		});
	</script>

	<div style="width: 800px;height: 1000px">
		<h2>Kasus Baru COVID-19 di 10 Negara</h2>
		<br>
		<canvas id="Chart"></canvas>
	</div>
 
 
	<script>
		var ctx = document.getElementById("Chart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				datasets: [{
					data:<?php echo json_encode($kasus_baru); ?>,
					backgroundColor: [
					'rgba(0, 255, 0, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(176, 196, 222, 0.2)',
					'rgba(188, 143, 143, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(255, 0, 0, 0.2)',
					'rgba(47, 79, 79, 0.2)',
					'rgba(255,215, 0, 0.2)'
					
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(199, 21, 133, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 0, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(85, 107, 47, 1)'
					],
					label: 'Presentase Kasus COVID-19'
				}],
				labels: <?php echo json_encode($nama_Negara); ?>},
			
			options: {

				scales: {
					
				}
			}
		});
	</script>

	<div style="width: 800px;height: 1000px">
		<h2>Total Pasien Meninggal COVID-19 di 10 Negara</h2>
		<br>
		<canvas id="Chartku"></canvas>
	</div>
 
	<script>
		var ctx = document.getElementById("Chartku").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				datasets: [{
					data:<?php echo json_encode($total_meninggal); ?>,
					backgroundColor: [
					'rgba(0, 255, 0, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(176, 196, 222, 0.2)',
					'rgba(188, 143, 143, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(255, 0, 0, 0.2)',
					'rgba(47, 79, 79, 0.2)',
					'rgba(255,215, 0, 0.2)'
					
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(199, 21, 133, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 0, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(85, 107, 47, 1)'
					],
					label: 'Presentase Kasus COVID-19'
				}],
				labels: <?php echo json_encode($nama_Negara); ?>},
			
			options: {

				scales: {
					
				}
			}
		});
	</script>

	<div style="width: 800px;height: 1000px">
		<h2>Kasus Baru Pasien Meninggal COVID-19 di 10 Negara</h2>
		<br>
		<canvas id="Chartkuu"></canvas>
	</div>
 
	<script>
		var ctx = document.getElementById("Chartkuu").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				datasets: [{
					data:<?php echo json_encode($baru_meninggal); ?>,
					backgroundColor: [
					'rgba(0, 255, 0, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(176, 196, 222, 0.2)',
					'rgba(188, 143, 143, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(255, 0, 0, 0.2)',
					'rgba(47, 79, 79, 0.2)',
					'rgba(255,215, 0, 0.2)'
					
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(199, 21, 133, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 0, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(85, 107, 47, 1)'
					],
					label: 'Presentase Kasus COVID-19'
				}],
				labels: <?php echo json_encode($nama_Negara); ?>},
			
			options: {

				scales: {
					
				}
			}
		});
	</script>

	<div style="width: 800px;height: 1000px">
		<h2>Total Pasien Sembuh COVID-19 di 10 Negara</h2>
		<br>
		<canvas id="Chartq"></canvas>
	</div>
 
	<script>
		var ctx = document.getElementById("Chartq").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				datasets: [{
					data:<?php echo json_encode($total_sembuh); ?>,
					backgroundColor: [
					'rgba(0, 255, 0, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(176, 196, 222, 0.2)',
					'rgba(188, 143, 143, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(255, 0, 0, 0.2)',
					'rgba(47, 79, 79, 0.2)',
					'rgba(255,215, 0, 0.2)'
					
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(199, 21, 133, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 0, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(85, 107, 47, 1)'
					],
					label: 'Presentase Kasus COVID-19'
				}],
				labels: <?php echo json_encode($nama_Negara); ?>},
			
			options: {

				scales: {
					
				}
			}
		});
	</script>

	<div style="width: 800px;height: 1000px">
		<h2>Kasus Yang Masih Aktif COVID-19 di 10 Negara</h2>
		<br>
		<canvas id="Chartqu"></canvas>
	</div>
 
	<script>
		var ctx = document.getElementById("Chartqu").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				datasets: [{
					data:<?php echo json_encode($kasus_aktiv); ?>,
					backgroundColor: [
					'rgba(0, 255, 0, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(176, 196, 222, 0.2)',
					'rgba(188, 143, 143, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(255, 0, 0, 0.2)',
					'rgba(47, 79, 79, 0.2)',
					'rgba(255,215, 0, 0.2)'
					
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(199, 21, 133, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 0, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(85, 107, 47, 1)'
					],
					label: 'Presentase Kasus COVID-19'
				}],
				labels: <?php echo json_encode($nama_Negara); ?>},
			
			options: {

				scales: {
					
				}
			}
		});
	</script>
</body>
</html>