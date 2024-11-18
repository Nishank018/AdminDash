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
            <li>
                <a href="dashboard.php">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashbord</p>
                </a>
            </li>
            <li class="active">
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
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4 class="card-title"> <strong>System Information</strong> </h4>
                <p class="card-category"> View detailed information about each system, including hardware specs, OS, and configuration settings.</p>
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
                            $query = "SELECT * FROM system_info WHERE CONCAT(hostname ,IP, system_name) LIKE '%$filtervalues%'";
                            $query_run = mysqli_query($connection, $query);

                            if ($query_run && mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $items) {
                                    ?>
                                    <!-- <dclass="card"
                                        style="border: 1px solid #ddd; border-radius: 8px; padding: 16px; margin: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"> -->
                                    <h2 style="margin-bottom: 10px; text-align: center;">System Details</h2>
                                    <p><strong>Hostname:</strong> <?= $items['hostname'] ?></p>
                                    <p><strong>IP:</strong> <?= $items['IP']; ?></p>

                                    <p><strong>MAC:</strong> <?= $items['mac']; ?></p>
                                    <p> <strong>System Serial Number:</strong> <?= $items['system_serial_number']; ?></p>
                                    <p><strong>System Name :</strong> <?= $items['system_name']; ?></p>
                                    <p><strong>Operating System:</strong> <?= $items['OS']; ?></ps>
                                    <p><strong>System Last Update :</strong> <?= $items['system_last_updated']; ?></p>
                                    <p><strong> OS Version:</strong> <?= $items['OS_version']; ?></p>
                                    <p><strong>OS Service Pack :</strong> <?= $items['OS_service_pack']; ?></p>
                                    <p><strong>OS Configuration :</strong> <?= $items['OS_configuration']; ?></p>
                                    <p><strong>Window License Status:</strong> <?= $items['windows_license_status']; ?></p>
                                    <p><strong>>Product ID :</strong> <?= $items['product_ID']; ?></p>
                                    <p><strong>BIOS Version : </strong><?= $items['BIOS_version']; ?></p>
                                    <p><strong>Windows Directory :</strong> <?= $items['windows_directory']; ?></p>
                                    <p><strong>System Directory :</strong> <?= $items['system_directory']; ?></p>
                                    <p><strong> Processor:</strong> <?= $items['processor']; ?></p>
                                    <p><strong>Machine :</strong> <?= $items['machine']; ?></p>
                                    <p><strong>Connectivity Status :</strong> <?= $items['connectivity_status']; ?></p>
                                    <p><strong>Primary Interface IPV4 :</strong> <?= $items['primary_interface_IPV4']; ?></p>
                                    <p><strong>Primary Interface MAC :</strong> <?= $items['primary_interface_MAC']; ?></p>
                                    <p><strong>WIFI Interface :</strong> <?= $items['WIFI_interface']; ?></p>
                                    <p><strong>OS Install Date :</strong> <?= $items['OS_install_date']; ?></p>
                                    <p><strong>Domain :</strong> <?= $items['domain']; ?></p>

                                </div>
                                <?php
                                }
                            } else {
                                ?>
                            <div style="color: red; text-align: center; margin-top: 20px;">No records found</div>
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