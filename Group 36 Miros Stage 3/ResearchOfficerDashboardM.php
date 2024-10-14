<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papan Pemuka Pegawai Penyelidik</title>
    <link rel="stylesheet" href="miros.css">
</head>
<body>
  <div class="container">
      <img src="https://img02.mockplus.com/rp/image/2024-03-07/537e3a50-dbe1-11ee-9ed8-7f6f33dbdfc3.png" alt="Logo" class="logo">
      <div class="user-info">
      <header style="margin-right: 21vw;">
          <h1 style="color: rgb(27, 131, 129); font-weight: bold;">Papan Pemuka Pegawai Penyelidik</h1>
          </header>
        <button class="language-button bm" style="font-weight:bold; font-size:20px;" onclick="window.location.href='ResearchOfficerDashboardM.php'" >bm</button>
         <button class="language-button en" style="font-weight:bold; font-size:20px;" onclick="window.location.href='ResearchOfficerDashboard.php'">en</button>
          <button style="background-color: blue; font-weight:bold; font-size:20px;" onclick="window.location.href='logout.php'">log keluar</button>
          <img src="https://www.svgrepo.com/show/497407/profile-circle.svg" alt="User Profile" width="55">
      </div>
      <br>
      <br>
      <br>
      <br>
      <form id="myForm">
        <div class="form-group">
        
<div class="charts">
      <div class="charts" style="margin-left: 12vw;">
<table>
  <tr>
    <th>
      <div class="charts-card">
        <h1 class="chart-title">Rekod Aktiviti</h1>
        <form id="myForm">
        <div class="form-group">
            <label for="sectionid" style="color: black;">Sila Pilih Jenis Aktiviti</label>
            <select class="sectionclass" id="sectionid" onchange="updateItems()">
              <option value="A">Penerbitan Penyelidikan</option>
              <option value="B">Projek Perundingan</option>
              <option value="C">Penglibatan Operasi</option>
            </select>
</div>

      <div class="form-group">
          <label for="DQ" style="color: black;">Butiran</label>
          <input type="text" class="DQclass" id="DQid" placeholder="Butiran" required>
      </div>

      <div style="text-align: left;">
        <label for="file" style="color: black;">Sila Pilih Fail</label>
        <input type="file" class="addfile" id="addfileid" placeholder="Sila Pilih Fail" style="color: black;" required>
      </div>
      <br>
      
      <button type="submit" id="submit-btn">Hantar</button>
    </form>
  </div>
    </th>
    
    <th>
      <div class="charts-card" style="margin-left: 30px;">
        <p class="chart-title">Latihan</p>
        <dl>
        <button type="submit" id="submit-btn" onclick="window.location.href='WorkOutputPageM.php'">Tetapkan Latihan</button>
        </dl>
        <br>
        <p class="chart-title">Sasaran Kerja & KPI</p>
        <dl>
        <button type="submit" id="submit-btn" onclick="window.location.href='WorkTKPI.php'">Tetapkan Sasaran Kerja & KPI</button>
        </dl>
      </div>
    </th>
    
    <th>
      <div class="charts-card" style="margin-left: 30px;">
        <p class="chart-title">Pemberitahuan</p>
        <dl>
          <dd style="text-align: left;">- Pemberitahuan 1</dd>
          <dd style="text-align: left;">- Pemberitahuan 2</dd>
          <dd style="text-align: left;">- Pemberitahuan 3</dd>
          </dl>
      </div>
    </th>
  </tr>

  <tr>
  <th>
      <div class="charts-card">
        <p class="chart-title">Tugasan</p>
        <dl>
          <dd style="text-align: left;">- Tugasan 1</dd>
          <dd style="text-align: left;">- Tugasan 2</dd>
          <dd style="text-align: left;">- Tugasan 3</dd>
          </dl>
  </div>
    </th>

    <th>
      <div class="charts-card" style="margin-left: 30px;">
        <p class="chart-title">Kemajuan</p>
        <div id="donut-chart"></div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Activity', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
          ['Latihan & KPI',  165,      938,         522,             998,           450,      614.6],
          ['Penerbitan Penyelidikan',  135,      1120,        599,             1268,          288,      682],
          ['Projek Perundingan',  157,      1167,        587,             807,           397,      623],
          ['Penglibatan Operasi',  139,      1110,        615,             968,           215,      609.4],
        ]);

        var options = {
          title : 'Kemajuan',
          vAxis: {title: 'Selesai'},
          hAxis: {title: 'Aktiviti'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
        <div id="chart_div" style="width: auto; height: 30vh;"></div>
      </div>
      </div>
    </th>
    
    <th>
      <div class="charts-card" style="margin-left: 30px;">
        <p class="chart-title">Deadlines</p>
        <dl>
          <dd style="text-align: left;">- Tarikh akhir 1</dd>
          <dd style="text-align: left;">- Tarikh akhir 2</dd>
          <dd style="text-align: left;">- Tarikh akhir 3</dd>
          </dl>
        <div id="reminders-warnings-chart"></div>
      </div>
    </th>
</tr>
</table>
</div>
