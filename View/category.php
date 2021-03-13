<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Bài 3: Hướng dẫn cắt giao diện website bán giày</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../carouseller.css">
        <link rel="stylesheet" type="text/css" href="../fonts.css">
        <link rel="stylesheet" type="text/css" href="../Css/style.css">
        <link href="../Css/category.css" rel="stylesheet" type="text/css"/>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="../js/carouseller.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
    </head>
    <body>
        <header>
           
            <section class="container">
                <div id="header-top">
                    <span><img src="../images/phone.png" />090 - 223 44 66</span>
                    <span><img src="../images/email.png" />help@trendd.com</span>
                </div>
                <div id="header-bottom">
                    <section id="header-left">
                        <img src="../images/logo.png" />
                    </section>
                    <section id="header-right">
                        <section id="header-link">
                            <a id="cart-link" href="#"><img src="../images/cart.png" /></a>
                            <a id="login-link" href="#">Đăng nhập</a>
                            <a id="register-link" href="#"><img src="../images/register.png" /></a>
                        </section>
                    </section>
                    <section class="clear-both"></section>
                </div>
            </section>
            <section id="menu">
                <section class="container">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                        <li><a href="#">Chúng tôi</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li class="clear-both"></li>
                    </ul>
                    <form id="product-search" action="#" method="GET">
                        <input type="submit" value="">
                        <input type="text" name="text_search" placeholder="Tìm kiếm" />
                    </form>
                </section>
            </section>
        </header>
        <section id="product-filter">
            <section class="container">
                <label>Filter</label>
                <section id="brand-filter" class="filter-column">
                    <h2>Brands</h2>
                    <section id="brand-list">
                        <ul>
                            <li><a href="#">Adidas</a></li>
                            <li><a href="#">Nike</a></li>
                            <li><a href="#">Camper</a></li>
                            <li><a href="#">Superga</a></li>
                            <li><a href="#">Tımberland</a></li>
                            <li><a href="#">New balance</a></li>
                            <li><a href="#">Converse</a></li>
                            <li><a href="#">Puma</a></li>
                            <li><a href="#">Tiger</a></li>
                            <li><a href="#">Lacoste</a></li>
                            <li><a href="#">Reebok</a></li>
                            <li><a href="#">Cat</a></li>
                            <li><a href="#">Dockers</a></li>
                            <li class="clear-both"></li>
                        </ul>
                    </section>
                </section>
                <section id="category-statistic" class="filter-column">
                    <section class="category">
                        <h3>Nữ</h3>
                        <section class="category-image">
                            <img src="../images/woman.jpg" />
                        </section>
                        <section class="total-product">Tổng</section>
                        <section class="number-product">357 sản phẩm</section>
                        <img src="../images/product-list-icon.png" />
                    </section>
                    <section class="category center-block">
                        <h3>Nam</h3>
                        <section class="category-image">
                            <img src="../images/men.jpg" />
                        </section>
                        <section class="total-product">Tổng</section>
                        <section class="number-product">125 sản phẩm</section>
                        <img src="../images/product-list-icon.png" />
                    </section>
                    <section class="category">
                        <h3>Trẻ em</h3>
                        <section class="category-image">
                            <img src="../images/kids.jpg" />
                        </section>
                        <section class="total-product">Tổng</section>
                        <section class="number-product">251 sản phẩm</section>
                        <img src="../images/product-list-icon.png" />
                    </section>
                    <section class="clear-both"></section>
                </section>
                <section id="property-filter" class="filter-column">
                    <img src="../images/property-filter.jpg" />
                </section>
                <section class="clear-both"></section>
            </section>
        </section>
         <section id="hot-product">
            <section class="container">
                <section class="heading-title">
                    <h2>SPECIAL<span>PRODUCTS</span></h2>
                    <a href="#"> <img src="../images/arrow.png" alt=""/>View all Product</a>
                    <section class="clear-both"></section>
                </section>

                <section class="box-content">
                    <section class="product-item first-line">
                        <section class="brand-icon"><img src="../images/nike-icon.png"/></section>
                        <section class="product-image"><img src="../images/shoes-item.jpg" alt="alt"/></section>
                        <section class="product-name">Giay bóng đá Nike</section>
                        <span class="wrap-button">
                            <span class="left-buy-button"></span>
                            <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                            <span class="right-buy-button"></span>
                            <section class="clear-both"></section>
                        </span>
                    </section>

                    <section class="product-item">
                        <section class="brand-icon"><img src="../images/new-balance-icon.png"/></section>
                        <section class="product-image"><img src="../images/shoes-item-2.jpg" alt="alt"/></section>
                        <section class="product-name">Giay bóng đá Nike</section>
                        <span class="wrap-button">
                            <span class="left-buy-button"></span>
                            <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                            <span class="right-buy-button"></span>
                            <section class="clear-both"></section>
                        </span>
                    </section>

                    <section class="product-item">
                        <section class="brand-icon"><img src="../images/camper-icon.png"/></section>
                        <section class="product-image"><img src="../images/shoes-item-3.jpg" alt="alt"/></section>
                        <section class="product-name">Giay bóng đá Nike</section>
                        <span class="wrap-button">
                            <span class="left-buy-button"></span>
                            <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                            <span class="right-buy-button"></span>
                            <section class="clear-both"></section>
                        </span>
                    </section>

                    <section class="product-item">
                        <section class="brand-icon"><img src="../images/nike-icon.png"/></section>
                        <section class="product-image"><img src="../images/shoes-item.jpg" alt="alt"/></section>
                        <section class="product-name">Giay bóng đá Nike</section>
                        <span class="wrap-button">
                            <span class="left-buy-button"></span>
                            <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                            <span class="right-buy-button"></span>
                            <section class="clear-both"></section>
                        </span>
                    </section>

                    <section class="product-item">
                        <section class="brand-icon"><img src="../images/nike-icon.png"/></section>
                        <section class="product-image"><img src="../images/shoes-item-2.jpg" alt="alt"/></section>
                        <section class="product-name">Giay bóng đá Nike</section>
                        <span class="wrap-button">
                            <span class="left-buy-button"></span>
                            <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                            <span class="right-buy-button"></span>
                            <section class="clear-both"></section>
                        </span>
                    </section>

                    <section class="product-item">
                        <section class="brand-icon"><img src="../images/nike-icon.png"/></section>
                        <section class="product-image"><img src="../images/shoes-item-3.jpg" alt="alt"/></section>
                        <section class="product-name">Giay bóng đá Nike</section>
                        <span class="wrap-button">
                            <span class="left-buy-button"></span>
                            <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                            <span class="right-buy-button"></span>
                            <section class="clear-both"></section>
                        </span>
                    </section>

                    <section class="product-item">
                        <section class="brand-icon"><img src="../images/nike-icon.png"/></section>
                        <section class="product-image"><img src="../images/shoes-item.jpg" alt="alt"/></section>
                        <section class="product-name">Giay bóng đá Nike</section>
                        <span class="wrap-button">
                            <span class="left-buy-button"></span>
                            <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                            <span class="right-buy-button"></span>
                            <section class="clear-both"></section>
                        </span>
                    </section>

                    <section class="product-item ">
                        <section class="brand-icon"><img src="../images/nike-icon.png"/></section>
                        <section class="product-image"><img src="../images/shoes-item-2.jpg" alt="alt"/></section>
                        <section class="product-name">Giay bóng đá Nike</section>
                        <span class="wrap-button">
                            <span class="left-buy-button"></span>
                            <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                            <span class="right-buy-button"></span>
                            <section class="clear-both"></section>
                        </span>
                    </section>

                    <section class="product-item ">
                        <section class="brand-icon"><img src="../images/nike-icon.png"/></section>
                        <section class="product-image"><img src="../images/shoes-item-3.jpg" alt="alt"/></section>
                        <section class="product-name">Giay bóng đá Nike</section>
                        <span class="wrap-button">
                            <span class="left-buy-button"></span>
                            <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                            <span class="right-buy-button"></span>
                            <section class="clear-both"></section>
                        </span>
                    </section>

                    <section class="product-item ">
                        <section class="brand-icon"><img src="../images/nike-icon.png"/></section>
                        <section class="product-image"><img src="../images/shoes-item.jpg" alt="alt"/></section>
                        <section class="product-name">Giay bóng đá Nike</section>
                        <span class="wrap-button">
                            <span class="left-buy-button"></span>
                            <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                            <span class="right-buy-button"></span>
                            <section class="clear-both"></section>
                        </span>
                    </section>

                    <section class="product-item ">
                        <section class="brand-icon"><img src="../images/nike-icon.png"/></section>
                        <section class="product-image"><img src="../images/shoes-item-2.jpg" alt="alt"/></section>
                        <section class="product-name">Giay bóng đá Nike</section>
                        <span class="wrap-button">
                            <span class="left-buy-button"></span>
                            <span class="content-buy-button"><a href="#">1.500.000 đ | Mua ngay</a></span>
                            <span class="right-buy-button"></span>
                            <section class="clear-both"></section>
                        </span>
                    </section>


                    <section class="clear-both"></section>
                </section>
            </section>
        </section>
        <footer>
            <section class="container">
                <section id="footer-logo">
                    <img src="../images/footer-logo.png" />
                </section>
                <section id="footer-link">
                    <ul>
                        <li><a href="#">Chúng tôi</a></li>
                        <li><a href="#">Hỏi đáp</a></li>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                        <li><a href="#">Thanh toán bảo mật</a></li>
                        <li><a href="#">Giao hàng</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </section>
                <section id="social-network-link">
                    <a href="#"><img src="../images/pinterest.png" /></a>
                    <a href="#"><img src="../images/twitter.png" /></a>
                    <a href="#"><img src="../images/facebook.png" /></a>
                </section>
                <section class="clear-both"></section>
            </section>
        </footer>
        <script type="text/javascript">
            $(function () {
                $('#product-slide').carouseller();
            });
        </script>
    </body>
</html>
