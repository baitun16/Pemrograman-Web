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
		<h2>Bar Chart Data Sebaran COVID-19 Di 10 Negara</h2>
		<br>
		<canvas id="myChart"></canvas>
	</div>
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_Negara); ?>,
				datasets: [{
					label: 'Total Cases',
					data: <?php echo json_encode($jumlah_kasus); ?>,
					backgroundColor: 'rgba(118, 4, 4, 2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1

				},{
					label: 'New Cases',
					data: <?php echo json_encode($kasus_baru); ?>,
					backgroundColor: 'rgba(122,72,141, 2)',
					borderColor: 'rgba(0,0,102,1)',
					borderWidth: 1 
				},{
					label: 'Total Deaths',
					data: <?php echo json_encode($total_meninggal); ?>,
					backgroundColor: 'rgba(255,30,30, 2)',
					borderColor: 'rgba(128,128,128,1)',
					borderWidth: 1 
				},{
					label: 'New Deaths',
					data: <?php echo json_encode($baru_meninggal); ?>,
					backgroundColor: 'rgba(198,11,98, 2)',
					borderColor: 'rgba(0,102,204,1)',
					borderWidth: 1 
				},{
					label: 'Total Recovered',
					data: <?php echo json_encode($total_sembuh); ?>,
					backgroundColor: 'rgba(25,181,14, 2)',
					borderColor: 'rgba(153,153,0,1)',
					borderWidth: 1 
				},{
					label: 'Active Cases',
					data: <?php echo json_encode($kasus_aktiv); ?>,
					backgroundColor: 'rgba(59,77,193, 2)',
					borderColor: 'rgba(0,204,204,1)',
					borderWidth: 1 
				}], 
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>