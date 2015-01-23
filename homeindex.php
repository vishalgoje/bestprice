<?php
include('sregister.php');
//include('slogin1.php'); // Includes Login Script
?>

<!DOCTYPE html>
<html class="no-js">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <title>Best Price - Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <script type="text/javascript">WebFontConfig={google:{families:['Open+Sans:400,700,400italic,700italic:latin,latin-ext,cyrillic','Pacifico::latin']}};(function(){var wf=document.createElement('script');wf.src=('https:'==document.location.protocol?'https':'http')+'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';wf.type='text/javascript';wf.async='true';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(wf,s);})();</script>

    <link href="A.stylesheets%2c%2c_bootstrap.css%2bstylesheets%2c%2c_responsive.css%2bjs%2c%2c_rs-plugin%2c%2c_css%2c%2c_settings.css%2bjs%2c%2c_jquery-ui-1.10.3%2c%2c_css%2c%2c_smoothness%2c%2c_jquery-ui-1.1" rel="stylesheet"/>
      

    <script src="js/modernizr.custom.56918.js.pagespeed.jm.uJEwd3FIaL.js"></script>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch/144.png.pagespeed.ce.HQhWeqIdDJ.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch/114.png.pagespeed.ce.3cV3NB-LbK.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch/72.png.pagespeed.ce.Yg3RzDogzO.png">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch/57.png.pagespeed.ce.nx1OijlsPq.png">
    <link rel="shortcut icon" href="images/apple-touch/57.png.pagespeed.ce.nx1OijlsPq.png">
  </head>

    <body class="">

    <div class="master-wrapper">
        <!--  ==========  -->
    <!--  = Header =  -->
    <!--  ==========  -->
    <header id="header">
        <div class="darker-row">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="higher-line">
                            Wellcome! Please
                            <a href="#registerModal" role="button" data-toggle="modal">Register   <span><?php echo $error; ?></span></a>  or
                            <a href="#loginModal" role="button" data-toggle="modal">Login   </a>
                        </div>
                    </div>
                    <div class="span8">
                        <div class="topmost-line">
                            <div class="higher-line">
                                <a href="my-account.html" class="gray-link">My account</a>
                                &nbsp; | &nbsp;
                                <a href="my-account.html" class="gray-link">Wishlist </a>
                                &nbsp; | &nbsp;
                                <a href="checkout-step-1.html" class="gray-link">Checkout</a>
                            </div>
                            &nbsp;
                            
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="span7">
                    <a class="brand" href="homeindex.php">
                        <img src="images/logo.png" alt="Best Price" width="48" height="48"/>
                        <span class="pacifico">Best Price</span>
                        <span class="tagline">We bring best things at best price.</span>
                    </a>
                </div>
                <div class="span5">
                    <div class="top-right">
                        <div class="icons">
                            <a href="http://www.facebook.com/g.vishalgoje"><span class="zocial-facebook"></span></a>
                            <a href="skype:vishalgoje?call"><span class="zocial-skype"></span></a>
                            <a href="https://twitter.com/vishalgoje"><span class="zocial-twitter"></span></a>
                            <a href="http://gojevishal.wordpress.com"><span class="zocial-wordpress"></span></a>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="navbar navbar-static-top" id="stickyNavbar">
      <div class="navbar-inner">
        <div class="container">
          <div class="row">
            <div class="span9">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <div class="nav-collapse collapse">
                  <ul class="nav" id="mainNavigation">
                    <li class="dropdown active">
                       <!--  <a href="index.html" class="dropdown-toggle">Offers<b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown active">
                                <a href="index.html"><i class="icon-caret-right pull-right visible-desktop"></i> Diwali Sale</a>
                                <ul class="dropdown-menu">
                                    <li class="active"><a href="index.html">Best Offer</a></li>
                                    <li><a href="index-grass-green.html">Gifts</a></li>
                                    <li><a href="index-oil-green.html"></a></li>
                                    <li><a href="index-gray.html"></a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="index-boxed-solid.html"><i class="icon-caret-right pull-right visible-desktop"></i> Boxed Version</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index-boxed-solid.html">Boxed - solid color background</a></li>
                                    <li><a href="index-boxed-pattern.html">Boxed - pattern background</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>

                    
                    <li class="dropdown dropdown-megamenu">
                        <a href="#" class="dropdown-toggle"> Electronics <b class="caret"></b> </a>
                        <ul class="dropdown-menu megamenu container"><!-- .col-2 for min-width:320px, .col-3 for min-width:480px -->
                            <li class="row"><!-- .megamenu--half for 2 cols, .megamenu--third for 3 cols -->
                                <div class="span1">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="mobile.html">Mobiles</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="mobile.html">Samsung</a></li>
                                        <li><a href="mobile.html">Nokia</a></li>
                                        <li><a href="mobile.html">Apple</a></li>
                                         <li><a href="mobile.html">Blackberry</a></li>
                                         <li><a href="mobile.html">Sony</a></li>
                                         <li><a href="mobile.html">Motorola</a></li>
                                    </ul>
                                  
                                </div>
                                <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                              <li><a href="tablet.html">Tablets</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="tablet.html">Apple</a></li>
                                        <li><a href="tablet.html">Nenus</a></li>
                                        <li><a href="tablet.html">Lenovo</a></li>
                                         <li><a href="tablet.html">ipad</a></li>
                                    </ul>
                                </div>
                                                                <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                       <li><a href="tv.html">Televisions</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="tv.html">24 inches/below</a></li>
                                        <li><a href="tv.html">32 inches</a></li>
                                        <li><a href="tv.html">39 inches & above</a></li>
                                        <li><a href="tv.html">VV Android Tv</a></li>
                                    </ul>
                                </div>
                                                                 <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="laptop.html">Laptops</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="laptop.html">Compaq</a></li>
                                        <li><a href="laptop.html">HP</a></li>
                                        <li><a href="laptop.html">Lenova</a></li>
                                        <li><a href="laptop.html">Dell</a></li>
                                    </ul>
                                </div>
                                 <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="laptop.html">Accessories</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="laptop.html">Pendrives</a></li>
                                        <li><a href="laptop.html">Printers</a></li>
                                        <li><a href="laptop.html">Data cards</a></li>
                                        <li><a href="laptop.html">Head phones</a></li>
                                    </ul>
                                </div>
                                <div class="span3">
                                    <a href="shop.html"><img src="images/dummy/menu/mobile.png" alt="woman in red" width="1040" height="670"></a>
                                    <h5><span class="light">Featured</span> Mobiles</h5>
                                    <p>
                                       Android One is fast &amp; light to use.It runs on latest version Android 4.4 Kitkat.
                                    </p>
                                </div>
                            </li>
                            <li class="row visible-desktop">
                                <div class="span12">
                                    <hr>
                                </div>
                            </li>
                            <li class="row visible-desktop">
                                <div class="span6">
                                    New arrivals in: &nbsp;
                                    <a href="#" class="btn btn-mini">Clothing</a>
                                    <a href="#" class="btn btn-mini">Shoes</a>
                                    <a href="#" class="btn btn-mini">Accessories</a>
                                    <a href="#" class="btn btn-mini btn-warning">Back in stock</a>
                                </div>
                                <div class="span6">
                                    <div class="pull-right sm-no-pull">
                                        Outlet / Sale: &nbsp;
                                        <a href="#" class="btn btn-mini btn-success">UP TO -70%</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                       <li class="dropdown dropdown-megamenu">
                        <a href="#" class="dropdown-toggle"> Clothing <b class="caret"></b> </a>
                        <ul class="dropdown-menu megamenu container"><!-- .col-2 for min-width:320px, .col-3 for min-width:480px -->
                            <li class="row"><!-- .megamenu--half for 2 cols, .megamenu--third for 3 cols -->
                                <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Men</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="#">T Shirts</a></li>
                                        <li><a href="#">Sports wear</a></li>
                                        <li><a href="#">Formals shirts</a></li>
                                        <li><a href="#">Formals pants</a></li>
                                    </ul>
                                </div>
                                                                <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Women</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="#">Sarees</a></li>
                                        <li><a href="#">Kuetas & Kurti</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Ethnic</a></li>

                                    </ul>
                                  
                                </div>  
                                <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Kids Wear</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="#">Jeans &amp; Tops</a></li>
                                        <li><a href="#">Infant wear</a></li>
                                        <li><a href="#">Toys &amp; Accessories</a></li>
                                        <li><a href="#">Diapers</a></li>
                                    </ul>
                                  
                                </div>
                                                                <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="shopc.html">All Accessories</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="shopc.html">watches</a></li>
                                        <li><a href="shopc.html">Sunglass</a></li>
                                        <li><a href="shopc.html">Jewellery</a></li>
                                        <li><a href="shopc.html">Footwear</a></li>
                                    </ul>
                                </div>
                                                                <div class="span3">
                                    <a href="shop.html"><img src="images/dummy/menu/clothing.jpg" alt="woman in red" width="540" height="270"></a>
                                    <h5><span class="light">Featured</span> Apparels</h5>
                                    <p>
                                        Minimum 30% OFF on ethnic wear.Shop now to cliam a Best price.
                                    </p>
                                </div>
                            </li>
                            <li class="row visible-desktop">
                                <div class="span12">
                                    <hr>
                                </div>
                            </li>
                            <li class="row visible-desktop">
                                <div class="span6">
                                    New arrivals in: &nbsp;
                                    <a href="#" class="btn btn-mini">Clothing</a>
                                    <a href="#" class="btn btn-mini">Shoes</a>
                                    <a href="#" class="btn btn-mini">Accessories</a>
                                    <a href="#" class="btn btn-mini btn-warning">Back in stock</a>
                                </div>
                                <div class="span6">
                                    <div class="pull-right sm-no-pull">
                                        Outlet / Sale: &nbsp;
                                        <a href="#" class="btn btn-mini btn-success">UP TO -70%</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                           <li class="dropdown dropdown-megamenu">
                        <a href="#" class="dropdown-toggle"> Books <b class="caret"></b> </a>
                        <ul class="dropdown-menu megamenu container"><!-- .col-2 for min-width:320px, .col-3 for min-width:480px -->
                            <li class="row"><!-- .megamenu--half for 2 cols, .megamenu--third for 3 cols -->
                           
                                                                <div class="span3">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Academic & Professional</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="#">Sciences</a></li>
                                        <li><a href="#">Medical</a></li>
                                        <li><a href="#">Engineering</a></li>
                                        <li><a href="#">Arts</a></li>
                                    </ul>
                                </div>
                                                                <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Stationary</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="#">Pens</a></li>
                                         <li><a href="#">Note Books</a></li>
                                        <li><a href="#">Calculators</a></li>
                                        <li><a href="#">Office Supplies</a></li>

                                    </ul>
                                </div>
                                                                <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">E-Books</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="#">News Releases</a></li>
                                        <li><a href="#">Literatures </a></li>
                                        <li><a href="#">Autobiograhpy</a></li>
                                        <li><a href="#">Comic</a></li>
                                    </ul>
                                </div>
                                                                         <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Entrance Exam</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="#">GATE</a></li>
                                        <li><a href="#">GAT</a></li>
                                        <li><a href="#">CAT</a></li>
                                        <li><a href="#">Civil Services</a></li>
                                    </ul>
                                    </div>
                                                                <div class="span3">
                                    <a href="shop.html"><img src="images/dummy/menu/books.jpg" alt="woman in red" width="540" height="270"></a>
                                    <h5><span class="light">Featured</span> Books</h5>
                                    <p>
                                        Grab featured novels and E-books at Best Price availing best discount prices on  New arrivals..
                                    </p>
                                </div>
                            </li>
                            <li class="row visible-desktop">
                                <div class="span12">
                                    <hr>
                                </div>
                            </li>
                            <li class="row visible-desktop">
                                <div class="span6">
                                    New arrivals in: &nbsp;
                                    <a href="#" class="btn btn-mini">Clothing</a>
                                    <a href="#" class="btn btn-mini">Shoes</a>
                                    <a href="#" class="btn btn-mini">Accessories</a>
                                    <a href="#" class="btn btn-mini btn-warning">Back in stock</a>
                                </div>
                                <div class="span6">
                                    <div class="pull-right sm-no-pull">
                                        Outlet / Sale: &nbsp;
                                        <a href="#" class="btn btn-mini btn-success">UP TO -70%</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                           <li class="dropdown dropdown-megamenu">
                        <a href="#" class="dropdown-toggle"> Food <b class="caret"></b> </a>
                        <ul class="dropdown-menu megamenu container"><!-- .col-2 for min-width:320px, .col-3 for min-width:480px -->
                            <li class="row"><!-- .megamenu--half for 2 cols, .megamenu--third for 3 cols -->
                                                                <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Canned &amp; InstantFood</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="#">Butter</a></li>
                                        <li><a href="#">Cheese</a></li>
                                        <li><a href="#">Soups</a></li>
                                        <li><a href="#">Canned Vegetables</a></li>
                                    </ul>
                               
                                </div>
                                                                <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Soft Drinks</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="#">Thumpsup</a></li>
                                        <li><a href="#">Cococola</a></li>
                                        <li><a href="#">Sprite</a></li>
                                        <li><a href="#">Energy Drinks</a></li>
                                    </ul>
                                </div>
                                                                <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Backed Goods</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="#">Cakes</a></li>
                                        <li><a href="#">Biscuts/Cookies</a></li>
                                        <li><a href="#">BreadCreembles</a></li>
                                        <li><a href="#">Waters</a></li>
                                    </ul>
                                </div>
                                                                   <div class="span2">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">DryFruits</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="#">Almonds</a></li>
                                        <li><a href="#">Pista</a></li>
                                        <li><a href="#">Cashem</a></li>
                                        <li><a href="#">others</a></li>
                                    </ul>
                                </div>
                                                                <div class="span3">
                                    <a href="shop.html"><img src="images/dummy/menu/food.jpg" alt="woman in red" width="540" height="270"></a>
                                    <h5><span class="light">Featured</span> Food</h5>
                                    <p>
                                        Freshly feel taste of flavoured milk with yummy fruit sqaush..
                                    </p>
                                </div>
                            </li>
                            <li class="row visible-desktop">
                                <div class="span12">
                                    <hr>
                                </div>
                            </li>
                            <li class="row visible-desktop">
                                <div class="span6">
                                    New arrivals in: &nbsp;
                                    <a href="#" class="btn btn-mini">Clothing</a>
                                    <a href="#" class="btn btn-mini">Shoes</a>
                                    <a href="#" class="btn btn-mini">Accessories</a>
                                    <a href="#" class="btn btn-mini btn-warning">Back in stock</a>
                                </div>
                                <div class="span6">
                                    <div class="pull-right sm-no-pull">
                                        Outlet / Sale: &nbsp;
                                        <a href="#" class="btn btn-mini btn-success">UP TO -70%</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>




                 
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>


                  <!--  ==========  -->
                  <!--  = Search form =  -->
                  <!--  ==========  -->
                  <form class="navbar-form pull-right" action="#" method="get">
                      <button type="submit"><span class="icon-search"></span></button>
                      <input type="text" class="span1" name="search" id="navSearchInput">
                  </form>
                </div><!-- /.nav-collapse -->
            </div>

            <!--  ==========  -->
            <!--  = Cart =  -->
            <!--  ==========  -->
            <div class="span3">
                <div class="cart-container" id="cartContainer">
                    <div class="cart">
                        <p class="items">CART <span class="dark-clr"></span></p>
                        <p class="dark-clr hidden-tablet"></p>
                        <a href="checkout-step-1.html" class="btn btn-danger">
                            <!-- <span class="icon icons-cart"></span> -->
                            <i class="icon-shopping-cart"></i>
                        </a>
                    </div>
                    <div class="open-panel">
                                              <div class="item-in-cart clearfix">
                          <!--     <div class="image">
                                <img src="images/dummy/cart-items/124x124xcart-item-1.jpg.pagespeed.ic.MOH6pViKb3.jpg" width="124" height="124" alt="cart item"/>
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">Sit Consectetur Vel Nisi Eros Amet</a></strong>
                                <span class="light-clr qty">
                                    Qty: 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>₹ 3264</strong>
                            </div>
                        </div>
                                                <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="images/dummy/cart-items/124x124xcart-item-2.jpg.pagespeed.ic.pWDTtNZ7M8.jpg" width="124" height="124" alt="cart item"/>
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">Ipsum Consectetur Adipiscing Ac Metus</a></strong>
                                <span class="light-clr qty">
                                    Qty: 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>₹ 5922</strong>
                            </div>
                        </div>
                                                <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="images/dummy/cart-items/124x124xcart-item-3.jpg.pagespeed.ic.SxHNASdP7z.jpg" width="124" height="124" alt="cart item"/>
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">Vivamus Tincidunt Est Condimentum</a></strong>
                                <span class="light-clr qty">
                                    Qty: 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>₹ 3865</strong>
                            </div>
                        </div>
                                                <div class="summary">
                            <div class="line">
                                <div class="row-fluid">
                                    <div class="span6">Shipping:</div>
                                    <div class="span6 align-right">₹ 4.99</div>
                                </div>
                            </div>
                            <div class="line">
                                <div class="row-fluid">
                                    <div class="span6">Subtotal:</div>
                                    <div class="span6 align-right size-16">₹ 357.81</div>
                                </div>
                            </div> -->
                        </div>
                        <div class="proceed">
                            <a href="checkout-step-1.html" class="btn btn-danger pull-right bold higher">CHECKOUT <i class="icon-shopping-cart"></i></a>
                            <small>Shipping costs are calculated based on location. <a href="#">More information</a></small>
                        </div>
                    </div>
                </div>
            </div> <!-- /cart -->
          </div>
        </div>
      </div>
    </div> <!-- /main menu -->

    
    
