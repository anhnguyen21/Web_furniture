<?php
    require_once "../controller/connect.php";
    global $db;
    if (isset($_POST["btn"])) {
        $name = $_POST["name"];
        $pass = $_POST["pass"];
        $nameUser = get_login($name, $pass);
    }
    if (isset($_POST["id"])) {
        if (empty($_SESSION['login'])) {
    ?>
            <script>
                alert("Ban can dang nhap de co the them san pham");
            </script>
        <?php

        } else {
            $id = $_POST["id"];
            addProduct($id - 1, idUser());
        }
    }
    if (isset($_POST['btnsing'])) {
        $name = $_POST["name"];
        $adr = $_POST["adr"];
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $phone = $_POST["phone"];
        addUser($name, $adr, $user, $pass, $phone);
    }
    if (isset($_POST['heart'])) {
        if (empty($_SESSION['login'])) {
        ?>
            <script>
                alert("Ban can dang nhap de co the thich sam pham");
            </script>
        <?php
        } else {
            $id = $_POST['heart'];
            addHeaartUser($id);
        }
    }
    if (isset($_POST['dtail'])) {
        $_SESSION['index'] = $_POST['dtail'];
        ?>
            <script>
                location.href = "detail.php";
            </script>
        <?php
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Megashop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <script>
        function Logout() {
            location.href = "logout.php";
            document.getElementById("user").style.display = 'none';
            document.getElementById("newIcon").style.display = 'block';
        }
    </script>
    <div class="header-container">
        <div class="container_header">
            <div class="headed_left">
                <div class="hotline_top">
                    <img src="https://4.bp.blogspot.com/-z-K8jq5n1Z0/WT-MoaclpYI/AAAAAAAAAmk/1oBmkU_YuGIAyjacW2Xa_VT5XOSi2E_aACLcB/s1600/icondienthoai.png">
                    <b style="color:#fff;">Tư vấn 24/7:</b>
                    <a href="tel:0329488708" style="color: #bbbbbb"><span>0329488708</span></a>
                </div>
                <p class="diachi_header">
                    <span>Địa chỉ:</span> Nguyễn Thế Anh,101b, Lê Hữu Trác, Sơn Trà, Đà Nẵng
                </p>
            </div>

            <div class="headed_right">
                <div class="dropdown boxtaikhoan" id="oldIcon">
                    <a class="dropdown-toggle" id="user" data-toggle="dropdown" href="#" style="color: #bbbbbb;"><i aria-hidden="true" class="fa fa-user"></i> <?php echo getNameCart() ?> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" style="width: 100px;">
                        <li>
                            <a class="dropdown-item" href="#" id="customer_login_link" data-toggle="modal" data-target="#modalLoginForm">Đăng nhập</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" id="customer_register_link" data-toggle="modal" data-target="#modalRegisterForm">Đăng ký</a>
                        </li>
                        <li onclick="Logout()">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="dropdown boxtaikhoan" id="newIcon" style="display:none;">
                    <a class="nav-link dropdown-toggle" style="color: #fff;" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Anh</span>
                        <img class="img-profile rounded-circle" src="img/anh.jpg" style="width: 20px;height:20px">
                    </a>
                </div>
                <div class="mini-cart dropdown box-cart cart hidden-xs">
                    <a class="dropdown-toggle basket" href="cart.php" style="color: #bbbbbb">
                        <img src="https://4.bp.blogspot.com/-gb-VsciQL70/WT-NqFtbXQI/AAAAAAAAAms/Iliao1xM3Fw5PpEl-iS14J6TxwSyvSYAQCLcB/s1600/icon_minicart.png" style="width:15px; height:15px;"> Giỏ hàng
                        <span class="cart-total simpleCart_quantity" id="num"><?php echo getNumCart() ?></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="top" style="background:#f6f6f6">
                <nav>
                    <div class="brand">
                        <p>Nội thất</p>
                    </div>
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Sản phẩm</a>
                            <ul>
                                <li><a href="#">Giường ngủ</a></li>
                                <li><a href="#">Ghế phòng khách</a></li>
                                <li><a href="#">Bàn</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </nav>
                <div class="search">
                    <form action="allProduct.php" class="navbar-form navbar-search navbar-right hidden-xs" id="search_mini_form" method="post">
                        <div class="input-group mb-3">
                            <input name='textSearch' class="form-control" placeholder="  Tìm kiếm tại đây">
                            <div class="input-group-append">
                                <button name="btnSearch" class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/slide1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/slide2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/slide3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


        <div class="container" style="padding: 30px 0 20px 0;">
            <div class="row">
                <div class="col-sm-3">
                    <div class="item">
                        <span class="icon icon1"></span>
                        <p class="des">
                            TƯ VẤN 24/7
                            <span>
                                Miễn phí
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="item">
                        <span class="icon icon2">
                        </span>
                        <p class="des">
                            Vận chuyển
                            <span>
                                miễn phí
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="item">
                        <span class="icon icon3">
                        </span>
                        <p class="des">
                            NHẬN HÀNG
                            <span>
                                NHẬN TIỀN
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="item">
                        <span class="icon icon4">
                        </span>
                        <p class="des">
                            GỌI NGAY
                            <span>
                                0902 068 068
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="#" class="banner">
                        <img src="http://bizweb.dktcdn.net/100/109/381/themes/669077/assets/sec_banner_1.png?1574331734196" alt="banner 01">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="#" class="banner banner-center">
                        <img src="http://bizweb.dktcdn.net/100/109/381/themes/669077/assets/sec_banner_center_1.png?1574331734196%22%20data-lazyload=%22//bizweb.dktcdn.net/100/109/381/themes/669077/assets/sec_banner_center_1.png?1574331734196" alt="banner 01">
                    </a>
                    <a href="#" class="banner banner-center">
                        <img src="http://bizweb.dktcdn.net/100/109/381/themes/669077/assets/sec_banner_center_2.png?1574331734196%22%20data-lazyload=%22//bizweb.dktcdn.net/100/109/381/themes/669077/assets/sec_banner_center_2.png?1574331734196" alt="banner 01">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="#" class="banner">
                        <img src="http://bizweb.dktcdn.net/100/109/381/themes/669077/assets/sec_banner_2.png?1574331734196" alt="Banner 02">
                    </a>
                </div>
            </div>
        </div>
        <!-- ======================================== container ========================================== -->
        <div class="container">
            <!-- <div class="header-title">
                <h3 class="modtitle">
                    <span>Danh mục</span>
                    <span>sản phẩm</span>
                </h3>
            </div> -->
            <section class="col-product">
                <div class="row">
                    <div class="col-sm-4 col-xs-12 col-lg-3 col-md-3">
                        <div class="box-colection">
                            <h4 class="title-head"><span>Danh mục</span></h4>
                            <ul class="list-collections list-cate-banner">
                                <li class="menu_lv1 item-sub-cat">
                                    <a href="/phong-khach">
                                        <i aria-hidden="true" class="fa fa-angle-double-right"></i> Phòng khách
                                    </a>
                                </li>
                                <li class="menu_lv1 item-sub-cat">
                                    <a href="/phong-ngu"><i aria-hidden="true" class="fa fa-angle-double-right"></i> Phòng ngủ</a>
                                </li>
                                <li class="menu_lv1 item-sub-cat">
                                    <a href="/sofa">
                                        <i aria-hidden="true" class="fa fa-angle-double-right"></i> Sofa
                                    </a>
                                </li>
                                <li class="menu_lv1 item-sub-cat">
                                    <a href="/phong-bep">
                                        <i aria-hidden="true" class="fa fa-angle-double-right"></i> Phòng bếp
                                    </a>
                                </li>
                                <li class="menu_lv1 item-sub-cat">
                                    <a href="/phong-tre-em">
                                        <i aria-hidden="true" class="fa fa-angle-double-right"></i> Phòng trẻ em
                                    </a>
                                </li>
                                <li class="menu_lv1 item-sub-cat">
                                    <a href="/thiet-bi-bep">
                                        <i aria-hidden="true" class="fa fa-angle-double-right"></i> Thiết bị bếp
                                    </a>
                                </li>
                                <li class="menu_lv1 item-sub-cat">
                                    <a href="/thiet-bi-ve-sinh">
                                        <i aria-hidden="true" class="fa fa-angle-double-right"></i> Thiết bị vệ sinh
                                    </a>
                                </li>
                                <li class="menu_lv1 item-sub-cat">
                                    <a href="/do-trang-tri">
                                        <i aria-hidden="true" class="fa fa-angle-double-right"></i> Đồ trang trí
                                    </a>
                                </li>
                                <li class="menu_lv1 item-sub-cat">
                                    <a href="/phu-kien-bep">
                                        <i aria-hidden="true" class="fa fa-angle-double-right"></i> Phụ kiện bếp
                                    </a>
                                </li>
                                <li class="menu_lv1 item-sub-cat">
                                    <a href="/nha-thong-minh">
                                        <i aria-hidden="true" class="fa fa-angle-double-right"></i> Nhà thông minh
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <img alt="banner" src="https://4.bp.blogspot.com/-pIHiu_2DgMM/WT-dulJbsmI/AAAAAAAAAn4/zukJcj0VbBk3iyAcrNKvR30mNmiSn9BJgCLcB/s1600/c1.jpg" style="width: 99%;">
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 col-lg-9 col-md-9" ">
                        <!--  =====================================  xem lai =======================================================  -->
                        <div class=" header-title ">
                            <h4 class=" modtitle ">
                                <span>sản phẩm</span>
                                <span>Bán chạy nhất</span>
                            </h4>
                            <p><a href=" allProduct.php">>> Tất cả các sản phẩm</a></p>
                    </div>
                    <div class="row ">
                        <?php
                        $lenght;
                        if (count(getMorePro()) >= 1) {
                            if (count(getMorePro()) < 8) {
                                $lenght = count(getMorePro());
                            } else {
                                $lenght = 8;
                            }
                            for ($i = 0; $i < $lenght; $i++) {
                        ?>
                                <div class="col-sm-6 col-md-3">
                                    <div class="product">
                                        <div class="img-box">
                                            <img src="../<?php echo get_product_into_object()[getMorePro()[$i][1]]->image ?>" alt="">
                                        </div>
                                        <div class="details">
                                            <h2><?php echo get_product_into_object()[getMorePro()[$i][1]]->name ?></h2>
                                            <div class="prich"><?php echo get_product_into_object()[getMorePro()[$i][1]]->price ?></div>
                                            <div>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <label>Description</label>
                                            <p>
                                                <?php echo get_product_into_object()[getMorePro()[$i][1]]->type ?><br>
                                                <?php echo get_product_into_object()[getMorePro()[$i][1]]->detai ?>
                                            </p>
                                            <form method="post">
                                                <div class="overlay">
                                                    <button name="dtail" value="<?php echo get_product_into_object()[getMorePro()[$i][1]]->id ?>" class="btn btn-secondary"><i class="fas fa-eye"></i></button>
                                                    <button type="button" class="btn btn-secondary"><i class="far fa-heart"></i></button>
                                                    <button name="id" value="<?php echo get_product_into_object()[getMorePro()[$i][1]]->id ?>" class="btn btn-secondary"><i class="fas fa-shopping-cart"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            for ($i = 0; $i < 8; $i++) {
                            ?>
                                <div class="col-sm-6 col-md-3">
                                    <div class="product">
                                        <div class="img-box">
                                            <img src="../<?php echo get_product_into_object()[getMorePro()[$i][1]]->image ?>" alt="">
                                        </div>
                                        <div class="details">
                                            <h2><?php echo get_product_into_object()[getMorePro()[$i][1]]->name ?></h2>
                                            <div class="prich"><?php echo get_product_into_object()[$i]->price ?></div>
                                            <div>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <label>Description</label>
                                            <p>
                                                <?php echo get_product_into_object()[$i]->type ?><br>
                                                <?php echo get_product_into_object()[$i]->detai ?>
                                            </p>
                                            <form method="post">
                                                <div class="overlay">
                                                    <button name="dtail" value="<?php echo get_product_into_object()[getMorePro()[$i][1]]->id ?>" class="btn btn-secondary"><i class="fas fa-eye"></i></button>
                                                    <button type="button" class="btn btn-secondary"><i class="far fa-heart"></i></button>
                                                    <button name="id" value="<?php echo get_product_into_object()[getMorePro()[$i][1]]->id ?>" class="btn btn-secondary"><i class="fas fa-shopping-cart"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }


                        ?>

                    </div>

                </div>
        </div>
        </section>
        <section class="produc1 ">
            <div class="container ">
                <div class="header-title ">
                    <h4 class="modtitle ">
                        <span>Danh mục</span>
                        <span>Đèn trang trí</span>
                    </h4>
                </div>

                <div class="row ">
                    <?php
                    for ($i = 0; $i < count(get_product_into_object()); $i++) {
                        if (get_product_into_object()[$i]->typePro == 'd') {
                    ?>
                            <div class="col-sm-6 col-md-3">
                                <div class="product">
                                    <div class="img-box">
                                        <img src="../<?php echo get_product_into_object()[$i]->image ?>" alt="">
                                    </div>
                                    <div class="details">
                                        <h2><?php echo get_product_into_object()[$i]->name ?></h2>
                                        <div class="prich"><?php echo get_product_into_object()[$i]->price ?></div>
                                        <div>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <label>Description</label>
                                        <p>
                                            <?php echo get_product_into_object()[$i]->type ?><br>
                                            <?php echo get_product_into_object()[$i]->detai ?>
                                        </p>
                                        <form method="post">
                                            <div class="overlay">
                                                <button name="dtail" value="<?php echo $i + 1 ?>" class="btn btn-secondary"><i class="fas fa-eye"></i></button>
                                                <?php if (checkHeartExits($i + 1) == true) { ?>
                                                    <button name="heart" value="<?php echo $i + 1 ?>" class="btn btn-secondary" style="background-color: red;"><i class="far fa-heart"></i></button>
                                                <?php } else {
                                                ?>
                                                    <button name="heart" value="<?php echo $i + 1 ?>" class="btn btn-secondary"><i class="far fa-heart"></i></button>
                                                <?php
                                                } ?>

                                                <button name="id" value="<?php echo $i + 1 ?>" class="btn btn-secondary"><i class="fas fa-shopping-cart"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>

        <section class="produc2 ">
            <div class="container ">
                <div class="header-title ">
                    <h4 class="modtitle ">
                        <span>Danh mục</span>
                        <span>Bàn ăn</span>
                    </h4>
                </div>

                <div class="row ">
                    <?php
                    for ($i = 0; $i < count(get_all_product()); $i++) {
                        if (get_all_product()[$i][6] == 'b') {
                    ?>
                            <div class="col-sm-6 col-md-3">
                                <div class="product">
                                    <div class="img-box">
                                        <img src="../<?php echo get_all_product()[$i][5] ?>" alt="">
                                    </div>
                                    <div class="details">
                                        <h2><?php echo get_all_product()[$i][1] ?></h2>
                                        <div class="prich"><?php echo get_all_product()[$i][2] ?></div>
                                        <div>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <label>Description</label>
                                        <p>
                                            <?php echo get_all_product()[$i][3] ?><br>
                                            <?php echo get_all_product()[$i][4] ?>
                                        </p>
                                        <form method="post">
                                            <div class="overlay">
                                                <button name="dtail" value="<?php echo $i + 1 ?>" class="btn btn-secondary"><i class="fas fa-eye"></i></button>
                                                <?php if (checkHeartExits($i + 1) == true) { ?>
                                                    <button name="heart" value="<?php echo $i + 1 ?>" class="btn btn-secondary" style="background-color: red;"><i class="far fa-heart"></i></button>
                                                <?php } else {
                                                ?>
                                                    <button name="heart" value="<?php echo $i + 1 ?>" class="btn btn-secondary"><i class="far fa-heart"></i></button>
                                                <?php
                                                } ?>
                                                <button name="id" value="<?php echo $i + 1 ?>" class="btn btn-secondary"><i class="fas fa-shopping-cart"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>


        <section class="produc3 ">
            <div class="container ">
                <div class="header-title ">
                    <h4 class="modtitle ">
                        <span>Danh mục</span>
                        <span>Giường ngủ</span>
                    </h4>
                </div>

                <div class="row ">
                    <?php
                    for ($i = 0; $i < count(get_all_product()); $i++) {
                        if (get_all_product()[$i][6] == 'g') {
                    ?>
                            <div class="col-sm-6 col-md-3">
                                <div class="product">
                                    <div class="img-box">
                                        <img src="../<?php echo get_all_product()[$i][5] ?>" alt="">
                                    </div>
                                    <div class="details">
                                        <h2><?php echo get_all_product()[$i][1] ?></h2>
                                        <div class="prich"><?php echo get_all_product()[$i][2] ?></div>
                                        <div>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <label>Description</label>
                                        <p>
                                            <?php echo get_all_product()[$i][3] ?><br>
                                            <?php echo get_all_product()[$i][4] ?>
                                        </p>
                                        <form method="post">
                                            <div class="overlay">
                                                <button name="dtail" value="<?php echo $i + 1 ?>" class="btn btn-secondary"><i class="fas fa-eye"></i></button>
                                                <?php if (checkHeartExits($i + 1) == true) { ?>
                                                    <button name="heart" value="<?php echo $i + 1 ?>" class="btn btn-secondary" style="background-color: red;"><i class="far fa-heart"></i></button>
                                                <?php } else {
                                                ?>
                                                    <button name="heart" value="<?php echo $i + 1 ?>" class="btn btn-secondary"><i class="far fa-heart"></i></button>
                                                <?php
                                                } ?>
                                                <button name="id" value="<?php echo $i + 1 ?>" class="btn btn-secondary"><i class="fas fa-shopping-cart"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>


        <section class="produc4 ">
            <div class="container ">
                <div class="header-title ">
                    <h4 class="modtitle ">
                        <span>Danh mục</span>
                        <span>Tủ quần áo</span>
                    </h4>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row ">
                                <?php
                                for ($i = 0; $i < count(get_all_product()); $i++) {
                                    if (get_all_product()[$i][6] == 't') {
                                ?>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="product">
                                                <div class="img-box">
                                                    <img src="../<?php echo get_all_product()[$i][5] ?>" alt="">
                                                </div>
                                                <div class="details">
                                                    <h2><?php echo get_all_product()[$i][1] ?></h2>
                                                    <div class="prich"><?php echo get_all_product()[$i][2] ?></div>
                                                    <div>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <label>Description</label>
                                                    <p>
                                                        <?php echo get_all_product()[$i][3] ?><br>
                                                        <?php echo get_all_product()[$i][4] ?>
                                                    </p>
                                                    <form method="post">
                                                        <div class="overlay">
                                                            <button name="dtail" value="<?php echo $i + 1 ?>" class="btn btn-secondary"><i class="fas fa-eye"></i></button>
                                                            <?php if (checkHeartExits($i + 1) == true) { ?>
                                                                <button name="heart" value="<?php echo $i + 1 ?>" class="btn btn-secondary" style="background-color: red;"><i class="far fa-heart"></i></button>
                                                            <?php } else {
                                                            ?>
                                                                <button name="heart" value="<?php echo $i + 1 ?>" class="btn btn-secondary"><i class="far fa-heart"></i></button>
                                                            <?php
                                                            } ?>
                                                            <button name="id" value="<?php echo $i + 1 ?>" class="btn btn-secondary"><i class="fas fa-shopping-cart"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
        </section>

        </section>
    </div>
    <section class="part2 ">
        <div class="container">
            <h2 class="bottom_title "><span>Đăng ký nhận</span> <span>tư vấn miễn phí</span></h2>
            <p class="bottom_text ">Bạn là khách hàng, lớn hay nhỏ, muốn được hỗ trợ, tư vấn, xin vui lòng</br> gửi email cho chúng tôi để được hỗ trợ tốt nhất!</p>
            <form action="//dkt.us13.list-manage.com/subscribe/post?u=0bafe4be7e17843051883e746&amp;id=3bdd6e9e3b " method="post " id="mc-embedded-subscribe-form " class="section-newsletter__form " name="mc-embedded-subscribe-form " target="_blank ">
                <div class="input-group mb-3 " style="width:300px;margin-left: 400px; ">
                    <input type="text " class="form-control " placeholder="Email của bạn " aria-label="Email của bạn " aria-describedby="button-addon2 ">
                    <div class="input-group-append ">
                        <button class="btn btn-outline-secondary " type="button " id="button-addon2 ">Button</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="part3 ">
        <div class="container ">
            <div class="header-title ">
                <h4 class="modtitle ">
                    <span>Đối</span>
                    <span> tác</span>
                </h4>
            </div>
            <div class="imageSponsor ">
                <img src="http://bizweb.dktcdn.net/100/109/381/themes/669077/assets/sec_brand_img_1.png?1574331734196 " alt=" ">
                <img src="http://bizweb.dktcdn.net/100/109/381/themes/669077/assets/sec_brand_img_2.png?1574331734196 " alt=" ">
                <img src="http://bizweb.dktcdn.net/100/109/381/themes/669077/assets/sec_brand_img_3.png?1574331734196 " alt=" ">
                <img src="http://bizweb.dktcdn.net/100/109/381/themes/669077/assets/sec_brand_img_3.png?1574331734196 " alt=" ">
                <img src="http://bizweb.dktcdn.net/100/109/381/themes/669077/assets/sec_brand_img_3.png?1574331734196 " alt=" ">
                <img src="http://bizweb.dktcdn.net/100/109/381/themes/669077/assets/sec_brand_img_3.png?1574331734196 " alt=" ">
            </div>
        </div>
    </section>
    <section>
        <footer>
            <div class="footer ">
                <div class="grid-footer ">
                    <div class="grid-itemfooter ">
                        <span>Nội Thất</span>
                        <div>
                            <div class="text-foot ">
                                <div>Bàn</div>
                                <div>Đèn</div>
                                <div>Giường</div>
                                <div> Tủ</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-itemfooter ">
                        <span>LIÊN LẠC</span>
                        <div class="text-foot ">
                            <p>Mọi thắc mắc xin liên hệ đến<br> 101b Lê Hữu Trác,Sơn Trà, Đà Nẵng<br> Số điện thoại liên hệ (+84) 329 488 708</p>
                            <div class="socials ">
                                <a href="# " class="fa fa-facebook "></a>
                                <a href="# " class="fa fa-twitter "></a>
                                <a href="# " class="fa fa-google-plus "></a>
                            </div>
                        </div>
                    </div>
                    <div class="grid-itemfooter ">
                        <span>BẢN TIN</span>
                        <div class="text-foot ">
                            <input class="input1 bg-none plh1 stext-107 cl7 " type="text " name="email " placeholder="email@example.com "><br><br>
                            <button type="button " class="btn btn-primary " style="margin-left:40px; ">Submit</button>
                        </div>
                    </div>
                </div>
        </footer>
    </section>
    <!--============== Sign in ==========================-->
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 250px; margin-left:600px;">
            <div class="card" >
                    <article class="card-body">
                        <a href="" class="float-right btn btn-outline-primary">Sign up</a>
                        <h5 class="card-title mb-4 mt-1">Sign in</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Your user name</label>
                                <input name="name" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <a class="float-right" href="#">Forgot?</a>
                                <label>Your password</label>
                                <input name="pass" class="form-control" placeholder="******" type="password">
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label> <input type="checkbox"> Save password </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" name="btn"> Login  </button>
                            </div>
                        </form>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!--=========================== Sign Up ==============================-->

    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:400px;margin-left:50px;">
                <div class="modal-header text-center">
                    <h4 class="modal-title  font-weight-bold">Sign up</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post">
                    <div class="modal-body mx-1">
                        <div class="md-form mb-1">
                        <label data-error="wrong" data-success="right" for="orangeForm-name">Full name</label>
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="Fname" name="name" id="orangeForm-name" class="form-control validate">
                           
                        </div>
                        <div class="md-form mb-1">
                            <label data-error="wrong" data-success="right" for="orangeForm-email">Adress</label>
                            <i class="fas fa-map-marker-alt"></i>
                            <input type="name" name="adr" id="orangeForm-email" class="form-control validate">
                           
                        </div>
                        <div class="md-form mb-1">
                            <label data-error="wrong" data-success="right" for="orangeForm-email">User name</label>
                            <i class="fas fa-users"></i>
                            <input type="user" name="user" id="orangeForm-email" class="form-control validate">
                           
                        </div>

                        <div class="md-form mb-1">
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" name="pass" id="orangeForm-pass" class="form-control validate">
                          
                        </div>

                        <div class="md-form mb-1">
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Your phone</label>
                            <i class="fas fa-phone"></i>
                            <input type="password" name="phone" id="orangeForm-pass" class="form-control validate">
                          
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button onclick="regist()" name='btnsing' class="btn btn-deep-orange" style="background: red;">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>