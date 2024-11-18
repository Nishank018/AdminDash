<?php include("includes/header.php"); ?>
<?php include("dbconfig/dbconfig.php"); ?>



<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>

  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<div class="sidebar" data-color="white" data-active-color="danger">
  <div class="logo">
    <a href="#" class="simple-text logo-mini">
      <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
      <!-- <p>CT</p> -->
    </a>

    <div style="text-align: center; margin:5px; background-color: #33d7ff; padding: 1px; border-radius: 8px;">
      <a href="#">
        <img src="logo.png" alt="Logo" style="width: 250px; height: auto; display: block;">
      </a>
    </div>
    <!-- <div  >
                <img src="logo.png">
            </div> -->
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="active ">
        <a href="dashboard.php">
          <i class="nc-icon nc-bank"></i>
          <p>Dashbord</p>
        </a>
      </li>
      <li>
        <a href="system_info.php">
          <i class="nc-icon nc-laptop"></i>
          <p>System Info</p>
        </a>
      </li>
      <li>
        <a href="system_status.php">
          <i class="nc-icon nc-chart-bar-32"></i>
          <p>System Status</p>
        </a>
      </li>

      <li>
        <a href="install_prog.php">
          <i class="nc-icon nc-box"></i>
          <p>Installed Programs</p>
        </a>
      </li>
      <li>
        <a href="logs.php">
          <i class="nc-icon nc-paper"></i>
          <p>Logs</p>
        </a>
      </li>
      <li>
        <a href="open_ports.php">
          <i class="nc-icon nc-tile-56"></i>
          <p>Open Ports</p>
        </a>
      </li>
      <li>
        <a href="running_pro.php">
          <i class="nc-icon nc-user-run"></i>
          <p>Running Processes</p>
        </a>
      </li>
      <li>
        <a href="startup_prog.php">
          <i class="nc-icon nc-spaceship"></i>
          <p>Startup Programs</p>
        </a>
      </li>
      <li>
        <a href="user_account.php">
          <i class="nc-icon nc-single-02"></i>
          <p>User Accounts</p>
        </a>
      </li>
      <li>
        <a href="est_con.php">
          <i class="nc-icon nc-globe"></i>
          <p>Established Conn.</p>
        </a>
      </li>

    </ul>
  </div>
</div>


