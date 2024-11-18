<?php include("dbconfig/dbconfig.php"); ?>
<?php include("includes/header.php"); ?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
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
            <li >
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
            <li class="active">
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


<!-- <div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4 class="card-title"> Table on Plain Background</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div>
                <form>
                    <div class="input-group no-border">
                        <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                            $_GET['search'];
                        } ?>" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-primary">Search</button>

                </form>
            </div>


            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-border">
                            <thead>
                                <tr>
                                    <th >Hostname</th>
                                    <th >Process ID</th>
                                    <th >Process Name</th>
                                    <th >Status</th>
                                    <th >CPU Usage</th>
                                    <th >Memory Usage</th>
                                    <th >Threads Count</th>
                                    <th >User Name</th>
                                    <th >Start Time</th>
                                    <th >Executable Path</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                if (isset($_GET['search'])) {
                                    $filtervalues = $_GET['search'];
                                    $query = "SELECT * FROM running_processes where CONCAT(hostname) LIKE '%$filtervalues%'";
                                    $query_run = mysqli_query($connection, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $items) {
                                            ?>
                                            <tr>
                                                <td><?= $items['hostname']; ?></td>
                                                <td><?= $items['processID']; ?></td>
                                                <td><?= $items['processName']; ?></td>
                                                <td><?= $items['status']; ?></td>
                                                <td><?= $items['CPU_usage']; ?></td>
                                                <td><?= $items['memory_usage']; ?></td>
                                                <td><?= $items['threads_count']; ?></td>
                                                <td><?= $items['username']; ?></td>
                                                <td><?= $items['start_time']; ?></td>
                                                <td><?= $items['executable_path']; ?></td>

                                            </tr>
                                            
                                            <?php


                                        }

                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="4">NO record found</td>
                                    </tr>
                                    <?php
                                }
                                ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div> -->

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4 class="card-title"><strong>Running Processes</strong></h4>
                <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div>
                <form>
                    <div class="input-group no-border">
                        <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                            echo $_GET['search'];
                        } ?>" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-primary">Search</button>

                </form>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">

                        <?php
                        if (isset($_GET['search'])) {
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM running_processes WHERE hostname LIKE '%$filtervalues%'";
                            $query_run = mysqli_query($connection, $query);

                            if ($query_run && mysqli_num_rows($query_run) > 0) {
                                ?>
                                <div class="card"
                                    style="border: 1px solid #ddd; border-radius: 8px; padding: 16px; margin: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                    <h2 style="margin-bottom: 10px; text-align: center;">System Details</h2>
                                    <p><strong>Hostname:</strong> <?= $filtervalues ?></p>
                                    <hr>
                                    <?php
                                    foreach ($query_run as $row) {
                                        ?>
                                        <p><strong>Process ID:</strong> <?= $row['processID'] ?></p>
                                        <p><strong>Process Name:</strong> <?= $row['processName'] ?></p>
                                        <p><strong>Status:</strong> <?= $row['status'] ?> </p>
                                        <p><strong>CPU Usage:</strong> <?= $row['CPU_usage'] ?></p>
                                        <p><strong>Memory Usage:</strong> <?= $row['memory_usage'] ?> </p>
                                        <p><strong>Threads Count:</strong> <?= $row['threads_count'] ?></p>
                                        <p><strong>Username:</strong> <?= $row['username'] ?></p>
                                        <p><strong>Start Time:</strong> <?= $row['start_time'] ?></p>
                                        <p><strong>Execution Path:</strong> <?= $row['executable_path'] ?></p>
                                        <hr>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div style="color: red; text-align: center; margin-top: 20px;">No records found for the given
                                    search</div>
                                <?php
                            }
                        } else {
                            ?>
                            <div style="color: red; text-align: center; margin-top: 20px;">Please enter a search query</div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>





<?php include("includes/footer.php"); ?>