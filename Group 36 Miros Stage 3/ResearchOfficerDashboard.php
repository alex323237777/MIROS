<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Officer Dashboard</title>
    <link rel="stylesheet" href="miros.css">
</head>
<body>
  <div class="container">
      <img src="https://img02.mockplus.com/rp/image/2024-03-07/537e3a50-dbe1-11ee-9ed8-7f6f33dbdfc3.png" alt="Logo" class="logo">
      <div class="user-info">
      <header style="margin-right: 16vw;">
          <h1 style="color: rgb(27, 131, 129); font-weight: bold;">Research Officer Dashboard</h1>
          </header>
        <button class="language-button bm" style="font-weight:bold; font-size:20px;" onclick="window.location.href='ResearchOfficerDashboardM.php'" >bm</button>
         <button class="language-button en" style="font-weight:bold; font-size:20px;" onclick="window.location.href='ResearchOfficerDashboard.php'">en</button>
          <button style="background-color: blue; font-weight:bold; font-size:20px;" onclick="window.location.href='logout.php'">Log Out</button>
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
        <h1 class="chart-title">Record Activity</h1>
        <form id="myForm">
        <div class="form-group">
            <label for="sectionid" style="color: black;">Please Select Activity Type</label>
            <select class="sectionclass" id="sectionid" onchange="updateItems()">
              <option value="A">Research Publication</option>
              <option value="B">Consultation Project </option>
              <option value="C">Operational Involvement</option>
            </select>
</div>

      <div class="form-group">
          <label for="DQ" style="color: black;">Details</label>
          <input type="text" class="DQclass" id="DQid" placeholder="Details" required>
      </div>

      <div style="text-align: left;">
        <label for="file" style="color: black;">Please Choose File</label>
        <input type="file" class="addfile" id="addfileid" placeholder="Please Choose File" style="color: black;" required>
      </div>
      <br>
      
      <button type="submit" id="submit-btn">Submit</button>
    </form>
  </div>
    </th>
    
    <th>
      <div class="charts-card" style="margin-left: 30px;">
        <p class="chart-title">Workoutput</p>
        <dl>
        <button type="submit" id="submit-btn" onclick="window.location.href='WorkOutputPage.php'">Set Workoutput</button>
        </dl>
        <br>
        <p class="chart-title">Work Targets & KPI's</p>
        <dl>
        <button type="submit" id="submit-btn" onclick="window.location.href='WorkTKPI.php'">Set Work Target & KPI</button>
        </dl>
      </div>
    </th>
    
    <th>
      <div class="charts-card" style="margin-left: 30px;">
        <p class="chart-title">Notifications</p>
        <dl>
          <dd style="text-align: left;">- Work 10287 Approved</dd>
          <dd style="text-align: left;">- Work 02941 Approved</dd>
          <dd style="text-align: left;">- Work 04877 Submitted</dd>
          </dl>
      </div>
    </th>
  </tr>

  <tr>
  <th>
      <div class="charts-card">
        <p class="chart-title">Tasks</p>
        <dl>
          <dd style="text-align: left;">- Upload Proof of Research</dd>
          <dd style="text-align: left;">- Resubmit Rejected Assignment</dd>
          <dd style="text-align: left;">- Upload Yearly Expenses Form</dd>
          </dl>
  </div>
    </th>

    <th>
      <div class="charts-card" style="margin-left: 30px;">
        <p class="chart-title">Progress</p>
        <div id="donut-chart"></div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Activity', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
          ['Workoutput & KPI',  165,      938,         522,             998,           450,      614.6],
          ['Reserach Publication',  135,      1120,        599,             1268,          288,      682],
          ['Consultation Project',  157,      1167,        587,             807,           397,      623],
          ['Operational Involvement',  139,      1110,        615,             968,           215,      609.4],
        ]);

        var options = {
          title : 'Progress',
          vAxis: {title: 'Completed'},
          hAxis: {title: 'Activties'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
        <div id="chart_div" style="width: auto; height: 25vh;"></div>
      </div>
      </div>
    </th>
    
    <th>
      <div class="charts-card" style="margin-left: 30px;">
        <p class="chart-title">Deadlines</p>
        <dl>
          <dd style="text-align: left;">- All Deadlines</dd>
          <dd style="text-align: left;">- Must be Hit</dd>
          <dd style="text-align: left;">- Monthly</dd>
          </dl>
        <div id="reminders-warnings-chart"></div>
      </div>
    </th>
</tr>
</table>
</div>
