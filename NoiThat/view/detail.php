<?php
    require_once "../controller/connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Megashop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
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
                <div class="dropdown boxtaikhoan">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #bbbbbb"><i aria-hidden="true" class="fa fa-user"></i> <?php echo getNameCart() ?> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                    <!-- <ul class="dropdown-menu" style="width: 100px;">
                        <li>
                            <a class="dropdown-item" href="#" id="customer_login_link">Đăng nhập</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" id="customer_register_link">Đăng ký</a>
                        </li>
                    </ul> -->
                </div>
                <div class="mini-cart dropdown box-cart cart hidden-xs">
                    <a class="dropdown-toggle basket" href="#" style="color: #bbbbbb">
                        <img src="https://4.bp.blogspot.com/-gb-VsciQL70/WT-NqFtbXQI/AAAAAAAAAms/Iliao1xM3Fw5PpEl-iS14J6TxwSyvSYAQCLcB/s1600/icon_minicart.png" style="width:15px; height:15px;"> Giỏ hàng
                        <span class="cart-total simpleCart_quantity"> <?php echo getNumCart() ?> </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="container"> -->
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
                <form action="/search" class="navbar-form navbar-search navbar-right hidden-xs" id="search_mini_form" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="  Tìm kiếm tại đây" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
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
        <section class="detail1">
            <div class="container">
                <div class="imgDetail" style="width:40%">
                    <img src="../<?php echo get_product_into_object()[$_SESSION['index'] - 1]->image ?>" alt="" style="width: 400px;height: 300px;">
                </div>
                <div class="detail">
                    <p class="detail_text">
                        <?php echo get_product_into_object()[$_SESSION['index'] - 1]->name ?>
                    </p>
                    <h3 style="color:red;"><?php echo get_product_into_object()[$_SESSION['index'] - 1]->price ?>đ</h3>
                    Dòng sản phẩm: <?php echo get_product_into_object()[$_SESSION['index'] - 1]->type ?></span>
                    <h2>MÔ TẢ:</h2>
                    <span style="opacity: 0.8;"><?php echo get_product_into_object()[$_SESSION['index'] - 1]->detai ?></span>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button">+</button>
                        </div>
                        <input type="text" style="width:50px" placeholder="    1">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">-</button>
                        </div>
                        <form action="cart.php" method="POST">
                            <button name="addDetail" type="submit" value="<?php  echo get_product_into_object()[$_SESSION['index'] - 1]->id ?>" class="btn btn-success" style="margin: 0 0 0 30px;">Mua ngay</button>
                        </form>
                    </div>

                    <a class="iWishAdd">
                        <span><img class="iWishImg" style="width:30px;height:30px;color:red;" src="http://wishlists.sapoapps.vn/content/images/iwish_add.png" alt="Megashop"></span>
                        <span class="iwishAddChild"><?php echo allHeart($_SESSION['index']) ?> Lượt yêu thích</span>
                    </a>


                    <span style="color: red; width: 50%;"><br><i class="far fa-star" data-percent="70"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>
                </div>
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
                </div>
            </footer>
        </section>
    </div>
</body>