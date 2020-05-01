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
      <title>Membuat Grafik Di PHP dan MySQL menggunakan Chartjs</title>
      <style>
        .container {
          width: 100%;
          margin: 15px 10px;
        }

        .chart {
          width: 50%;
          float: left;
          text-align: center;
        }
      </style>
      <script type="text/javascript" src="Chart.js"></script>
    </head>
    <body>
      <div class="container">
        <div class="chart">
          <h2>Line Chart Data Sebaran COVID-19 Di 10 Negara</h2>
          <br>
          <canvas id="line-chart"></canvas>
        </div>
      </div>

      <script>
        var linechart = document.getElementById('line-chart');
        var chart = new Chart(linechart, {
          type: 'line',
          data: {
            labels: <?php echo json_encode($nama_Negara) ?>, // Merubah data tanggal menjadi format JSON
            datasets: [{
              label: 'Total Cases',
              data: <?php echo json_encode($jumlah_kasus) ?>,
              borderColor: 'rgba(118, 4, 4, 2)',
              backgroundColor: 'transparent',
              borderWidth: 2
            },{
              label: 'New Cases',
              data: <?php echo json_encode($kasus_baru) ?>,
              borderColor: 'rgba(122,72,141, 2)',
              backgroundColor: 'transparent',
              borderWidth: 2
            },{
              label: 'Total Deaths',
              data: <?php echo json_encode($total_meninggal) ?>,
              borderColor: 'rgba(255,30,30, 2)',
              backgroundColor: 'transparent',
              borderWidth: 2
            },{
              label: 'New Deaths',
              data: <?php echo json_encode($baru_meninggal) ?>,
              borderColor: 'rgba(198,11,98, 2)',
              backgroundColor: 'transparent',
              borderWidth: 2
            },{
              label: 'Total Recovered',
              data: <?php echo json_encode($total_sembuh) ?>,
              borderColor: 'rgba(25,181,14, 2)',
              backgroundColor: 'transparent',
              borderWidth: 2
            },{
              label: 'Active Cases',
              data: <?php echo json_encode($kasus_aktiv) ?>,
              borderColor: 'rgba(59,77,193, 2)',
              backgroundColor: 'transparent',
              borderWidth: 2
            }]
          }
        });
      </script>
    </body>
    </html>