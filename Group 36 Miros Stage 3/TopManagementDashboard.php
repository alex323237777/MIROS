<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Management Dashboard</title>
    <link rel="stylesheet" href="miros.css">
</head>
<body>
  <div class="container">
      <img src="https://img02.mockplus.com/rp/image/2024-03-07/537e3a50-dbe1-11ee-9ed8-7f6f33dbdfc3.png" alt="Logo" class="logo">
      <div class="user-info">
        <header style="margin-right: 16vw;">
          <h1 style="color: rgb(27, 131, 129); font-weight: bold;">Top Management Dashboard</h1>
        </header>
        <button class="language-button bm" style="font-weight:bold; font-size:20px;" onclick="window.location.href='TopManagementDashboardM.php'" >bm</button>
        <button class="language-button en" style="font-weight:bold; font-size:20px;" onclick="window.location.href='TopManagementDashboard.php'">en</button>
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
                      <label for="sectionid" style="color: black;">Please Select Employee</label>
                        <select class="sectionclass" id="sectionid" onchange="updateItems()">
                          <option value="A">Adhil Smith</option>
                          <option value="B">Joe Bloggs</option>
                          <option value="C">Michael Hackson</option>
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
                    <h1 class="chart-title">Scoring</h1>
                    <form id="myForm2">
                      <div class="form-group">
                        <label for="sectionid" style="color: black;">Please Select Work Output</label>
                        <select class="sectionclass" id="sectionid" onchange="updateItems()">
                          <option value="A">WO1</option>
                          <option value="B">WO2</option>
                          <option value="C">WO3</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="DQ" style="color: black;">Please enter score</label>
                        <input type="number" class="DQclass" id="DQid" placeholder="42 to 55" min="42" max="55" required>
                      </div>

                      <div class="form-group" style="margin-bottom: -0.5vh;">
                        <label for="DQ" style="color: black;">Details</label>
                        <input type="text" class="DQclass" id="DQid" placeholder="Details" required>
                      </div>
                      <br>
                      
                      <button type="submit" id="submit-btn">Submit</button>
                    </form>
                  </div>
                </th>
                
                <th>
                  <div class="charts-card" style="margin-left: 30px;">
                  <p class="chart-title">Notifications</p>
                    <dl>
                      <dd style="text-align: left;">- Maya has missed the deadline</dd>
                      <dd style="text-align: left;">- Joe has left the Company</dd>
                      <dd style="text-align: left;">- Adhil has submitted  expenses</dd>
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
                    <p class="chart-title">Overall Performance Trends</p>
                    <div id="area-chart"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                      google.charts.load('current', {
                        'packages': ['corechart']
                      });
                      google.charts.setOnLoadCallback(drawChart);

                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                          ['Year', 'Profit', 'Loss'],
                          ['2021', 800, 400],
                          ['2022', 1000, 460],
                          ['2023', 600, 900],
                          ['2024', 1200, 500]
                        ]);

                        var options = {
                          title: 'Performance',
                          hAxis: {
                            title: 'Year',
                            titleTextStyle: {
                              color: '#333'
                            }
                          },
                          vAxis: {
                            minValue: 0
                          }
                        };

                        var chart = new google.visualization.AreaChart(document.getElementById('chartt_div'));
                        chart.draw(data, options);
                      }
                    </script>
                    <div id="chartt_div" style="width: auto; height: 25vh;"></div>
                  </div>
                </th>
                
                <th colspan="3">
                  <div class="charts-card" style="margin-left: -20.2vw;">
                    <p class="chart-title">Research officers Performance</p>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['R1',     11],
          ['R2',      2],
          ['R3',  5],
          ['R4', 2],
          ['R5',    4],
          ['R6',    23],
          ['R7',    44],
          ['R8',    12],
          ['R9',    33],
          ['R10',    67],
          ['R11',    5],
          ['R12',    3],
          ['R13',    34],
          ['R14',    20],
          ['R15',    1],
        ]);

        var options = {
          title: 'Research Officer Performance'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: auto; height: 25vh;"></div>
  </body>
                    <div id="reminders-warnings-chart"></div>
                  </div>
                </th>
                
                <th>
                  <div class="charts-card" style="margin-left: -20.2vw;">
                    <p class="chart-title">Supervisors Performance</p>
                    <div id="donut-chart"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['S1',     11],
          ['S2',      2],
          ['S3',  2],
          ['S4', 2],
          ['S5',    7],
          ['S6',     11],
          ['S7',      2],
          ['S8',  2],
          ['S9', 2],
          ['S10',    7],
          ['S11',     11],
          ['S12',      2],
          ['S13',  2],
          ['S14', 2],
          ['S15',    7],
          ['S16',     11],
          ['S17',      2],
          ['S18',  2],
          ['S19', 2],
          ['20',    7],
        ]);

        var options = {
          title: 'Supervisor Performance',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: auto; height: 25vh;"></div>
  </body>
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
