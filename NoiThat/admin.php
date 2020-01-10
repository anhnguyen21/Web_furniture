<?php
     require_once "connect.php";
    if(isset($_POST['add'])){
        $name=$_POST['npd'];
        $price=$_POST['ppd'];
        $type=$_POST['type'];
        $typePro=$_POST['typro'];
        $detail=$_POST['de'];
        $image=$_POST['img'];
        addProductAdimn($name,$price,$type,$typePro,$detail,$image);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Megashop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #bbbbbb"><i aria-hidden="true" class="fa fa-user"></i>Tài khoản <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" style="width: 100px;">
                        <li>
                            <a class="dropdown-item" href="#" id="customer_login_link">Đăng nhập</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" id="customer_register_link">Đăng ký</a>
                        </li>
                    </ul>
                </div>
                <div class="mini-cart dropdown box-cart cart hidden-xs">
                    <a class="dropdown-toggle basket" href="#" style="color: #bbbbbb">
                        <img src="https://4.bp.blogspot.com/-gb-VsciQL70/WT-NqFtbXQI/AAAAAAAAAms/Iliao1xM3Fw5PpEl-iS14J6TxwSyvSYAQCLcB/s1600/icon_minicart.png" style="width:15px; height:15px;"> Giỏ hàng
                        <span class="cart-total simpleCart_quantity">0</span>
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
                        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slide2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slide3.jpg" class="d-block w-100" alt="...">
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
        <!-- <div class="container" style="padding: 30px 0 20px 0;">
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
        </div> -->
        <section class="admin1">
            <div class="container">
                <div class="add">
                    <form action="" method="POST"  class="form-inline">
                        <div class="form-group col-md-12">
                            <label for="namepd">Name Product</label>
                            <input type="text" name="npd" id="npd" class="form-control col-md-4 ">
                            <label for="codepd">Price Product</label>
                            <input type="text" name="ppd" id="ppd" class="form-control col-md-4">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="ppd">Type Product</label>
                            <input type="text" name="type" id="type" class="form-control col-md-4 ">
                            <label for="select">Item Product</label>
                            <select name="typro" id="select" class="form-control col-md-4">
                                <option value="1">Ban</option>
                                <option value="2">Tu</option>
                                <option value="3">Giuong</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="codepd">Detail</label>
                            <textarea class="form-control col-md-4" rows="3" name="de"></textarea>
                            <!-- <input type="text" name="colorpd" id="colorpd" class="form-control col-md-4 col-sm-12 col-xs-12"> -->
                            <label for="img">Image Product</label>
                            <input type="file" class="form-control-file col-md-3" name="img" id="img">
                        </div>         
                        <div class="col-md-12">
                            <button class="btn btn-danger add" onclick="" name="add">Add Product</button>
                        </div>
                    </form>
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
                            <span>SHOE</span>
                            <div>
                                <div class="text-foot ">
                                    <div>Men</div>
                                    <div>women</div>
                                    <div>Shoes</div>
                                    <div> Watches</div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-itemfooter ">
                            <span>HELP</span>
                            <div class="text-foot ">
                                <div>Track Order</div>
                                <div>Returns</div>
                                <div> Shipping</div>
                                <div> FAQs</div>
                            </div>
                        </div>
                        <div class="grid-itemfooter ">
                            <span>GET IN TOUCH</span>
                            <div class="text-foot ">
                                <p>Any questions? Let us know in store<br> at 8th floor, 379 Hudson St, New York,<br> NY 10018 or call us on (+1) 96 716 6879</p>
                                <div class="socials ">
                                    <a href="# " class="fa fa-facebook "></a>
                                    <a href="# " class="fa fa-twitter "></a>
                                    <a href="# " class="fa fa-google-plus "></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-itemfooter ">
                            <span>NEWSLETTER</span>
                            <div class="text-foot ">
                                <input class="input1 bg-none plh1 stext-107 cl7 " type="text " name="email " placeholder="email@example.com "><br><br>
                                <button type="button " class="btn btn-primary " style="margin-left:40px; ">Submit</button>
                            </div>
                        </div>
                    </div>
            </footer>
        </section>
        </div>
</body>