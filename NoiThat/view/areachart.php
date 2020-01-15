<?php
    require_once '../controller/connect.php';
    $m=checkDateDay('Monday');
    $t=checkDateDay('Tuesday');
    $w=checkDateDay('Wednesday');
    $t=checkDateDay('Thursday');
    $f=checkDateDay('Friday');
    $s=checkDateDay('Saturday');
    $su=checkDateDay('Sunday');

    $den=countPro('d');
    $ban=countPro('b');
    $giuong=countPro('g');
    $tu=countPro('t');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Charts</title>

    <!-- Custom fonts for this template-->
    <link href="../css/styleAdmin.css" rel="stylesheet">
    <link href="../css/stylePro.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
                </div>
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="badge badge-danger"><?php echo count(get_message()) ?></span>
                </a>
                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div> -->
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span class="badge badge-danger">7</span>
                </a>
                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div> -->
            </li>
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Anh Nguyen</span>
                    <img class="img-profile rounded-circle" src="../img/anh.jpg" style="width: 25px; height:25px">
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                    </a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <!-- <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Account Admin</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Account:</h6>
                    <a class="dropdown-item" href="areachart.php">Statistical</a>
                    <!-- <a class="dropdown-item" href="register.html">Register</a>
                    <a class="dropdown-item" href="forgot-password.html">Forgot Password</a> -->
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Customer</span></a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Infor customer:</h6>
                    <a class="dropdown-item" href="cusAdmin.php">List</a>
                    <a class="dropdown-item" href="register.html">Update customers</a>
                    <a class="dropdown-item" href="addCustomer.php">Add customer:</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Product</span></a>
                <div class="bg-white dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Infor Prouct:</h6>
                    <a class="dropdown-item" href="listProduct.php">List</a>
                    <a class="dropdown-item" href="sellProduct.php">Selling products</a>
                    <a class="dropdown-item" href="indexAdmin.php">Selled product</a>
                    <a class="dropdown-item" href="addProductAdmin.php">Add product</a>
                </div>
            </li>
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Charts</li>
                </ol>

                <!-- Area Chart Example-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-chart-area"></i> Area Chart Example</div>
                    <div class="card-body">
                        <canvas id="myAreaChart" width="100%" height="30"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fas fa-chart-bar"></i> Bar Chart Example</div>
                            <div class="card-body">
                                <canvas id="myBarChart" width="100%" height="50"></canvas>
                            </div>
                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fas fa-chart-pie"></i> Pie Chart Example</div>
                            <div class="card-body">
                                <canvas id="myPieChart" width="100%" height="100"></canvas>
                            </div>
                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-chart-area"></i> Area Chart Example</div>
                    <div class="card-body">
                        <canvas id="lineChart"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

                <p class="small text-center text-muted my-5">
                    <em>More chart examples coming soon...</em>
                </p>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2019</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <script src="../js/chart.js/Chart.min.js"></script>

    <script>
        Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#292b2c';

    // Area Chart Example
        var ctx = document.getElementById("myAreaChart");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Mon", "Tues", "Web", "Thur", "Fri", "Sat"],
                datasets: [{
                    label: "Sessions",
                    lineTension: 0.3,
                    backgroundColor: "rgba(2,117,216,0.2)",
                    borderColor: "rgba(2,117,216,1)",
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(2,117,216,1)",
                    pointBorderColor: "rgba(255,255,255,0.8)",
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(2,117,216,1)",
                    pointHitRadius: 30,
                    pointBorderWidth: 2,
                    data: [<?php echo $m ?>, <?php echo $t ?>, <?php echo $w ?>, <?php echo $t ?>, <?php echo $f ?>,<?php echo $s ?>],
                }],
            },
            options: {
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: 10,
                            maxTicksLimit: 10
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, .125)",
                        }
                    }],
                },
                legend: {
                    display: false
                }
            }
        });

        // ==================================  bar =========================================

        Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#292b2c';

        // Bar Chart Example
        var ctx = document.getElementById("myBarChart");
        var myLineChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["<?php echo get_product_into_object()[getMorePro()[0][1]]->type ?>", "<?php echo get_product_into_object()[getMorePro()[1][1]]->type ?>", "<?php echo get_product_into_object()[getMorePro()[2][1]]->type ?>", "<?php echo get_product_into_object()[getMorePro()[3][1]]->type ?>", "<?php echo get_product_into_object()[getMorePro()[4][1]]->type ?>", "<?php echo get_product_into_object()[getMorePro()[5][1]]->type ?>"],
            datasets: [{
            label: "Revenue",
            backgroundColor: "rgba(2,117,216,1)",
            borderColor: "rgba(2,117,216,1)",
            data: [<?php echo getMorePro()[0][2] ?>, <?php echo getMorePro()[1][2] ?>, <?php echo getMorePro()[2][2] ?>, <?php echo getMorePro()[3][2] ?>, <?php echo getMorePro()[4][2] ?>, <?php echo getMorePro()[5][2] ?>],
            }],
        },
        options: {
            scales: {
            xAxes: [{
                
                ticks: {
                maxTicksLimit: 6
                }
            }],
            yAxes: [{
                ticks: {
                min: 0,
                max: 50,
                maxTicksLimit: 10
                },
                gridLines: {
                display: true
                }
            }],
            },
            legend: {
            display: false
            }
        }
        });

        // ================================= pie =======================================

        Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#292b2c';

        // Pie Chart Example
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["den", "ban", "giuong", "tu"],
            datasets: [{
            data: [<?php echo $den ?>,<?php echo $ban ?>,<?php echo $giuong ?>,<?php echo $tu ?>],
            backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
            }],
        },
        });

        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "San Pham Den",
            data: [65, 59, 80, 81, 56, 55, 40],
            backgroundColor: ['rgba(105, 0, 132, .2)',],borderColor: ['rgba(200, 99, 132, .7)',],
            borderWidth: 2
            },{
            label: "San Pham Ban",
            data: [30, 20, 60, 29, 40, 70, 20],
            backgroundColor: ['rgba(0, 99, 200, .2)',],borderColor: ['rgba(0, 30, 130, .7)',],
            borderWidth: 2
            },{
            label: "San Pham Giuong",
            data: [28, 48, 40, 19, 86, 27, 90],
            backgroundColor: ['rgba(0, 137, 132, .2)',],borderColor: ['rgba(0, 10, 130, .7)',],
            borderWidth: 2
            },{
            label: "San Pham Tu",
            data: [40, 50, 20, 30, 70, 25, 40],
            backgroundColor: ['rgba(120, 123, 129, .2)',],borderColor: ['rgba(0, 10, 130, .7)',],
            borderWidth: 2
            }
            ]},
        options: {
            responsive: true
        }
        });


    </script>

</body>

</html>