<div class="content">
<!-- <div class="card-header">
                <h4 class="card-title"> <strong>Dashboard</strong></h4>
                <p class="card-category"> A comprehensive overview of system health, active systems, and critical metrics.</p>
            </div> -->
  <div class="row">
    
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-laptop"></i> <!-- Icon for System Info -->
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="">
                <strong>
                  <p class="card-category">Total Systems</p>
                </strong>
                <p class="card-title">
                  <?php
                  // Query to count rows in 'system_info' table
                  $query = "SELECT COUNT(*) AS total_systems FROM system_info";
                  $result = mysqli_query($connection, $query);

                  // Check if query is successful
                  if ($result) {
                    $data = mysqli_fetch_assoc($result);
                    echo $data['total_systems']; // Display the total number of systems
                  } else {
                    echo "Error: " . mysqli_error($connection);
                  }
                  ?>
                </p>
              </div>
            </div>
          </div>


        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-refresh"></i>
            Update Now
          </div>
        </div>
      </div>
    </div>



    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-check-2"></i> 
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="">
                <strong>
                  <p class="card-category">Active System</p>
                </strong>
                <p class="card-title">
                  <?php
                  
                  $query = "SELECT COUNT(*) AS total_systems FROM system_info";
                  $result = mysqli_query($connection, $query);

                  
                  if ($result) {
                    $data = mysqli_fetch_assoc($result);
                    echo $data['total_systems']; // Display the total number of systems
                  } else {
                    echo "Error: " . mysqli_error($connection);
                  }
                  ?>
                </p>
              </div>
            </div>
          </div>


        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-refresh"></i>
            Update Now
          </div>
        </div>
      </div>
    </div>




    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-sound-wave"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="">
                <strong>
                  <p class="card-category">System Health</p>
                </strong>
                <p class="card-title">
                 40%
                </p>
              </div>
            </div>
          </div>


        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-refresh"></i>
            Update Now
          </div>
        </div>
      </div>
    </div>




    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-single-copy-04"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="">
                <strong>
                  <p class="card-category">Logs</p>
                </strong>
                <p class="card-title">
                  
                </p>
              </div>
            </div>
          </div>


        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-refresh"></i>
            Update Now
          </div>
        </div>
      </div>
    </div>


    



  </div>
  <!-- <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Users Behavior</h5>
                <p class="card-category">24 Hours performance</p>
              </div>
              <div class="card-body ">
                <canvas id=chartHours width="400" height="100"></canvas>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">System Performance</h5> <!-- Changed title -->
                    <p class="card-category">24 Hours Performance</p>
                </div>
                <div class="card-body">
                    <canvas id="chartHours" width="400" height="100"></canvas>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-history"></i> Updated 3 minutes ago
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to create the chart -->
    <script>
        var ctx = document.getElementById('chartHours').getContext('2d');
        var chartHours = new Chart(ctx, {
            type: 'line', // Line chart
            data: {
                labels: ['12 AM', '3 AM', '6 AM', '9 AM', '12 PM', '3 PM', '6 PM', '9 PM', '12 AM'], // Time intervals (x-axis)
                datasets: [{
                    label: 'System Activity', // Updated label
                    data: [5, 10, 8, 15, 12, 18, 25, 20, 18], // Example data points (y-axis)
                    fill: false, // Line chart, no fill
                    borderColor: 'rgba(75, 192, 192, 1)', // Line color
                    tension: 0.1 // Smooth line
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true, // Start y-axis at zero
                    }
                }
            }
        });
    </script>
</body>
</html>

<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">System Performance</h5> <!-- Updated title -->
            <p class="card-category">CPU & Network Usage</p> <!-- Category -->
        </div>
        <div class="card-body">
            <canvas id="chartSystemPerformance"></canvas> <!-- Canvas for the new bar chart -->
        </div>
        <div class="card-footer">
            <div class="legend">
                <i class="fa fa-circle text-primary"></i> CPU Usage
                <i class="fa fa-circle text-warning"></i> Network Traffic
            </div>
            <hr>
            <div class="stats">
                <i class="fa fa-calendar"></i> Last 24 Hours Data
            </div>
        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById('chartSystemPerformance').getContext('2d');
    var chartSystemPerformance = new Chart(ctx, {
        type: 'bar', // Bar chart for system performance metrics
        data: {
            labels: ['12 AM', '3 AM', '6 AM', '9 AM', '12 PM', '3 PM', '6 PM', '9 PM', '12 AM'], // Time intervals
            datasets: [
                {
                    label: 'CPU Usage (%)', // Dataset 1 - CPU Usage
                    data: [30, 45, 50, 40, 60, 55, 50, 65, 75], // Example CPU usage data (y-axis)
                    backgroundColor: 'rgba(75, 192, 192, 0.6)', // Bar color for CPU Usage
                    borderColor: 'rgba(75, 192, 192, 1)', // Border color for CPU Usage
                    borderWidth: 1
                },
                {
                    label: 'Network Traffic (Mbps)', // Dataset 2 - Network Traffic
                    data: [5, 7, 8, 10, 12, 14, 15, 18, 20], // Example Network Traffic data (y-axis)
                    backgroundColor: 'rgba(255, 159, 64, 0.6)', // Bar color for Network Traffic
                    borderColor: 'rgba(255, 159, 64, 1)', // Border color for Network Traffic
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Time'
                    }
                },
                y: {
                    beginAtZero: true, // Ensure y-axis starts at zero
                    title: {
                        display: true,
                        text: 'Usage (%) / Traffic (Mbps)'
                    }
                }
            },
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        boxWidth: 20,
                        padding: 15
                    }
                }
            }
        }
    });
</script>


</div>


<?php include("includes/footer.php"); ?>