<!--  ==========  -->
    <!--  = Slider Revolution =  -->
    <!--  ==========  -->
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>

                 <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/5/wow.jpg" alt="slider img" width="1400" height="377"/>

                    <!-- baloons -->
                    <div class="caption lft ltt" data-x="570" data-y="50" data-speed="4000" data-start="1000" data-easing="easeOutElastic">
                        <img src="images/dummy/slides/5/2.gif" alt="baloon" width="135" height="186"/>
                    </div>

                    <div class="caption lft ltt" data-x="770" data-y="60" data-speed="4000" data-start="1200" data-easing="easeOutElastic">
                        <img src="images/dummy/slides/5/2.gif" alt="baloon" width="40" height="55"/>
                    </div>

                    <div class="caption lft ltt" data-x="1250" data-y="80" data-speed="4000" data-start="1500" data-easing="easeOutElastic">
                        <img src="images/dummy/slides/5/2.gif" alt="baloon" width="60" height="83"/>
                    </div>

                    <!-- texts -->
                    <div class="caption lfl big_theme" data-x="120" data-y="120" data-speed="1000" data-start="500" data-easing="easeInOutBack">
                        OMG...
                    </div>

                    <div class="caption lfl small_theme" data-x="120" data-y="190" data-speed="1000" data-start="700" data-easing="easeInOutBack">
                    Top Discounts Place    
                    </div>

                    <a href="#" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="260" data-speed="1000" data-start="900" data-easing="easeInOutBack">
                        
                    </a>
                </li><!-- /slide -->

                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/6/w.jpg" alt="slider img" width="1400" height="377"/>

                    <!-- phone -->
                    <div class="caption lft ltt" data-x="970" data-y="50" data-speed="4000" data-start="1000" data-easing="easeOutElastic">
                        <img src="images/dummy/slides/6/3.gif" alt="baloon" width="135" height="186"/>
                    </div>

                    <!-- texts -->
                    <div class="caption lfl big_theme" data-x="120" data-y="120" data-speed="1000" data-start="500" data-easing="easeInOutBack">
                      Offers
                    </div>

                    <div class="caption lfl small_theme" data-x="120" data-y="190" data-speed="1000" data-start="700" data-easing="easeInOutBack">
                      Limited Collections
                    </div>

                    <!-- <a href="#" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="260" data-speed="1000" data-start="900" data-easing="easeInOutBack">
                    
                    </a> -->
                </li><!-- /slide -->


                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/1/slide.jpg.pagespeed.ce.r-PVKaMylg.jpg" alt="slider img" width="1400" height="377"/>

                    <!-- baloons -->
                    <div class="caption lft ltt" data-x="570" data-y="50" data-speed="4000" data-start="1000" data-easing="easeOutElastic">
                        <img src="images/dummy/slides/1/baloon1.png.pagespeed.ce.L7q7sfZEL8.png" alt="baloon" width="135" height="186"/>
                    </div>

                    <div class="caption lft ltt" data-x="770" data-y="60" data-speed="4000" data-start="1200" data-easing="easeOutElastic">
                        <img src="images/dummy/slides/1/baloon3.png.pagespeed.ce.cAr5bF6HxS.png" alt="baloon" width="40" height="55"/>
                    </div>

                    <div class="caption lft ltt" data-x="870" data-y="80" data-speed="4000" data-start="1500" data-easing="easeOutElastic">
                        <img src="images/dummy/slides/1/baloon2.png.pagespeed.ce.n-ztXRj3O3.png" alt="baloon" width="60" height="83"/>
                    </div>

                    <!-- texts -->
                    <div class="caption lfl big_theme" data-x="120" data-y="120" data-speed="1000" data-start="500" data-easing="easeInOutBack">
                        With Best-Price, the Sky Is the Limit
                    </div>

                    <div class="caption lfl small_theme" data-x="120" data-y="190" data-speed="1000" data-start="700" data-easing="easeInOutBack">
                        Take a tour on Best-Price
                    </div>

                    <a href="features.html" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="260" data-speed="1000" data-start="900" data-easing="easeInOutBack">
                        Select & buy at Best Price
                    </a>
                </li><!-- /slide -->

                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/2/slide.jpg.pagespeed.ce.qBNU_WHcYY.jpg" alt="slider img" width="1400" height="377"/>

                    <!-- woman -->
                    <div class="caption lfb ltb" data-x="800" data-y="50" data-speed="1000" data-start="1000" data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/2/1.gif" alt="woman" width="361" height="374"/>
                    </div>

                    <!-- plane -->
                    <div class="caption lfl str" data-x="400" data-y="20" data-speed="10000" data-start="1000" data-easing="linear">
                        <img src="images/dummy/slides/2/plane.png.pagespeed.ce.XbeZR8kXcb.png" alt="aircraft" width="117" height="28"/>
                    </div>

                    <!-- texts -->
                    <div class="caption lfl big_theme" data-x="120" data-y="120" data-speed="1000" data-start="500" data-easing="easeInOutBack">
                        Online Shopping 
                    </div>

                    <div class="caption lfl small_theme" data-x="120" data-y="190" data-speed="1000" data-start="700" data-easing="easeInOutBack">
                        60% OFF on Clothing
                    </div>

                    <a href="features.html" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="260" data-speed="1000" data-start="900" data-easing="easeInOutBack">
                        AND MANY MORE ...
                    </a>
                </li><!-- /slide -->

                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/3/1400x377xslide.jpg.pagespeed.ic.rwZ76EqIlK.jpg" alt="slider img" width="1400" height="377"/>

                    <!-- phone -->
                    <div class="caption sfr fadeout" data-x="950" data-y="77" data-speed="1000" data-start="2500" data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/3/phone.png.pagespeed.ce.OPKJF548_z.png" alt="phone in a hand" width="495" height="377"/>
                    </div>

                    <!-- texts -->
                    <div class="caption lfl big_theme" data-x="120" data-y="120" data-speed="1000" data-start="500" data-easing="easeInOutBack">
                        We Are Mobile Ready
                    </div>

                    <div class="caption lfl small_theme" data-x="120" data-y="190" data-speed="1000" data-start="700" data-easing="easeInOutBack">
                        Try in Mobile browser . The Best-Price will look awesome no matter the device screen resolution!
                    </div>

                    <a href="icons.html" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="260" data-speed="1000" data-start="900" data-easing="easeInOutBack">
                        And also all the Products are ready with Quality..
                    </a>
                </li><!-- /slide -->

                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/4/1400x377xslide.jpg.pagespeed.ic.eNdqNVEEwm.jpg" alt="slider img" width="1400" height="377"/>

                    <!-- faces -->
                    <div class="caption lft ltt" data-x="-150" data-y="0" data-speed="300" data-start="2000" data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person1.png.pagespeed.ce.36hNkusut9.png" alt="satisfied customer" width="108" height="204"/>
                    </div>
                    <div class="caption lft ltt" data-x="0" data-y="0" data-speed="300" data-start="2200" data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person2.png.pagespeed.ce.iduAq1ZopR.png" alt="satisfied customer" width="108" height="321"/>
                    </div>
                    <div class="caption lft ltt" data-x="500" data-y="0" data-speed="300" data-start="2400" data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person3.png.pagespeed.ce.pNKbQhby6D.png" alt="satisfied customer" width="108" height="139"/>
                    </div>
                    <div class="caption lft ltt" data-x="720" data-y="0" data-speed="300" data-start="2600" data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person4.png.pagespeed.ce.KWDhhyT9Wi.png" alt="satisfied customer" width="108" height="191"/>
                    </div>
                    <div class="caption lft ltt" data-x="940" data-y="0" data-speed="300" data-start="2800" data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person5.png.pagespeed.ce.2pH14Kf-IF.png" alt="satisfied customer" width="108" height="139"/>
                    </div>
                    <div class="caption lft ltt" data-x="1200" data-y="0" data-speed="300" data-start="3000" data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person6.png.pagespeed.ce.9baH-UgT9N.png" alt="satisfied customer" width="108" height="179"/>
                    </div>
                    <div class="caption lft ltt" data-x="1350" data-y="0" data-speed="300" data-start="3200" data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person7.png.pagespeed.ce.uM5Od-IcKr.png" alt="satisfied customer" width="108" height="133"/>
                    </div>

                    <!-- texts -->
                    <div class="caption lfl big_theme" data-x="120" data-y="140" data-speed="1000" data-start="500" data-easing="easeInOutBack">
                        Over 1000 Satisfied Customers
                    </div>

                    <div class="caption lfl small_theme" data-x="120" data-y="210" data-speed="1000" data-start="700" data-easing="easeInOutBack">
                        Take a look at our profile page on the <a href="http://themeforest.net/user/ProteusThemes" target="_blank">BestPrice</a>!
                    </div>

                    <a href="http://proteusthemes.ticksy.com/" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="280" data-speed="1000" data-start="900" data-easing="easeInOutBack">
                        We provide Best products at best price
                    </a>
                </li><!-- /slide -->

                  



            </ul>
            <div class="tp-bannertimer"></div>
        </div>
        <!--  ==========  -->
        <!--  = Nav Arrows =  -->
        <!--  ==========  -->
        <div id="sliderRevLeft"><i class="icon-chevron-left"></i></div>
        <div id="sliderRevRight"><i class="icon-chevron-right"></i></div>
    </div> <!-- /slider revolution -->

    <!--  ==========  -->
    <!--  = Main container =  -->
    <!--  ==========  -->
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="push-up over-slider blocks-spacer">

                    <!--  ==========  -->
                    <!--  = Three Banners =  -->
                    <!--  ==========  -->
                    <div class="row">
                        <div class="span4">
                            <a href="#" class="btn btn-block banner">
                                <span class="title"><span class="light">DIWALI</span> SALE</span>
                                <em>up to 60% off on all shoes</em>
                            </a>
                        </div>
                        <div class="span4">
                            <a href="#" class="btn btn-block colored banner">
                                <span class="title"><span class="light">FREE</span> SHIPPING</span>
                                <em>on orders over ₹ 1000</em>
                            </a>
                        </div>
                        <div class="span4">
                            <a href="#" class="btn btn-block banner">
                                <span class="title"><span class="light">NEW</span> ARRIVALS</span>
                                <em>for buying Best-Price products</em>
                            </a>
                        </div>
                    </div> <!-- /three banners -->
                </div>
            </div>
        </div>

        <!--  ==========  -->
        <!--  = Featured Items =  -->
        <!--  ==========  -->
        <div class="row featured-items blocks-spacer">
            <div class="span12">

                <!--  ==========  -->
                <!--  = Title =  -->
                <!--  ==========  -->
            	<div class="main-titles lined">
            	    <h2 class="title"><span class="light">Featured</span> Products</h2>
            	    <div class="arrows">
                        <a href="#" class="icon-chevron-left" id="featuredItemsLeft"></a>
                        <a href="#" class="icon-chevron-right" id="featuredItemsRight"></a>
                    </div>
            	</div>
            </div>

            <div class="span12">
                <!--  ==========  -->
                <!--  = Carousel =  -->
                <!--  ==========  -->
                <div class="carouFredSel" data-autoplay="false" data-nav="featuredItems">
                    <div class="slide">
                        <div class="row">
                    	                    	
                    	
    	            	<!--  ==========  -->
    					<!--  = Product =  -->
    					<!--  ==========  -->
    	            	<div class="span4">
    	            	    <div class="product">
    	            	        <div class="product-img featured">
    	            	            <div class="picture">
    	            	        	    <a href="product.html"><img src="images/dummy/featured-products/featured-1.png.pagespeed.ce.55OgM7PB0d.png" alt="" width="518" height="358"/></a>
    	            	        		<div class="img-overlay">

                                     <form method="post" action="sproduct.php">
    	            	        		    
                                             <button type="submit" name="submit" value="images/dummy/featured-products/featured-1.png.pagespeed.ce.55OgM7PB0d.png" class="btn more btn-primary">
                                             More
                                             </button>
                                             <input type="number" name="rs" value="1116">
    	            	        		    <a href="#" class="btn buy btn-danger">Buy</a>
                                    
                                    </form>
    	            	        		</div>
    	            	            </div>
    	            	        </div>
    	            	        <div class="main-titles">
    	            	            <h4 class="title">₹ 1116</h4>
    	            	            <h5 class="no-margin"><a href="product.html">Productcode 752</a></h5>
    	            	        </div>
    	            	        <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
    	            	    </div>
                	      </div> <!-- /product -->
    	            	                    	
                    	
    	            	<!--  ==========  -->
    					<!--  = Product =  -->
    					<!--  ==========  -->
    	            	<div class="span4">
    	            	    <div class="product">
    	            	        <div class="product-img featured">
    	            	            <div class="picture">
                                     <form method="post" action="">
    	            	        	    <a href="product.html"><img src="images/dummy/featured-products/featured-2.png.pagespeed.ce.bhpeQnpEiJ.png" alt="" width="518" height="358"/></a>
    	            	        		<div class="img-overlay">
    	            	        		 <button type="button"  class="btn more btn-primary">More</button> 
                                            
    	            	        		    <a href="#" class="btn buy btn-danger">Buy</a>
    	            	        		</div>
                                    </form>
    	            	            </div>
    	            	        </div>
    	            	        <div class="main-titles">
    	            	            <h4 class="title">₹ 117</h4>
    	            	            <h5 class="no-margin"><a href="product.html">Productcode 763</a></h5>
    	            	        </div>
    	            	        <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
    	            	    </div>
                	      </div> <!-- /product -->
    	            	                    	
                    	
    	            	<!--  ==========  -->
    					<!--  = Product =  -->
    					<!--  ==========  -->
    	            	<div class="span4">
    	            	    <div class="product">
    	            	        <div class="product-img featured">
    	            	            <div class="picture">
    	            	        	    <a href="product.html"><img src="images/dummy/featured-products/featured-3.png.pagespeed.ce.GxdBosiqGe.png" alt="" width="518" height="358"/></a>
    	            	        		<div class="img-overlay">
    	            	        		    <a href="product.html" class="btn more btn-primary">More</a>
    	            	        		    <a href="#" class="btn buy btn-danger">Buy</a>
    	            	        		</div>
    	            	            </div>
    	            	        </div>
    	            	        <div class="main-titles">
    	            	            <h4 class="title">₹ 51</h4>
    	            	            <h5 class="no-margin"><a href="product.html">Productcode 244</a></h5>
    	            	        </div>
    	            	        <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
    	            	    </div>
                	      </div> <!-- /product -->
    	            	                    	
                    	            	        </div>
            	    </div>
            	    <div class="slide">
            	        <div class="row">
                    	
    	            	<!--  ==========  -->
    					<!--  = Product =  -->
    					<!--  ==========  -->
    	            	<div class="span4">
    	            	    <div class="product">
    	            	        <div class="product-img featured">
    	            	            <div class="picture">
    	            	        	    <a href="product.html"><img src="images/dummy/featured-products/featured-1.png.pagespeed.ce.55OgM7PB0d.png" alt="" width="518" height="358"/></a>
    	            	        		<div class="img-overlay">
    	            	        		    <a href="product.html" class="btn more btn-primary">More</a>
    	            	        		    <a href="#" class="btn buy btn-danger">Buy</a>
    	            	        		</div>
    	            	            </div>
    	            	        </div>
    	            	        <div class="main-titles">
    	            	            <h4 class="title">₹ 117</h4>
    	            	            <h5 class="no-margin"><a href="product.html">Productcode 409</a></h5>
    	            	        </div>
    	            	        <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
    	            	    </div>
                	      </div> <!-- /product -->
    	            	                    	
                    	
    	            	<!--  ==========  -->
    					<!--  = Product =  -->
    					<!--  ==========  -->
    	            	<div class="span4">
    	            	    <div class="product">
    	            	        <div class="product-img featured">
    	            	            <div class="picture">
    	            	        	    <a href="product.html"><img src="images/dummy/featured-products/featured-2.png.pagespeed.ce.bhpeQnpEiJ.png" alt="" width="518" height="358"/></a>
    	            	        		<div class="img-overlay">
    	            	        		    <a href="product.html" class="btn more btn-primary">More</a>
    	            	        		    <a href="#" class="btn buy btn-danger">Buy</a>
    	            	        		</div>
    	            	            </div>
    	            	        </div>
    	            	        <div class="main-titles">
    	            	            <h4 class="title">₹ 119</h4>
    	            	            <h5 class="no-margin"><a href="product.html">Productcode 398</a></h5>
    	            	        </div>
    	            	        <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
    	            	    </div>
                	      </div> <!-- /product -->
    	            	                    	
                    	
    	            	<!--  ==========  -->
    					<!--  = Product =  -->
    					<!--  ==========  -->
    	            	<div class="span4">
    	            	    <div class="product">
    	            	        <div class="product-img featured">
    	            	            <div class="picture">
    	            	        	    <a href="product.html"><img src="images/dummy/featured-products/featured-3.png.pagespeed.ce.GxdBosiqGe.png" alt="" width="518" height="358"/></a>
    	            	        		<div class="img-overlay">
    	            	        		    <a href="product.html" class="btn more btn-primary">More</a>
    	            	        		    <a href="#" class="btn buy btn-danger">Buy</a>
    	            	        		</div>
    	            	            </div>
    	            	        </div>
    	            	        <div class="main-titles">
    	            	            <h4 class="title">₹ 105</h4>
    	            	            <h5 class="no-margin"><a href="product.html">Productcode 766</a></h5>
    	            	        </div>
    	            	        <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
    	            	    </div>
                	      </div> <!-- /product -->
    	            	    	            	</div>
                	</div>
                </div> <!-- /carousel -->
            </div>

        </div>
    </div> <!-- /container -->

    <!--  ==========  -->
    <!--  = New Products =  -->
    <!--  ==========  -->
    <div class="boxed-area blocks-spacer">
        <div class="container">

            <!--  ==========  -->
            <!--  = Title =  -->
            <!--  ==========  -->
            <div class="row">
                <div class="span12">
                    <div class="main-titles lined">
                    	<h2 class="title"><span class="light">New</span> Products in the Shop</h2>
                    </div>
                </div>
            </div> <!-- /title -->

            <div class="row popup-products blocks-spacer">
                                                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
            	<div class="span3">
                    <div class="product">
            	       <div class="product-inner">
                	        <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/products/product-6.jpg.pagespeed.ce.XI0HBrK_zM.jpg" alt="" width="540" height="374"/></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">₹ 32</h4>
                                <h5 class="no-margin">Productcode 143</h5>
                            </div>
                            <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
                            <div class="row-fluid hidden-line">
                                <div class="span6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="span6 align-right">
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                                                    </div>
                            </div>
                            </div>
            	    </div>
            	</div> <!-- /product -->

            	            	                                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
            	<div class="span3">
                    <div class="product">
            	       <div class="product-inner">
                	        <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/products/product-7.jpg.pagespeed.ce.HyGb3bENJ7.jpg" alt="" width="540" height="374"/></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">₹ 32</h4>
                                <h5 class="no-margin">Productcode 287</h5>
                            </div>
                            <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
                            <div class="row-fluid hidden-line">
                                <div class="span6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="span6 align-right">
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                                                    </div>
                            </div>
                            </div>
            	    </div>
            	</div> <!-- /product -->

            	            	                                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
            	<div class="span3">
                    <div class="product">
            	       <div class="product-inner">
                	        <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/products/product-8.jpg.pagespeed.ce.1vv0RltX3O.jpg" alt="" width="540" height="374"/></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">₹ 32</h4>
                                <h5 class="no-margin">Productcode 306</h5>
                            </div>
                            <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
                            <div class="row-fluid hidden-line">
                                <div class="span6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="span6 align-right">
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                                                    </div>
                            </div>
                            </div>
            	    </div>
            	</div> <!-- /product -->

            	            	                                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
            	<div class="span3">
                    <div class="product">
            	       <div class="product-inner">
                	        <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/products/product-9.jpg.pagespeed.ce.pgB4xkmiXd.jpg" alt="" width="540" height="374"/></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">₹ 32</h4>
                                <h5 class="no-margin">Productcode 438</h5>
                            </div>
                            <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
                            <div class="row-fluid hidden-line">
                                <div class="span6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="span6 align-right">
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                                                    </div>
                            </div>
                            </div>
            	    </div>
            	</div> <!-- /product -->

            	<div class="clearfix"></div>            	                                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
            	<div class="span3">
                    <div class="product">
            	       <div class="product-inner">
                	        <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/products/product-10.jpg.pagespeed.ce.I4zh8RM_A8.jpg" alt="" width="540" height="374"/></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">₹ 32</h4>
                                <h5 class="no-margin">Productcode 231</h5>
                            </div>
                            <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
                            <div class="row-fluid hidden-line">
                                <div class="span6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="span6 align-right">
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                                                    </div>
                            </div>
                            </div>
            	    </div>
            	</div> <!-- /product -->

            	            	                                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
            	<div class="span3">
                    <div class="product">
            	       <div class="product-inner">
                	        <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/products/product-11.jpg.pagespeed.ce.dhG92Aw57l.jpg" alt="" width="540" height="374"/></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">₹ 32</h4>
                                <h5 class="no-margin">Productcode 94</h5>
                            </div>
                            <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
                            <div class="row-fluid hidden-line">
                                <div class="span6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="span6 align-right">
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star"></span>
                                                                    </div>
                            </div>
                            </div>
            	    </div>
            	</div> <!-- /product -->

            	            	                                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
            	<div class="span3">
                    <div class="product">
            	       <div class="product-inner">
                	        <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/products/product-12.jpg.pagespeed.ce.v5dCplkcke.jpg" alt="" width="540" height="374"/></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">₹ 32</h4>
                                <h5 class="no-margin">Productcode 285</h5>
                            </div>
                            <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
                            <div class="row-fluid hidden-line">
                                <div class="span6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="span6 align-right">
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                                                    </div>
                            </div>
                            </div>
            	    </div>
            	</div> <!-- /product -->

            	            	                                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
            	<div class="span3">
                    <div class="product">
            	       <div class="product-inner">
                	        <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/products/product-13.jpg.pagespeed.ce.n4S9S9r0y1.jpg" alt="" width="540" height="374"/></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">₹ 32</h4>
                                <h5 class="no-margin">Productcode 261</h5>
                            </div>
                            <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
                            <div class="row-fluid hidden-line">
                                <div class="span6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="span6 align-right">
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                </div>
                            </div>
                            </div>
            	    </div>
            	</div> <!-- /product -->

            	            	            </div>
        </div>
    </div> <!-- /new products -->

    <!--  ==========  -->
    <!--  = Most Popular products =  -->
    <!--  ==========  -->
    <div class="most-popular blocks-spacer">
    	<div class="container">

    	    <!--  ==========  -->
			<!--  = Title =  -->
			<!--  ==========  -->
    	    <div class="row">
    	    	<div class="span12">
    	    	    <div class="main-titles lined">
    	                <h2 class="title"><span class="light">Most</span> Popular Products</h2>
    	            </div>
    	    	</div>
    	    </div> <!-- /title -->

	    	<div class="row popup-products">
	    	    	    	    
		        <!--  ==========  -->
				<!--  = Product =  -->
				<!--  ==========  -->
                <div class="span3">
                    <div class="product">
                        <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/most-popular-products/popular-1.jpg.pagespeed.ce.oZ75GsaBt3.jpg" alt="" width="540" height="412"/></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">₹ 32</h4>
                                <h5 class="no-margin">Productcode 202</h5>
                            </div>
                            <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
                            <div class="row-fluid hidden-line">
                                <div class="span6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="span6 align-right">
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star"></span>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /product -->
                	    	    
		        <!--  ==========  -->
				<!--  = Product =  -->
				<!--  ==========  -->
                <div class="span3">
                    <div class="product">
                        <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/most-popular-products/popular-2.jpg.pagespeed.ce.U8hMsHwY8o.jpg" alt="" width="540" height="412"/></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">₹ 32</h4>
                                <h5 class="no-margin">Productcode 409</h5>
                            </div>
                            <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
                            <div class="row-fluid hidden-line">
                                <div class="span6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="span6 align-right">
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /product -->
                	    	    
		        <!--  ==========  -->
				<!--  = Product =  -->
				<!--  ==========  -->
                <div class="span3">
                    <div class="product">
                        <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/most-popular-products/popular-3.jpg.pagespeed.ce.u-SY_Zktae.jpg" alt="" width="540" height="412"/></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">₹ 32</h4>
                                <h5 class="no-margin">Productcode 462</h5>
                            </div>
                            <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
                            <div class="row-fluid hidden-line">
                                <div class="span6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="span6 align-right">
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /product -->
                	    	    
		        <!--  ==========  -->
				<!--  = Product =  -->
				<!--  ==========  -->
                <div class="span3">
                    <div class="product">
                        <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/most-popular-products/popular-4.jpg.pagespeed.ce.-IcA20B0J5.jpg" alt="" width="540" height="412"/></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">₹ 32</h4>
                                <h5 class="no-margin">Productcode 406</h5>
                            </div>
                            <p class="desc">Diwali Dhamaka offer 52% Off Mobiles and Clothing on the Best Price</p>
                            <div class="row-fluid hidden-line">
                                <div class="span6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="span6 align-right">
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star stars-clr"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /product -->
                    	    </div>
    	</div>
    </div> <!-- /most popular -->

    <!--  ==========  -->
    <!--  = Lastest News =  -->
    <!--  ==========  -->
    <div class="darker-stripe blocks-spacer more-space latest-news with-shadows">
    	<div class="container">

    	    <!--  ==========  -->
			<!--  = Title =  -->
			<!--  ==========  -->
    		<div class="row">
    			<div class="span12">
    			    <div class="main-titles center-align">
    			        <h2 class="title">
    			            <span class="clickable icon-chevron-left" id="tweetsLeft"></span> &nbsp;&nbsp;&nbsp;
    			            <span class="light">Recently</span> Viewed &nbsp;&nbsp;&nbsp;
    			            <span class="clickable icon-chevron-right" id="tweetsRight"></span>
			            </h2>
    			    </div>
    			</div>
    		</div> <!-- /title -->

    		<!--  ==========  -->
			<!--  = News content =  -->
			<!--  ==========  -->
    		<div class="row">
    		    <div class="span12">
    		        <div class="carouFredSel" data-nav="tweets" data-autoplay="false">
    		            
		                <!--  ==========  -->
						<!--  = Slide =  -->
						<!--  ==========  -->
                        <div class="slide">
                        	<div class="row">
                        		<div class="span3">
                        		 
                        		      
                        		        <h4 class="centered"><a href="#">Moto G</a></h4>
                        		        <p><img src="images/product/2.gif" width="100" height="170"></p>
                        		    
                        		</div>

                                <div class="span3">
                                 
                                      
                                        <h4 class="centered"><a href="#">Moto G</a></h4>
                                        <p><img src="images/product/2.gif" width="100" height="170"></p>
                                    
                                </div>
                                <div class="span3">
                                 
                                      
                                        <h4 class="centered"><a href="#">Moto G</a></h4>
                                        <p><img src="images/product/2.gif" width="100" height="170"></p>
                                    
                                </div>

                                <div class="span3">
                                 
                                      
                                        <h4 class="centered"><a href="#">Moto G</a></h4>
                                        <p><img src="images/product/2.gif" width="100" height="170"></p>
                                    
                                </div>

                        	</div>
                        </div> <!-- /slide -->
                        
                                                <!--  ==========  -->
                        <!--  = Slide =  -->
                        <!--  ==========  -->
                        <div class="slide">
                            <div class="row">
                                <div class="span3">
                                 
                                      
                                        <h4 class="centered"><a href="#">Moto G</a></h4>
                                        <p><img src="images/product/2.gif" width="100" height="170"></p>
                                    
                                </div>

                                <div class="span3">
                                 
                                      
                                        <h4 class="centered"><a href="#">Moto G</a></h4>
                                        <p><img src="images/product/2.gif" width="100" height="170"></p>
                                    
                                </div>
                                <div class="span3">
                                 
                                      
                                        <h4 class="centered"><a href="#">Moto G</a></h4>
                                        <p><img src="images/product/2.gif" width="100" height="170"></p>
                                    
                                </div>

                                <div class="span3">
                                 
                                      
                                        <h4 class="centered"><a href="#">Moto G</a></h4>
                                        <p><img src="images/product/2.gif" width="100" height="170"></p>
                                    
                                </div>

                            </div>
                        </div> <!-- /slide -->
                        
                                                <!--  ==========  -->
                        <!--  = Slide =  -->
                        <!--  ==========  -->
                        <div class="slide">
                            <div class="row">
                                <div class="span3">
                                 
                                      
                                        <h4 class="centered"><a href="#">Moto G</a></h4>
                                        <p><img src="images/product/2.gif" width="100" height="170"></p>
                                    
                                </div>

                                <div class="span3">
                                 
                                      
                                        <h4 class="centered"><a href="#">Moto G</a></h4>
                                        <p><img src="images/product/2.gif" width="100" height="170"></p>
                                    
                                </div>
                                <div class="span3">
                                 
                                      
                                        <h4 class="centered"><a href="#">Moto G</a></h4>
                                        <p><img src="images/product/2.gif" width="100" height="170"></p>
                                    
                                </div>

                                <div class="span3">
                                 
                                      
                                        <h4 class="centered"><a href="#">Moto G</a></h4>
                                        <p><img src="images/product/2.gif" width="100" height="170"></p>
                                    
                                </div>

                            </div>
                        </div> <!-- /slide -->
                        
                                            </div>
    		    </div>
    		</div> <!-- /news content -->
    	</div>
    </div> <!-- /latest news -->

    <!--  ==========  -->
    <!--  = Brands Carousel =  -->
    <!--  ==========  -->
	<div class="container blocks-spacer-last">

		<!--  ==========  -->
		<!--  = Title =  -->
		<!--  ==========  -->
		<div class="row">
		    <div class="span12">
		    	<div class="main-titles lined">
	                <h2 class="title"><span class="light">Our</span> Brands</h2>
                    <div class="arrows">
                        <a href="#" class="icon-chevron-left" id="brandsLeft"></a>
                        <a href="#" class="icon-chevron-right" id="brandsRight"></a>
                    </div>
	            </div>
		    </div>
		</div> <!-- /title -->

		<!--  ==========  -->
		<!--  = Logos =  -->
		<!--  ==========  -->
		<div class="row">
		    <div class="span12">
		    	<div class="brands carouFredSel" data-nav="brands" data-autoplay="true">
                    <img src="images/logo/1.gif" alt="" width="100" height="104"/>
                    <img src="images/logo/2.gif" alt="" width="203" height="104"/>
                    <img src="images/logo/3.gif" alt="" width="203" height="104"/>
                    <img src="images/logo/4.gif" alt="" width="203" height="104"/>
                    <img src="images/logo/5.gif" alt="" width="203" height="104"/>
                    <img src="images/logo/6.gif" alt="" width="203" height="104"/>
                    <img src="images/logo/7.gif" alt="" width="203" height="104"/>
                </div>
		    </div>
		</div> <!-- /logos -->
	</div> <!-- /brands carousel -->

    
     <!--  ==========  -->
    <!--  = Footer =  -->
    <!--  ==========  -->
    <footer>

        <!--  ==========  -->
        <!--  = Upper footer =  -->
        <!--  ==========  -->
        <div class="foot-light">
            <div class="container">
                <div class="row">
                    
                    <div class="span4">
                        <div class="main-titles ">
                          <a href="#"> <h3 class="title">Facebook</h3></a>
                        </div>
                        <div class="main-titles ">
                            <a href="#"><h3 class="title">Twitter</h3></a>
                        </div>
                        <div class="main-titles">
                           <a href="#"> <h3 class="title">GooglePlus</h3></a>
                        </div>
                        
                    </div>
                    <div class="span4">
                        <div class="main-titles ">
                        <a href="#"><h3 class="title">Track Your Order</h3></a>
                        </div>
                        <div class="main-titles ">
                        <a href="#"><h3 class="title">Free &amp; Easy Returns</h3></a>
                        </div>
                        <div class="main-titles ">
                        <a href="#"><h3 class="title">Online Cancellations</h3></a>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="main-titles lined">
                            <h3 class="title"><span class="light">Newsletters</span> Signup</h3>
                        </div>
                        <p>Sign up for our occasional newsletter and get news and updates delivered to your inbox.</p>
                        
                        <div id="mc_embed_signup">
                        <form action="http://proteusthemes.us4.list-manage1.com/subscribe/post?u=ea0786485977f5ec8c9283d5c&amp;id=5dad3f35e9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form form-inline" target="_blank" novalidate>
                            <div class="mc-field-group">
                                <input type="email" value="" placeholder="Enter your e-mail address" name="EMAIL" class="required email" id="mce-EMAIL">
                                <input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>

                        </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                </div>
            </div>
        </div> 

        <!--  ==========  -->
        <!--  = Middle footer =  -->
        <!--  ==========  -->
        <div class="foot-dark">
            <div class="container">
                <div class="row">

                    <!--  ==========  -->
                    <!--  = Menu 1 =  -->
                    <!--  ==========  -->
                    <div class="span3">
                        <div class="main-titles lined">
                        <h3 class="title"><span class="light"></span> Best Price</h3>
                    
                        </div>
                        <ul class="nav bold">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Electronics</a></li>
                            <li><a href="about-us.html">Clothing</a></li>
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>

                    <!--  ==========  -->
                    <!--  = Menu 2 =  -->
                    <!--  ==========  -->
                    <div class="span3">
                        <div class="main-titles lined">
                            <h3 class="title"><span class="light"></span> Help</h3>
                        </div>
                        <ul class="nav">
                            <li><a href="#">Payments</a></li>
                            <li><a href="#">Saved Cards</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Cancellation & Returns</a></li>
                            <li><a href="#">FAQ's</a></li>
                        </ul>
                    </div>

                    <!--  ==========  -->
                    <!--  = Menu 3 =  -->
                    <!--  ==========  -->
                    <div class="span3">
                        <div class="main-titles lined">
                            <h3 class="title"><span class="light"></span> MISC</h3>
                        </div>
                        <ul class="nav">
                            <li><a href="#">Online shopping</a></li>
                            <li><a href="#">e-Gift vouvhers</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Best Price Subscription</a></li>
                            
                        </ul>
                    </div>

                    <!--  ==========  -->
                    <!--  = Menu 4 =  -->
                    <!--  ==========  -->
                    <div class="span3">
                        <div class="main-titles lined">
                            <h3 class="title"><span class="light"></span> Policy Info</h3>
                        </div>
                        <ul class="nav">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Terms of sale</a></li>
                            <li><a href="#">Copyright Policy</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /middle footer -->

        <!--  ==========  -->
        <!--  = Bottom Footer =  -->
        <!--  ==========  -->
        <div class="foot-last">
            <a href="#" id="toTheTop">
                <span class="icon-chevron-up"></span>
            </a>
            <div class="container">
                <div class="row">
                    <div class="span6">
                        &copy; Copyright 2014. <a href="index.html"># BESTPRICE</a>.
                    </div>
                    <div class="span6">
                        <div class="pull-right">Best-Price by <a href="http://www.proteusthemes.com/">MSIT 2013-15</a></div>
                    </div>
                </div>
            </div>
        </div> <!-- /bottom footer -->
    </footer> <!-- /footer -->


    <!--  ==========  -->
    <!--  = Modal Windows =  -->
    <!--  ==========  -->

    <!--  = Login =  -->
    <div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            <h3 id="loginModalLabel"><span class="light">Login</span> To BestPrice</h3>
        </div>
        <div class="modal-body">

            <form method="post" action="slogin1.php">
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputEmail">Username</label>
                    <div class="controls">
                        <input type="text" name="username" value="" class="input-block-level" placeholder="Username" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputPassword">Password</label>
                    <div class="controls">
                        <input type="password" name="password" value="" class="input-block-level" placeholder="Password" required>

                   
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox">
                            Remember me
                        </label>
                    </div>
                </div>
                <button type="submit" name="submit" type="submit" value="submit" class="btn btn-primary input-block-level bold higher">
                    SIGN IN
                </button>
                 
            </form>
            <p class="center-align push-down-0">
                <a data-toggle="modal" role="button" href="#forgotPassModal" data-dismiss="modal">Forgot your password?</a>
            </p>
        </div>
    </div>

    <!--  = Register =  -->
    <div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="registerModalLabel"><span class="light">Register</span> To BestPrice</h3>
        </div>
        <div class="modal-body">


            <form method="post" action="">
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputUsernameRegister">Username</label>

                
                    <div class="controls">
                        <input type="text" name="username" value="" class="input-block-level"  placeholder="Username" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputEmailRegister">Email</label>
                    <div class="controls">
                        <input type="email" name="email" value="" class="input-block-level"  placeholder="Email" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputPasswordRegister">Password</label>
                    <div class="controls">
                        <input type="password" name="password" value="" class="input-block-level" placeholder="Password" required>
                    </div>
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-danger input-block-level bold higher">
                    REGISTER
                </button>
                <span><?php echo $error; ?></span>
            </form>
            <p class="center-align push-down-0">
                <a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">Already Registered?</a>
            </p>

        </div>
    </div>

    <!--  = Forgot your password =  -->
    <div id="forgotPassModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="forgotPassModalLabel"><span class="light">Forgot</span> your password?</h3>
        </div>
        <div class="modal-body">
            <form method="post" action="#">
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputUsernameRegister">Username</label>
                    <div class="controls">
                        <input type="text" class="input-block-level" id="inputUsernameRegister" placeholder="Username">
                    </div>
                </div>
                <p class="center-align">OR</p>
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputEmailRegister">Email</label>
                    <div class="controls">
                        <input type="email" class="input-block-level" id="inputEmailRegister" placeholder="Email">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary input-block-level bold higher">
                    SEND ME A NEW PASSWORD
                </button>
            </form>
        </div>
    </div>

        </div> <!-- end of master-wrapper -->



    <!--  ==========  -->
    <!--  = JavaScript =  -->
    <!--  ==========  -->

    <!--  = FB =  -->

    <div id="fb-root"></div>
    <script>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="../../../connect.facebook.net/en_US/all.js#xfbml=1&appId=126780447403102";fjs.parentNode.insertBefore(js,fjs);}(document,'script','facebook-jssdk'));</script>


    <!--  = jQuery - CDN with local fallback =  -->
    <script type="text/javascript" src="../../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">if(typeof jQuery=='undefined'){document.write('<script src="js/jquery.min.js"><\/script>');}</script>

    <!--  = _ =  -->
    <script src="js/underscore/underscore-min.js.pagespeed.jm.ItwX38EOq5.js" type="text/javascript"></script>

    <!--  = Bootstrap =  -->
    <script src="js/bootstrap.min.js.pagespeed.jm.-umip9MeSa.js" type="text/javascript"></script>

    <!--  = Slider Revolution =  -->
    <script src="js/rs-plugin/js/jquery.themepunch.plugins.min.js.pagespeed.jm.i8jLJExTHJ.js" type="text/javascript"></script>
    <script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

    <!--  = CarouFredSel =  -->
    <script src="js/jquery.carouFredSel-6.2.1-packed.js%2cMjm.qEAY8y8mxq.js%2bjquery-ui-1.10.3%2c_js%2c_jquery-ui-1.10.3.custom.min.js%2cMjm.G_xvTfnttR.js%2bjquery-ui-1.10.3%2c_touch"></script><script>eval(mod_pagespeed_WmL98DfP1Y);</script>

    <!--  = jQuery UI =  -->
    <script>eval(mod_pagespeed_e5SxFXHy1W);</script>
    <script>eval(mod_pagespeed_0WTRZBnbCV);</script>

    <!--  = Isotope =  -->
    <scr= Tour =  -->
    <script src="js/bootstrap-tour%2c_build%2c_js%2c_bootstrap-tour.min.js%2cMjm.0uuuvYuBmK.js%2bprettyphoto%2c_js%2c_jquery.prettyPhoto.js%2cMjm.yI-YDtvTMT.js%2bgoMap%2c_js%2c_jquery.gomap-"></script><script>eval(mod_pagespeed_x9pWpl7o9N);</script>

    <!--  = PrettyPhoto =  -->
    <script>eval(mod_pagespeed_Q8mZc6qNW5);</script>

    <!--  = Google Maps API =  -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDvMjN1g49P1MA2Onsj-GulDkmDuuH6aoU&amp;sensor=false"></script>
    <script>eval(mod_pagespeed_aZ7AhjP8SR);</script>

    <!--  = Custom JS =  -->
    <script src="js/custom.js.pagespeed.jm.rYRw-5fzBq.js" type="text/javascript"></script>

  </body>

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Oct 2014 12:52:33 GMT -->
</html>ipt src="js/isotope/jquery.isotope.min.js.pagespeed.jm.z0B8alLj_3.js" type="text/javascript"></script>

    <!--  