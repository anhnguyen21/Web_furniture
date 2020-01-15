<?php
    require_once "../controller/connect.php";
    echo get_product_into_object()[getMorePro()[0][1]]->name;
    if(isset($_POST['add'])){
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        addUser($name,$address,$user,$pass,$phone);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>AddCustomer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/styleAdmin.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="index.html">Admin</a>

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
        <ul class="navbar-nav ml-auto ml-md-0" style="display: flex;">
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="badge badge-danger">9+</span>
                </a>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span class="badge badge-danger">7</span>
                </a>
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
        <ul class="sidebar navbar-nav">
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
                    <a class="dropdown-item" href="cusAdmin.php">List bought</a>
                    <a class="dropdown-item" href="listCus.php">List</a>
                    <a class="dropdown-item" href="addCustomer.html">Add customer:</a>
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

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Add Customer</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i> Customer</div>
                    <div class="card-body">
                    <section class="admin1">
                        <div class="container">
                            <div class="add">
                                <form action="" method="POST"  class="form-inline">
                                    <div class="form-group col-md-12">
                                        <label for="namepd">Name Customer</label>
                                        <input type="text" name="name" id="name" class="form-control col-md-4 ">
                                        <label for="codepd">Address</label>
                                        <input type="text" name="address" id="address" class="form-control col-md-4">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="ppd">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control col-md-4 ">                                    
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="namepd">User name</label>
                                        <input type="text" name="user" id="user" class="form-control col-md-4 ">
                                        <label for="codepd">Pass Word</label>
                                        <input type="password" name="pass" id="pass" class="form-control col-md-4 ">
                                    </div>
                                        
                                    <div class="col-md-12">
                                        <button class="btn btn-danger add" onclick="" name="add">Add Customer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

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
    </div>

</body>

</html>