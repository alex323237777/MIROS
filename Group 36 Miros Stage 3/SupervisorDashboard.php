<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisor Dashboard</title>
    <link rel="stylesheet" href="miros.css">
</head>
<body>
  <div class="container">
      <img src="https://img02.mockplus.com/rp/image/2024-03-07/537e3a50-dbe1-11ee-9ed8-7f6f33dbdfc3.png" alt="Logo" class="logo">
      <div class="user-info">
        <header style="margin-right: 16vw;">
          <h1 style="color: rgb(27, 131, 129); font-weight: bold;">Supervisor Dashboard</h1>
        </header>
        <button class="language-button bm" style="font-weight:bold; font-size:20px;" onclick="window.location.href='SupervisorDashboardM.php'" >bm</button>
        <button class="language-button en" style="font-weight:bold; font-size:20px;" onclick="window.location.href='SupervisorDashboard.php'">en</button>
        <button style="background-color: blue; font-weight:bold; font-size:20px;" onclick="window.location.href='logout.php'">Log Out</button>
        <img src="https://www.svgrepo.com/show/497407/profile-circle.svg" alt="User Profile" width="55">
      </div>
      <br><br><br><br>
      <form id="myForm">
        <div class="form-group">
          <div class="charts">
              <tr>
                <th>
                  <div class="charts-card" style="height: 85vh;">
                    <h1 class="chart-title">Team Collaboration</h1>
                    <form id="myForm1">
                      <div class="form-group">
                      <div class="form-group">
                      <label for="sectionid" style="color: black;">Please Select Research Officer</label>
                        <select class="sectionclass" id="sectionid" onchange="updateItems()">
                          <option value="A">Research Officer 1</option>
                          <option value="B">Research Officer 2</option>
                          <option value="C">Research Officer 3</option>
                        </select>
                      </div>

                      <div class="form-group">
                      <label for="sectionid" style="color: black;">Set</label>
                        <select class="sectionclass" id="sectionid" onchange="updateItems()">
                          <option value="A">Task</option>
                          <option value="B">Notification</option>
                          <option value="C">Deadlines</option>
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
                    <br>
                    <h2>Contact</h2>
                    <a href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000002-0000-0ff1-ce00-000000000000&redirect_uri=https%3a%2f%2foutlook.office.com%2fowa%2f&resource=00000002-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code+id_token&scope=openid&msafed=1&msaredir=1&client-request-id=e38084c6-54f4-93bf-cb6e-31af0c4e3244&protectedtoken=true&claims=%7b%22id_token%22%3a%7b%22xms_cc%22%3a%7b%22values%22%3a%5b%22CP1%22%5d%7d%7d%7d&nonce=638487103811690149.3b321c46-9295-4050-892f-092733175761&state=Dcu9DoIwFEDhou_iVrm3_3cgDhrDgAuaaNgoYCKRYEqD8e3t8J3tZIyxbbJJMkhh1kinnEWQDtEQoKK99FJgpwwnQZor0MAdiScHElZKtNoazNJ7yudvmx-W2MahwF0Y-lcYunibi7asoSsvpvrR2j_qxQsK1URTM73H5qpHL2D19_PHH90f&sso_reload=true"> <!-- Example path, replace with the actual path to Outlook -->
                    <img src="https://cdn2.iconfinder.com/data/icons/New-Social-Media-Icon-Set-V11/512/email.png" style="height: 10vh;" alt="Image Description">
                    </a>
                    </div>

                  
                <table style="margin-left: 15vw; margin-top: -50vh;"> 
                <tr>
                <th>
                  <div class="charts-card">
                    <h1 class="chart-title">Performance Records</h1>
                    <form id="myForm2">
                      <div class="form-group">
                        <label for="sectionid" style="color: black;">Please Select Record Type</label>
                        <select class="sectionclass" id="sectionid" onchange="updateItems()">
                          <option value="A">Performance Review</option>
                          <option value="B">Set Performance objectives</option>
                          <option value="C">Generate Performance reports</option>
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
                    <p class="chart-title">Tasks</p>
                    <dl>
                      <dd style="text-align: left;">- Hit Research Deadline</dd>
                      <dd style="text-align: left;">- Update Password</dd>
                      <dd style="text-align: left;">- Invite Team to weekly meeting</dd>
                    </dl>
                  </div>
                </th>

                <th>
                  <div class="charts-card" style="margin-left: 30px;">
                    <p class="chart-title">Work Targets & KPI's</p>
                    <dl>
                      <button type="submit" id="submit-btn" onclick="window.location.href='WorkTKPI.php'">Set Work Target & KPI</button>
                    </dl>
                  </div>
                </th>
              </tr>
              
              <tr>
                <th colspan="2">
                  <div class="charts-card">
                    <p class="chart-title">Performance Analysis and Insights</p>
                    <div id="donut-chart"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                      google.charts.load('current', {'packages':['corechart']});
                      google.charts.setOnLoadCallback(drawVisualization);

                      function drawVisualization() {
                        // Some raw data (not necessarily accurate)
                        var data = google.visualization.arrayToDataTable([
                          ['Activity', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
                          ['RO1',  165,      938,         522,             998,           450,      614.6],
                          ['RO2',  135,      1120,        599,             1268,          288,      682],
                          ['RO3',  157,      1167,        587,             807,           397,      623],
                          ['RO4',  139,      1110,        615,             968,           215,      609.4],
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
                </th>
                
                <th colspan="3">
                  <div class="charts-card" style="margin-left: -20.2vw;">
                    <p class="chart-title">Deadlines</p>
                    <dl>
                      <dd style="text-align: left;">- All Deadlines</dd>
                      <dd style="text-align: left;">- Must be Hit</dd>
                      <dd style="text-align: left;">- Monthly</dd>
                    </dl>
                    <div id="reminders-warnings-chart"></div>
                  </div>
                </th>
                <th>
                  <div class="charts-card" style="margin-left: -20.2vw;">
                    <p class="chart-title">Notifications</p>
                    <dl>
                      <dd style="text-align: left;">- Admin has updated your profile</dd>
                      <dd style="text-align: left;">- Work Upload Denied</dd>
                      <dd style="text-align: left;">- Work Approved</dd>
                    </dl>
                  </div>
                </th>
              </tr>
              </table>

          </div>
        </div>
      </form>
  </div>
</body>
</html>
