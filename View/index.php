<!DOCTYPE html>

<html>

<head>
    <title>Projecct</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icon-short.png" type="images/png" />
    <link href="../Css/carouseller.css" rel="stylesheet" type="text/css" />
    <link href="../Css/style.css" rel="stylesheet" type="text/css" />
    <link href="../fonts.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../js/carouseller.min.js" type="text/javascript"></script>
    <script src="../js/jquery.easing.1.3.js" type="text/javascript"></script>

</head>

<body>

    <header>
        <!--Phan Header -->
        <section class="container">
            <div id="header-top">
                <span><img src="../images/phone.png" />0986 - 208 - 514</span>
                <span> <img src="../images/email.png" /> nghiapham1998000@gmail.com</span>
            </div>

            <div id="header-bottom">
                <section id="header-left">
                    <img src="../images/logo.png" />
                </section>
                <section id="header-right">
                    <section id="hearder-link">
                        <a href="#" id="cart-link"><img src="../images/cart.png" alt="" /></a>
                        <a href="../Login/Login.php" id="login-link">Đăng Nhập</a>
                        <a href="../Register/register.php" id="register-link"><img src="../images/register.png" alt="" /></a>
                     
                    </section>
                </section>
                <section class="clear-both"></section>
            </div>
        </section>

        <!--Phan Header -->


        <!--Menu -->
        <section id="menu">
            <section class="container">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="#">Chúng tôi</a></li>
                    <li><a href="#">Liên hệ</a></li>
                    <li class="clear-both"> </li>
                </ul>
                <form id="product-search" action="#" method="GET">
                    <input type="submit" value="" />
                    <input type="text" name="text-search" placeholder="Tìm kiếm" />
                </form>
            </section>
        </section>
        <!--Menu -->
    </header>

    <!-- Carousel -->
    <section id="product-slide" class="carouseller">
        <a href="javascript:void(0)" class="carouseller__left"><
        </a>
        <div class="carouseller__wrap">
            <div class="carouseller__list">
                <div class="car__12">
                    <section class="background-slide" style="background: #EA2027"></section>
                    <section class="wrap-slide">
                        <section class="silde-left">
                            <section class="product-name">
                                <span>WILL</span>
                                <span>Helm</span>
                                <span class="last-span">Winter</span>
                                <section class="clear-both"></section>
                            </section>
                            <span class="wrap-button">
                                <span class="left-buy-button"></span>
                                <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                                <span class="right-buy-button"></span>
                                <section class="clear-both"></section>
                            </span>
                        </section>
                        <section class="silde-right">
                            <img src="../images/shoes-2.png" alt="alt" />
                        </section>
                    </section>
                </div>

                <div class="car__12">
                    <section class="background-slide" style="background: #ED4C67"></section>
                    <section class="wrap-slide">
                        <section class="silde-left">
                            <section class="product-name">
                                <span>WILL</span>
                                <span>Helm</span>
                                <span class="last-span">Winter</span>
                                <section class="clear-both"></section>
                            </section>
                            <span class="wrap-button">
                                <span class="left-buy-button"></span>
                                <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                                <span class="right-buy-button"></span>
                                <section class="clear-both"></section>
                            </span>
                        </section>
                        <section class="silde-right">
                            <img src="../images/shoes-1.png" alt="alt" />
                        </section>
                    </section>
                </div>

                <div class="car__12">
                    <section class="background-slide" style="background: #C4E538"></section>
                    <section class="wrap-slide">
                        <section class="silde-left">
                            <section class="product-name">
                                <span>WILL</span>
                                <span>Helm</span>
                                <span class="last-span">Winter</span>
                                <section class="clear-both"></section>
                            </section>
                            <span class="wrap-button">
                                <span class="left-buy-button"></span>
                                <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                                <span class="right-buy-button"></span>
                                <section class="clear-both"></section>
                            </span>
                        </section>
                        <section class="silde-right">
                            <img src="../images/shoes-4.png" alt="alt" height="800px" ; width="600px" ; />
                        </section>
                    </section>
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" class=" carouseller__right">></a>
    </section>
    <!-- Carousel -->

    <!--Category -->
    <section id="hot-categories">
        <section class="container">
            <section class="wrap-categories">
                <section class="category">
                    <h3>Nữ</h3>
                    <section class="category-image">
                        <img src="../images/woman.jpg" alt="" />
                    </section>
                    <section class="total-product">Total</section>
                    <section class="number-product">357 Sãn phẩm</section>
                    <img src="../images/product-list-icon.png" alt="" />
                </section>
                <section class="category center-block">
                    <h3>Nam</h3>
                    <section class="category-image">
                        <img src="../images/men.jpg" alt="" />
                    </section>
                    <section class="total-product">Total</section>
                    <section class="number-product">357 Sãn phẩm</section>
                    <img src="../images/product-list-icon.png" alt="" />
                </section>
                <section class="category">
                    <h3>Trẻ em</h3>
                    <section class="category-image">
                        <img src="../images/kids.jpg" alt="" />
                    </section>
                    <section class="total-product">Total</section>
                    <section class="number-product">357 Sãn phẩm</section>
                    <img src="../images/product-list-icon.png" alt="" />
                </section>
                <section class="clear-both"></section>

            </section>

        </section>

    </section>
    <!--Category -->

    <!--Product item -->
    <section id="hot-product">
        <section class="container">
            <section class="heading-title">
                <h2>Sản phẩm<span>hot</span></h2>
                <a href="#"> <img src="../images/arrow.png" alt="" />Xem tất cả</a>
                <section class="clear-both"></section>
            </section>

            <section class="box-content">
                <?php for($i = 1 ; $i < 10 ; $i++){ ?>
                <section class="product-item first-line">
                    <section class="brand-icon"><img src="../images/nike-icon.png" /></section>
                    <section class="product-image"><img src="../images/shoes-item.jpg" alt="alt" /></section>
                    <section class="product-name">Giay bóng đá Nike</section>
                    <span class="wrap-button">
                        <span class="left-buy-button"></span>
                        <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                        <span class="right-buy-button"></span>
                        <section class="clear-both"></section>
                    </span>
                </section>
                <?php  } ?>



                <section class="clear-both"></section>
            </section>
        </section>
    </section>

    <footer>
        <section class="container">
            <section id="footer-logo">
                <img src="../images/footer-logo.png" alt="" />
            </section>
            <section id="footer-link">
                <ul>
                    <li><a href="#" />Chúng tôi </li>
                    <li><a href="#" /> Hỏi đáp </li>
                    <li><a href="#" /> Diều khoản sử dụng</li>
                    <li><a href="#" /> Thanh toán bảo mật</li>
                    <li><a href="#" /> Giao hàng</li>
                    <li><a href="#" /> Liên hệ</li>
                </ul>
            </section>
            <section id="socical-network-link">
                <a href="#"><img src="../images/pinterest.png" alt="" /></a>
                <a href="#"><img src="../images/facebook.png" alt="" /></a>
                <a href="#"><img src="../images/twitter.png" alt="" /></a>
            </section>

        </section>
    </footer>
</body>
<script type="text/javascript">
$(function() {
    $("#product-slide").carouseller();
});
</script>

</html>