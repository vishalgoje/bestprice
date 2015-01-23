<?php
include('session.php');
?>

<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  

<head>
    <meta charset="utf-8">
    <title>Best Price</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusThemes">

    <!--  = Google Fonts =  -->
    <script type="text/javascript">WebFontConfig={google:{families:['Open+Sans:400,700,400italic,700italic:latin,latin-ext,cyrillic','Pacifico::latin']}};(function(){var wf=document.createElement('script');wf.src=('https:'==document.location.protocol?'https':'http')+'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';wf.type='text/javascript';wf.async='true';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(wf,s);})();</script>

    <!-- Twitter Bootstrap -->
    <link href="A.stylesheets%2c%2c_bootstrap.css%2bstylesheets%2c%2c_responsive.css%2bjs%2c%2c_rs-plugin%2c%2c_css%2c%2c_settings.css%2bjs%2c%2c_jquery-ui-1.10.3%2c%2c_css%2c%2c_smoothness%2c%2c_jquery-ui-1.1" rel="stylesheet"/>
    
    <!-- Slider Revolution -->
    
    <!-- jQuery UI -->
    
    <!-- PrettyPhoto -->
    
    <!-- main styles -->
        
    

    <!-- Modernizr -->
    <script src="js/modernizr.custom.56918.js.pagespeed.jm.uJEwd3FIaL.js"></script>

    <!-- Fav and touch icons -->
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
                         <a href="#registerModal" role="button" data-toggle="modal"> <?php echo $login_session; ?></a> | <?php echo $email; ?>|
                            <a href="logout.php" role="button" >Logout</a>
                        </div>
                    </div>
                    <div class="span8">
                        <div class="topmost-line">
                            <div class="higher-line">
                                <a href="my-account.html" class="gray-link">My account</a>
                                &nbsp; | &nbsp;

                          
                                <a href="my-account.html" class="gray-link">Wishlist </a>
                                &nbsp; | &nbsp;
                            <form method="post" action="scheckout-step-1.php">
                                   <button type="submit" name="submit" value=<?php echo $email; ?> class="gray-link"><i class="gray-link">Checkout</i></button>
                                </form>
                            </div>
                            &nbsp;
                           
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!--  ==========  -->
                <!--  = Logo =  -->
                <!--  ==========  -->
                <div class="span7">
                    <a class="brand" href="ruindex.php">
                        <img src="images/logo.png" alt="Webmarket Logo" width="48" height="48"/>
                        <span class="pacifico">Best Price</span>
                        <span class="tagline">We bring best things at best price .</span>
                    </a>
                </div>

                <!--  ==========  -->
                <!--  = Social Icons =  -->
                <!--  ==========  -->
                <div class="span5">
                    <div class="top-right">
                        <div class="icons">
                            <a href="http://www.facebook.com/ProteusNet"><span class="zocial-facebook"></span></a>
                            <a href="skype:primozcigler?call"><span class="zocial-skype"></span></a>
                            <a href="https://twitter.com/proteusnetcom"><span class="zocial-twitter"></span></a>
                            <a href="http://eepurl.com/xFPYD"><span class="zocial-rss"></span></a>
                            <a href="#"><span class="zocial-wordpress"></span></a>
                            <a href="#"><span class="zocial-android"></span></a>
                            <a href="#"><span class="zocial-html5"></span></a>
                            <a href="#"><span class="zocial-windows"></span></a>
                            <a href="#"><span class="zocial-apple"></span></a>
                        </div>
                    </div>
                </div> <!-- /social icons -->
            </div>
        </div>
    </header>

    <!--  ==========  -->
    <!--  = Main Menu / navbar =  -->
    <!--  ==========  -->
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

                <!--  ==========  -->
                <!--  = Menu =  -->
                <!--  ==========  -->
                <div class="nav-collapse collapse">
                  <ul class="nav" id="mainNavigation">
                     <li class="dropdown dropdown-megamenu">
                        <a href="#" class="dropdown-toggle"> Electronics <b class="caret"></b> </a>
                        <ul class="dropdown-menu megamenu container"><!-- .col-2 for min-width:320px, .col-3 for min-width:480px -->
                            <li class="row"><!-- .megamenu--half for 2 cols, .megamenu--third for 3 cols -->
                                <div class="span1">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="shopcMobiles.php">Mobiles</a></li>
                                    </ul>
                                    <ul class="nav unstyled">
                                        <li><a href="shopcMobiles.php">Samsung</a></li>
                                        <li><a href="shopcMobiles.php">Nokia</a></li>
                                        <li><a href="shopcMobiles.php">Apple</a></li>
                                         <li><a href="shopcMobiles.php">Blackberry</a></li>
                                         <li><a href="shopcMobiles.php">Sony</a></li>
                                         <li><a href="shopcMobiles.php">Motorola</a></li>
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
                                        <li><a href="sshopc.php">All Accessories</a></li>
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
                      <form method="post" action="scheckout-step-1.php" >
                    <div class="cart">
                        <p class="items">CART <span class="dark-clr">(2)</span></p>
                        <p class="dark-clr hidden-tablet"> ₹ <?php echo $sum; ?></p>
                        <a href="#" class="btn btn-danger">
                            <!-- <span class="icon icons-cart"></span> -->
                            <i class="icon-shopping-cart"></i>
                        </a>
                    </div>
                    <div class="open-panel">
                                                <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="images/dummy/cart-items/124x124xcart-item-1.jpg.pagespeed.ic.MOH6pViKb3.jpg" width="124" height="124" alt="cart item"/>
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">Lorem Vivamus Ac Est Metus Ut</a></strong>
                                <span class="light-clr qty">
                                    Qty: 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>₹ 133</strong>
                            </div>
                        </div>
                                                <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="images/dummy/cart-items/124x124xcart-item-2.jpg.pagespeed.ic.pWDTtNZ7M8.jpg" width="124" height="124" alt="cart item"/>
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">Dolor Vivamus Vel Felis Amet</a></strong>
                                <span class="light-clr qty">
                                    Qty: 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>₹ 2907</strong>
                            </div>
                        </div>
                                                <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="images/dummy/cart-items/124x124xcart-item-3.jpg.pagespeed.ic.SxHNASdP7z.jpg" width="124" height="124" alt="cart item"/>
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">Dolor Felis Feugiat</a></strong>
                                <span class="light-clr qty">
                                    Qty: 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>₹ 6651</strong>
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
                                    <div class="span6 align-right size-16">₹ <?php echo $sum; ?> </div>
                                </div>
                            </div>
                        </div>
                        <div class="proceed">
                           <button type="submit" name="submit" value=<?php echo $email; ?> class="btn btn-danger pull-right bold higher"><i class="icon-shopping-cart"></i> &nbsp; CHECKOUT</button>
                            <small>Shipping costs are calculated based on location. <a href="#">More information</a></small>
                        </div>
                    </div>
                </div>
            </form>
            </div> <!-- /cart -->
          </div>
        </div>
      </div>
    </div> <!-- /main menu -->

    
    

    <!--  ==========  -->
    <!--  = Breadcrumbs =  -->
    <!--  ==========  -->
    <div class="darker-stripe">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Best Price</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="shop.html">Shop</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="shop.html">Grid View</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="push-up blocks-spacer">
            <div class="row">

                <!--  ==========  -->
                <!--  = Sidebar =  -->
                <!--  ==========  -->
                <aside class="span3 left-sidebar" id="tourStep1">
                    <div class="sidebar-item sidebar-filters" id="sidebarFilters">

                        <!--  ==========  -->
                        <!--  = Sidebar Title =  -->
                        <!--  ==========  -->
                        <div class="underlined">
                        	<h3><span class="light">Shop</span> by filters</h3>
                        </div>

                        <!--  ==========  -->
                        <!--  = Categories =  -->
                        <!--  ==========  -->
                        <div class="accordion-group" id="tourStep2">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" href="#filterOne">Categories <b class="caret"></b></a>
                            </div>
                            <div id="filterOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <a href="#" data-target=".filter--accessories" class="selectable"><i class="box"></i> Accessories</a>
<a href="#" data-target=".filter--bags, .filter--hats" class="selectable"><i class="box"></i> Ladies hand bags</a>
<a href="#" data-target=".filter--shorts" class="selectable"><i class="box"></i> T-Shorts</a>
<a href="#" data-target=".filter--polo-shirts" class="selectable"><i class="box"></i> Belts</a>
<a href="#" data-target=".filter--shirts" class="selectable"><i class="box"></i> Dresses</a>
<a href="#" data-target=".filter--shoes, .filter--boots, .filter--trainers" class="selectable"><i class="box"></i> Watches</a>

<a href="#" data-target=".filter--suits, .filter--blazers" class="selectable"><i class="box"></i> Caps</a>
<a href="#" data-target=".filter--trousers, .filter--chinos" class="selectable"><i class="box"></i> Shirts, Trousers &amp; Jeans</a>
<a href="#" data-target=".filter--t-shirts, .filter--vests" class="selectable"><i class="box"></i> Laptop bags &amp; Wallets </a>
<a href="#" data-target=".filter--bags" class="selectable"><i class="box"></i> Bags</a>
<a href="#" data-target=".filter--underwear, .filter--socks" class="selectable"><i class="box"></i> Shoes  </a>
                                </div>
                            </div>
                        </div> <!-- /categories -->

                        <!--  ==========  -->
                        <!--  = Prices slider =  -->
                        <!--  ==========  -->
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" href="#filterPrices">Price <b class="caret"></b></a>
                            </div>
                            <div id="filterPrices" class="accordion-body in collapse">
                                <div class="accordion-inner with-slider">
                                    <div class="jqueryui-slider-container">
                                        <div id="pricesRange"></div>
                                    </div>
                                    <input type="text" data-initial="432" class="max-val pull-right" disabled />
                                    <input type="text" data-initial="99" class="min-val" disabled />
                                </div>
                            </div>
                        </div> <!-- /prices slider -->

                        <!--  ==========  -->
                        <!--  = Size filter =  -->
                        <!--  ==========  -->
                        <div class="accordion-group" id="tourStep3">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterTwo">Size <b class="caret"></b></a>
                            </div>
                            <div id="filterTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <a href="#" data-target="xs" data-type="size" class="selectable detailed"><i class="box"></i> XS</a>
<a href="#" data-target="s" data-type="size" class="selectable detailed"><i class="box"></i> S</a>
<a href="#" data-target="m" data-type="size" class="selectable detailed"><i class="box"></i> M</a>
<a href="#" data-target="l" data-type="size" class="selectable detailed"><i class="box"></i> L</a>
<a href="#" data-target="xl" data-type="size" class="selectable detailed"><i class="box"></i> XL</a>
<a href="#" data-target="xxl" data-type="size" class="selectable detailed"><i class="box"></i> XXL</a>
                                </div>
                            </div>
                        </div> <!-- /size filter -->

                        <!--  ==========  -->
                        <!--  = Color filter =  -->
                        <!--  ==========  -->
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterThree">Color <b class="caret"></b></a>
                            </div>
                            <div id="filterThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <a href="#" data-target="red" data-type="color" class="selectable detailed"><i class="box"></i> Red</a>
<a href="#" data-target="green" data-type="color" class="selectable detailed"><i class="box"></i> Green</a>
<a href="#" data-target="blue" data-type="color" class="selectable detailed"><i class="box"></i> Blue</a>
<a href="#" data-target="pink" data-type="color" class="selectable detailed"><i class="box"></i> Pink</a>
<a href="#" data-target="purple" data-type="color" class="selectable detailed"><i class="box"></i> Purple</a>
<a href="#" data-target="orange" data-type="color" class="selectable detailed"><i class="box"></i> Orange</a>
                                </div>
                            </div>
                        </div> <!-- /color filter -->

                        <!--  ==========  -->
                        <!--  = Brand filter =  -->
                        <!--  ==========  -->
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterFour">Brand <b class="caret"></b></a>
                            </div>
                            <div id="filterFour" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <a href="#" data-target="s-oliver" data-type="brand" class="selectable detailed"><i class="box"></i> S. Oliver</a>
<a href="#" data-target="nike" data-type="brand" class="selectable detailed"><i class="box"></i> Nike</a>
<a href="#" data-target="naish" data-type="brand" class="selectable detailed"><i class="box"></i> Naish</a>
<a href="#" data-target="adidas" data-type="brand" class="selectable detailed"><i class="box"></i> Adidas</a>
<a href="#" data-target="puma" data-type="brand" class="selectable detailed"><i class="box"></i> Puma</a>
<a href="#" data-target="shred" data-type="brand" class="selectable detailed"><i class="box"></i> Shred</a>
                                </div>
                            </div>
                        </div> <!-- /brand filter -->

                        <a href="#" class="remove-filter" id="removeFilters"><span class="icon-ban-circle"></span> Remove All Filters</a>

                    </div>
                </aside> <!-- /sidebar -->

                <!--  ==========  -->
                <!--  = Main content =  -->
                <!--  ==========  -->
                <section class="span9">

                    <!--  ==========  -->
                    <!--  = Title =  -->
                    <!--  ==========  -->
                    <div class="underlined push-down-20">
                        <div class="row">
                            <div class="span4">
                                <h3><span class="light">All</span> Products</h3>
                            </div>
                            <div class="span5 align-right sm-align-left">
                                <div class="form-inline sorting-by" id="tourStep4">
                                    <label for="isotopeSorting" class="black-clr">Sort:</label>
                                    <select id="isotopeSorting" class="span3">
                                        <option value='{"sortBy":"price", "sortAscending":"true"}'>By Price (Low to High) &uarr;</option>
                                        <option value='{"sortBy":"price", "sortAscending":"false"}'>By Price (High to Low) &darr;</option>
                                        <option value='{"sortBy":"name", "sortAscending":"true"}'>By Name (Low to High) &uarr;</option>
                                        <option value='{"sortBy":"name", "sortAscending":"false"}'>By Name (High to Low) &darr;</option>
                                        <option value='{"sortBy":"popularity", "sortAscending":"true"}'>By Popularity (Low to High) &uarr;</option>
                                        <option value='{"sortBy":"popularity", "sortAscending":"false"}'>By Popularity (High to Low) &darr;</option>
                                    </select>
                                </div>
                                <div class="view-switch">
                                    <a href="shop.html" class="btn btn-primary"><i class="icon-th"></i></a>
                                    <a href="shop-list-view.html" class="btn"><i class="icon-list"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /title -->

                    <!--  ==========  -->
                    <!--  = Products =  -->
                    <!--  ==========  -->
                    <div class="row popup-products">
                        <div id="isotopeContainer" class="isotope-container">


                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--polo-shirts" data-price="92" data-popularity="1" data-size="s|xxl" data-color="orange" data-brand="shred">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	                <div class="stamp green">New</div>
                    	                                        	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-1.jpg.pagespeed.ce.Da1RubYOlL.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                        <form method="post" action="sproduct.php">
                                                            
                                                             <button type="submit" name="submit" value="images/dummy/products/product-1.jpg.pagespeed.ce.Da1RubYOlL.jpg" class="btn more btn-primary">
                                                             More
                                                             </button>
                                                             <input  type="hidden" name="rs" value="520">
                                                             <input type="hidden" name="pname" value="Lee">
                                                            <a href="#" class="btn buy btn-danger">Buy</a>
                                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 520</h4>
                        	                <h5 class="no-margin isotope--title">Lee</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--bags" data-price="1545" data-popularity="3" data-size="s|m|xl|xxl" data-color="pink|purple" data-brand="shred">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-2.jpg.pagespeed.ce.EDQe3gHrr41.jpg"/></a>
                        	                    <div class="img-overlay">

                        	                    		  <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-2.jpg.pagespeed.ce.EDQe3gHrr41.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1545">
				                                             <input type="hidden" name="pname" value="Lorem Amet Consectetur Sed Condimentum">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1545</h4>
                        	                <h5 class="no-margin isotope--title">Lorem Amet Consectetur Sed Condimentum</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--shirts" data-price="1041" data-popularity="3" data-size="xs|s|xl" data-color="green|blue" data-brand="s-oliver">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-3.jpg.pagespeed.ce.YWPViY8cOl1.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                    	  <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-3.jpg.pagespeed.ce.YWPViY8cOl1.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1041">
				                                             <input type="hidden" name="pname" value="Ipsum Consectetur Vivamus Nisi Duis">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1041</h4>
                        	                <h5 class="no-margin isotope--title">Ipsum Consectetur Vivamus Nisi Duis</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--bags" data-price="736" data-popularity="5" data-size="xs|s|l|xxl" data-color="red|pink" data-brand="adidas">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-4.jpg.pagespeed.ce.bHDWegjUym1.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                       <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-4.jpg.pagespeed.ce.bHDWegjUym1.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="736">
				                                             <input type="hidden" name="pname" value="Austrilia Hang bag">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 736</h4>
                        	                <h5 class="no-margin isotope--title">Austrilia Hang bag</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--sunglasses" data-price="1581" data-popularity="1" data-size="xs|s|m|l" data-color="red|pink" data-brand="puma">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	                <div class="stamp green">New</div>
                    	                                        	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-5.jpg.pagespeed.ce.4JLR3ZeQEC.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                 <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-5.jpg.pagespeed.ce.4JLR3ZeQEC.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1581">
				                                             <input type="hidden" name="pname" value="Live today T-shirt">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1581</h4>
                        	                <h5 class="no-margin isotope--title">Live today T-shirt</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--suits" data-price="1488" data-popularity="1" data-size="s|m|l" data-color="pink" data-brand="puma">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	                <div class="stamp green">New</div>
                    	                                        	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-13.jpg.pagespeed.ce.n4S9S9r0y1.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                        <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-13.jpg.pagespeed.ce.n4S9S9r0y1.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1488">
				                                             <input type="hidden" name="pname" value="Horsef Cap">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1488</h4>
                        	                <h5 class="no-margin isotope--title">Horsef Cap</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--swimwear" data-price="249" data-popularity="1" data-size="s|m|xxl" data-color="orange" data-brand="puma">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	                <div class="stamp green">New</div>
                    	                                        	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-7.jpg.pagespeed.ce.HyGb3bENJ7.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                           <form method="post" action="sproduct.php">
                                                            
                                                             <button type="submit" name="submit" value="images/dummy/products/product-7.jpg.pagespeed.ce.HyGb3bENJ7.jpg" class="btn more btn-primary">
                                                             More
                                                             </button>
                                                             <input  type="hidden" name="rs" value="2499">
                                                             <input type="hidden" name="pname" value="Puma">
                                                            <a href="#" class="btn buy btn-danger">Buy</a>
                                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 2499</h4>
                        	                <h5 class="no-margin isotope--title">Puma</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--trousers" data-price="699" data-popularity="5" data-size="xs|l|xl|xxl" data-color="purple" data-brand="s-oliver">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-8.jpg.pagespeed.ce.1vv0RltX3O.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                     <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-8.jpg.pagespeed.ce.1vv0RltX3O.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="699">
				                                             <input type="hidden" name="pname" value="Johnhills Shirt">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 699</h4>
                        	                <h5 class="no-margin isotope--title">Johnhills Shirt</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--socks" data-price="161" data-popularity="5" data-size="xs|m|xl|xxl" data-color="blue|pink" data-brand="s-oliver">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-9.jpg.pagespeed.ce.pgB4xkmiXd1.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                        <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-9.jpg.pagespeed.ce.pgB4xkmiXd1.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="161">
				                                             <input type="hidden" name="pname" value="Nike shoes">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 161</h4>
                        	                <h5 class="no-margin isotope--title">Nike shoes</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--accessories" data-price="1055" data-popularity="1" data-size="l|xxl" data-color="blue" data-brand="s-oliver">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	                <div class="stamp green">New</div>
                    	                                        	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-10.jpg.pagespeed.ce.I4zh8RM_A8.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                     <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-10.jpg.pagespeed.ce.I4zh8RM_A8.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1055">
				                                             <input type="hidden" name="pname" value="Striker Jeans">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1055</h4>
                        	                <h5 class="no-margin isotope--title">Stiker Jeans</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--chinos" data-price="1027" data-popularity="3" data-size="xs|m|xl|xxl" data-color="green|purple" data-brand="puma">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-11.jpg.pagespeed.ce.dhG92Aw57l.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                       <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-11.jpg.pagespeed.ce.dhG92Aw57l.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1027">
				                                             <input type="hidden" name="pname" value="Lee Jeans">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1027</h4>
                        	                <h5 class="no-margin isotope--title">Lee Jeans</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--underwear" data-price="1685" data-popularity="1" data-size="xs|m|xl" data-color="purple" data-brand="shred">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	                <div class="stamp green">New</div>
                    	                                        	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-12.jpg.pagespeed.ce.v5dCplkcke.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                      <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-12.jpg.pagespeed.ce.v5dCplkcke.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1685">
				                                             <input type="hidden" name="pname" value="Puma shoes">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1685</h4>
                        	                <h5 class="no-margin isotope--title">Puma shoes</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--accessories" data-price="162" data-popularity="1" data-size="xs|m|xl" data-color="green" data-brand="s-oliver">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	                <div class="stamp green">New</div>
                    	                                        	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-13.jpg.pagespeed.ce.n4S9S9r0y1.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                     <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-13.jpg.pagespeed.ce.n4S9S9r0y1.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1629">
				                                             <input type="hidden" name="pname" value="Wrangler">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1629</h4>
                        	                <h5 class="no-margin isotope--title">Wrangler</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->






                            
                    	    <div class="span3 isotope--target filter--suits" data-price="121" data-popularity="4" data-size="xs|m|l|xl" data-color="green|pink" data-brand="nike">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-14.jpg.pagespeed.ce.A3Xy9rc3L6.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                           <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-14.jpg.pagespeed.ce.A3Xy9rc3L6.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1211">
				                                             <input type="hidden" name="pname" value="Biba">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1211</h4>
                        	                <h5 class="no-margin isotope--title">Biba</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--shirts" data-price="309" data-popularity="5" data-size="xs|s|m|xl" data-color="blue|pink" data-brand="naish">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-15.jpg.pagespeed.ce.2nvdKLn9rh1.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                              <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-15.jpg.pagespeed.ce.2nvdKLn9rh1.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1999">
				                                             <input type="hidden" name="pname" value="Fossil">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1999</h4>
                        	                <h5 class="no-margin isotope--title">Fossil</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--boots" data-price="822" data-popularity="3" data-size="xs|s|xl|xxl" data-color="pink|purple" data-brand="naish">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-16.jpg.pagespeed.ce.VRzvgI1NSs1.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                             <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-13.jpg.pagespeed.ce.n4S9S9r0y1" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="162">
				                                             <input type="hidden" name="pname" value="Horsef Cap">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 822</h4>
                        	                <h5 class="no-margin isotope--title">Sit Vel Est Condimentum</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--chinos" data-price="1249" data-popularity="5" data-size="xs|s|m|l" data-color="orange" data-brand="adidas">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-9.jpg.pagespeed.ce.pgB4xkmiXd.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                              <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-9.jpg.pagespeed.ce.pgB4xkmiXd.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1249">
				                                             <input type="hidden" name="pname" value="Bata">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1249</h4>
                        	                <h5 class="no-margin isotope--title">Bata</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                             <div class="span3 isotope--target filter--chinos" data-price="1249" data-popularity="5" data-size="xs|s|m|l" data-color="orange" data-brand="adidas">
                                <div class="product">
                                    <div class="product-inner">
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-10.jpg.pagespeed.ce.I4zh8RM_A8.jpg"/></a>
                                                <div class="img-overlay">
                                                  <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-10.jpg.pagespeed.ce.I4zh8RM_A8.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="899">
				                                             <input type="hidden" name="pname" value="Duke">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">₹ 899</h4>
                                            <h5 class="no-margin isotope--title">Duke</h5>
                                        </div>
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
                            </div> <!-- /single product -->

                              <div class="span3 isotope--target filter--chinos" data-price="1249" data-popularity="5" data-size="xs|s|m|l" data-color="orange" data-brand="adidas">
                                <div class="product">
                                    <div class="product-inner">
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-9.jpg.pagespeed.ce.pgB4xkmiXd.jpg"/></a>
                                                <div class="img-overlay">
                                                      <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-9.jpg.pagespeed.ce.pgB4xkmiXd.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="749">
				                                             <input type="hidden" name="pname" value="Nike">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">₹ 749</h4>
                                            <h5 class="no-margin isotope--title">Nike</h5>
                                        </div>
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
                            </div> <!-- /single product -->
                           
                              <div class="span3 isotope--target filter--chinos" data-price="1249" data-popularity="5" data-size="xs|s|m|l" data-color="orange" data-brand="adidas">
                                <div class="product">
                                    <div class="product-inner">
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-7.jpg.pagespeed.ce.HyGb3bENJ7.jpg"/></a>
                                                <div class="img-overlay">
                                                      <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-7.jpg.pagespeed.ce.HyGb3bENJ7.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="699">
				                                             <input type="hidden" name="pname" value="Biba">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">₹ 699</h4>
                                            <h5 class="no-margin isotope--title">Biba</h5>
                                        </div>
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
                            </div> <!-- /single product -->
                              <div class="span3 isotope--target filter--chinos" data-price="1249" data-popularity="5" data-size="xs|s|m|l" data-color="orange" data-brand="adidas">
                                <div class="product">
                                    <div class="product-inner">
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-6.jpg.pagespeed.ce.XI0HBrK_zM.jpg"/></a>
                                                <div class="img-overlay">
                                                    <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-6.jpg.pagespeed.ce.XI0HBrK_zM.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1599">
				                                             <input type="hidden" name="pname" value="Mufti">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">₹ 1599</h4>
                                            <h5 class="no-margin isotope--title">Mufti</h5>
                                        </div>
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
                            </div> <!-- /single product -->
                              <div class="span3 isotope--target filter--chinos" data-price="1249" data-popularity="5" data-size="xs|s|m|l" data-color="orange" data-brand="adidas">
                                <div class="product">
                                    <div class="product-inner">
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-34.jpg.pagespeed.ce.qmvgXoakgS.jpg"/></a>
                                                <div class="img-overlay">
                                                      <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-34.jpg.pagespeed.ce.qmvgXoakgS.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="649">
				                                             <input type="hidden" name="pname" value="Wrangler">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">₹ 649</h4>
                                            <h5 class="no-margin isotope--title">Wrangler</h5>
                                        </div>
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
                            </div> <!-- /single product -->
                              <div class="span3 isotope--target filter--chinos" data-price="1249" data-popularity="5" data-size="xs|s|m|l" data-color="orange" data-brand="adidas">
                                <div class="product">
                                    <div class="product-inner">
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/shirt-1.jpg.pagespeed.ce.Pi4WnL75ui.jpg"/></a>
                                                <div class="img-overlay">
                                                         <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/shirt-1.jpg.pagespeed.ce.Pi4WnL75ui.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="349">
				                                             <input type="hidden" name="pname" value="Bata">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">₹ 349</h4>
                                            <h5 class="no-margin isotope--title">Bata</h5>
                                        </div>
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
                            </div> <!-- /single product -->
                              <div class="span3 isotope--target filter--chinos" data-price="1249" data-popularity="5" data-size="xs|s|m|l" data-color="orange" data-brand="adidas">
                                <div class="product">
                                    <div class="product-inner">
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/shirt-2.jpg.pagespeed.ce.1mS04Ek51W.jpg"/></a>
                                                <div class="img-overlay">
                                                      <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/shirt-2.jpg.pagespeed.ce.1mS04Ek51W.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="999">
				                                             <input type="hidden" name="pname" value="Lee">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">₹ 999</h4>
                                            <h5 class="no-margin isotope--title">Lee</h5>
                                        </div>
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
                            </div> <!-- /single product -->
                              <div class="span3 isotope--target filter--chinos" data-price="1249" data-popularity="5" data-size="xs|s|m|l" data-color="orange" data-brand="adidas">
                                <div class="product">
                                    <div class="product-inner">
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/shirt-3.jpg.pagespeed.ce.NeiPCCrCap.jpg"/></a>
                                                <div class="img-overlay">
                                                         <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/shirt-3.jpg.pagespeed.ce.NeiPCCrCap.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1500">
				                                             <input type="hidden" name="pname" value="Puma">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">₹ 1500</h4>
                                            <h5 class="no-margin isotope--title">Puma</h5>
                                        </div>
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
                            </div> <!-- /single product -->

                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--shorts" data-price="420" data-popularity="4" data-size="s|l" data-color="green" data-brand="shred">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-2.jpg.pagespeed.ce.EDQe3gHrr4.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                               <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-2.jpg.pagespeed.ce.EDQe3gHrr4.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="2400">
				                                             <input type="hidden" name="pname" value="Puma">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 2400</h4>
                        	                <h5 class="no-margin isotope--title">Puma</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                            <div class="span3 isotope--target filter--shorts" data-price="420" data-popularity="4" data-size="s|l" data-color="green" data-brand="shred">
                                <div class="product">
                                    <div class="product-inner">
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-3.jpg.pagespeed.ce.YWPViY8cOl.jpg"/></a>
                                                <div class="img-overlay">
                                                <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-3.jpg.pagespeed.ce.YWPViY8cOl.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="899">
				                                             <input type="hidden" name="pname" value="Lee">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">₹ 899</h4>
                                            <h5 class="no-margin isotope--title">Lee</h5>
                                        </div>
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
                            </div> <!-- /single product -->
                            <div class="span3 isotope--target filter--shorts" data-price="420" data-popularity="4" data-size="s|l" data-color="green" data-brand="shred">
                                <div class="product">
                                    <div class="product-inner">
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-4.jpg.pagespeed.ce.bHDWegjUym.jpg"/></a>
                                                <div class="img-overlay">
                                                   <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-4.jpg.pagespeed.ce.bHDWegjUym.jpg"class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1999">
				                                             <input type="hidden" name="pname" value="Adidas">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">₹ 1999</h4>
                                            <h5 class="no-margin isotope--title">Adidas</h5>
                                        </div>
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
                            </div> <!-- /single product -->
                            <div class="span3 isotope--target filter--shorts" data-price="420" data-popularity="4" data-size="s|l" data-color="green" data-brand="shred">
                                <div class="product">
                                    <div class="product-inner">
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-5.jpg.pagespeed.ce.4JLR3ZeQEC.jpg"/></a>
                                                <div class="img-overlay">
                                                       <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-5.jpg.pagespeed.ce.4JLR3ZeQEC.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="540">
				                                             <input type="hidden" name="pname" value="Duke">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">₹ 540</h4>
                                            <h5 class="no-margin isotope--title">Duke</h5>
                                        </div>
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
                            </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--t-shirts" data-price="487" data-popularity="2" data-size="s|l" data-color="blue|pink" data-brand="s-oliver">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                	                    <div class="stamp red">Sold</div>
                	                                            	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-19.jpg.pagespeed.ce.5HEt0o7OAB.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                          <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-19.jpg.pagespeed.ce.5HEt0o7OAB.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="599">
				                                             <input type="hidden" name="pname" value="Polo">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 599</h4>
                        	                <h5 class="no-margin isotope--title">Polo</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--trainers" data-price="184" data-popularity="5" data-size="l|xxl" data-color="pink|purple" data-brand="shred">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-20.jpg.pagespeed.ce.F7BAxYDbLX1.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                         <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-20.jpg.pagespeed.ce.F7BAxYDbLX1.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1845">
				                                             <input type="hidden" name="pname" value="Duke">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1845</h4>
                        	                <h5 class="no-margin isotope--title">Duke</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--polo-shirts" data-price="421" data-popularity="5" data-size="m|xxl" data-color="red" data-brand="naish">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-21.jpg.pagespeed.ce.yYDOdqD4v1.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                           <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-21.jpg.pagespeed.ce.yYDOdqD4v1.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="899">
				                                             <input type="hidden" name="pname" value="Puma">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 899</h4>
                        	                <h5 class="no-margin isotope--title">Puma</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--t-shirts" data-price="286" data-popularity="5" data-size="xs|s|m" data-color="blue|pink" data-brand="puma">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-20.jpg.pagespeed.ce.F7BAxYDbLX.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                          <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-20.jpg.pagespeed.ce.F7BAxYDbLX.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="2999">
				                                             <input type="hidden" name="pname" value="Nike">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 2999</h4>
                        	                <h5 class="no-margin isotope--title">Nike</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                            <div class="span3 isotope--target filter--t-shirts" data-price="286" data-popularity="5" data-size="xs|s|m" data-color="blue|pink" data-brand="puma">
                                <div class="product">
                                    <div class="product-inner">
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-27.jpg.pagespeed.ce.uQO61sTD6h.jpg"/></a>
                                                <div class="img-overlay">
                                                      <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-27.jpg.pagespeed.ce.uQO61sTD6h.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="2866">
				                                             <input type="hidden" name="pname" value="Adidas">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">₹ 2866</h4>
                                            <h5 class="no-margin isotope--title">Adidas</h5>
                                        </div>
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
                            </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--t-shirts" data-price="576" data-popularity="2" data-size="m|l" data-color="red|purple" data-brand="puma">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                	                    <div class="stamp red">Sold</div>
                	                                            	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-23.jpg.pagespeed.ce.myNttexobP.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                          <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-23.jpg.pagespeed.ce.myNttexobP.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="579">
				                                             <input type="hidden" name="pname" value="Levis">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 579</h4>
                        	                <h5 class="no-margin isotope--title">Levis</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                             <div class="span3 isotope--target filter--t-shirts" data-price="576" data-popularity="2" data-size="m|l" data-color="red|purple" data-brand="puma">
                                <div class="product">
                                    <div class="product-inner">
                                                                                    <div class="stamp red">Sold</div>
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-24.jpg.pagespeed.ce.lEoWFT7nFI.jpg"/></a>
                                                <div class="img-overlay">
                                                     <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-24.jpg.pagespeed.ce.lEoWFT7nFI.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="899">
				                                             <input type="hidden" name="pname" value="Polo">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">₹ 899</h4>
                                            <h5 class="no-margin isotope--title">Polo</h5>
                                        </div>
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
                            </div> <!-- /single product -->
                             <div class="span3 isotope--target filter--t-shirts" data-price="576" data-popularity="2" data-size="m|l" data-color="red|purple" data-brand="puma">
                                <div class="product">
                                    <div class="product-inner">
                                                                                    <div class="stamp red">Sold</div>
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-26.jpg.pagespeed.ce.nQWAYlt5Ha.jpg"/></a>
                                                <div class="img-overlay">
                                                      <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-26.jpg.pagespeed.ce.nQWAYlt5Ha.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="576">
				                                             <input type="hidden" name="pname" value="Only">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">₹ 576</h4>
                                            <h5 class="no-margin isotope--title">Only</h5>
                                        </div>
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
                            </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--accessories" data-price="1090" data-popularity="4" data-size="s|xl" data-color="red|purple" data-brand="puma">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-24.jpg.pagespeed.ce.lEoWFT7nFI.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                       <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-24.jpg.pagespeed.ce.lEoWFT7nFI.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1090">
				                                             <input type="hidden" name="pname" value="Ten On Ten">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1090</h4>
                        	                <h5 class="no-margin isotope--title">Ten On Ten</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--vests" data-price="54" data-popularity="4" data-size="xs|s|l|xxl" data-color="blue|pink" data-brand="s-oliver">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-25.jpg.pagespeed.ce.xJJfKy1ctx.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                            <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-25.jpg.pagespeed.ce.xJJfKy1ctx.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="699">
				                                             <input type="hidden" name="pname" value="Jockey">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 699</h4>
                        	                <h5 class="no-margin isotope--title">Jockey</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--trainers" data-price="1016" data-popularity="5" data-size="xs|s|m|xxl" data-color="red" data-brand="puma">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-26.jpg.pagespeed.ce.nQWAYlt5Ha1.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                        <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-26.jpg.pagespeed.ce.nQWAYlt5Ha1.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1016">
				                                             <input type="hidden" name="pname" value="Biba">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1016</h4>
                        	                <h5 class="no-margin isotope--title">Biba</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--accessories" data-price="1280" data-popularity="3" data-size="m|l" data-color="red|orange" data-brand="nike">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-27.jpg.pagespeed.ce.uQO61sTD6h.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                        <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-27.jpg.pagespeed.ce.uQO61sTD6h.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1280">
				                                             <input type="hidden" name="pname" value="Vanhuesen">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1280</h4>
                        	                <h5 class="no-margin isotope--title">Vanhuesen</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--blazers" data-price="1368" data-popularity="4" data-size="xs|l" data-color="blue|purple" data-brand="naish">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-28.jpg.pagespeed.ce.KafkrIYpz7.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                     <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-28.jpg.pagespeed.ce.KafkrIYpz7.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1368">
				                                             <input type="hidden" name="pname" value="cottinfab">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1368</h4>
                        	                <h5 class="no-margin isotope--title">cottinfab</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--shorts" data-price="454" data-popularity="4" data-size="xs|s|l|xl" data-color="green|pink" data-brand="puma">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-22.jpg.pagespeed.ce.z0Qhm86STl.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                            <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-22.jpg.pagespeed.ce.z0Qhm86STl.jpg"" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="659">
				                                             <input type="hidden" name="pname" value="Allensolly">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 659</h4>
                        	                <h5 class="no-margin isotope--title">Allensolly</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--bags" data-price="228" data-popularity="3" data-size="s|xl|xxl" data-color="blue" data-brand="shred">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-30.jpg.pagespeed.ce.7Sx6wEwaD0.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                               <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-30.jpg.pagespeed.ce.7Sx6wEwaD0.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="2228">
				                                             <input type="hidden" name="pname" value="Levis">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 2228</h4>
                        	                <h5 class="no-margin isotope--title">Levis</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--bags" data-price="1045" data-popularity="5" data-size="s|m|l|xl" data-color="red" data-brand="puma">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-31.jpg.pagespeed.ce.qcxMmISnaf1.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                             <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-31.jpg.pagespeed.ce.qcxMmISnaf1.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1045">
				                                             <input type="hidden" name="pname" value="Xoxo">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1045</h4>
                        	                <h5 class="no-margin isotope--title">Xoxo</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--swimwear" data-price="1558" data-popularity="3" data-size="xs|s|l" data-color="pink|purple" data-brand="s-oliver">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/540x374xproduct-32.jpg.pagespeed.ic.cYj7H0BB4k.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                            <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/540x374xproduct-32.jpg.pagespeed.ic.cYj7H0BB4k.jpg"class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1558">
				                                             <input type="hidden" name="pname" value="Nike">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1558</h4>
                        	                <h5 class="no-margin isotope--title">Nike</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--shirts" data-price="3" data-popularity="5" data-size="xs|m" data-color="pink" data-brand="puma">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-33.jpg.pagespeed.ce.ScmDb1T3Wy1.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                        <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-33.jpg.pagespeed.ce.ScmDb1T3Wy1.jpg"class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="399">
				                                             <input type="hidden" name="pname" value="Bata">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 399</h4>
                        	                <h5 class="no-margin isotope--title">Bata</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--sunglasses" data-price="197" data-popularity="5" data-size="xs|s|xxl" data-color="blue" data-brand="s-oliver">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-34.jpg.pagespeed.ce.qmvgXoakgS.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                            <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-34.jpg.pagespeed.ce.qmvgXoakgS.jpg class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1999">
				                                             <input type="hidden" name="pname" value="Wrangler">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1999</h4>
                        	                <h5 class="no-margin isotope--title">Wrangler</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	                    	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 isotope--target filter--blazers" data-price="1120" data-popularity="1" data-size="s|xl|xxl" data-color="pink" data-brand="adidas">
                    	        <div class="product">
                                    <div class="product-inner">
                        	                                    	                <div class="stamp green">New</div>
                    	                                        	            <div class="product-img">
                        	                <div class="picture">
                        	                    <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-35.jpg.pagespeed.ce.2_Bct1j-Do.jpg"/></a>
                        	                    <div class="img-overlay">
                        	                               <form method="post" action="sproduct.php">
				                                            
				                                             <button type="submit" name="submit" value="images/dummy/products/product-35.jpg.pagespeed.ce.2_Bct1j-Do.jpg" class="btn more btn-primary">
				                                             More
				                                             </button>
				                                             <input  type="hidden" name="rs" value="1120">
				                                             <input type="hidden" name="pname" value="Raymonds">
				                                            <a href="#" class="btn buy btn-danger">Buy</a>
				                                    
                                                          </form>
                        	                    </div>
                        	                </div>
                        	            </div>
                        	            <div class="main-titles no-margin">
                        	                <h4 class="title">₹ 1120</h4>
                        	                <h5 class="no-margin isotope--title">Raymonds</h5>
                        	            </div>
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
                    	    </div> <!-- /single product -->
                    	    
                    	</div>
                	</div>
                	<hr/>
                </section> <!-- /main content -->

                
            </div>
        </div>
    </div> <!-- /container -->

    
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
                        <h2 class="pacifico">BestPrice &nbsp; <img src="images/webmarket.png.pagespeed.ce.2I1Tyza8MZ.png" alt="Webmarket Cart" class="align-baseline" width="22" height="19"/></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt vestibulum risus et gravida. Etiam vel augue ligula, blandit malesuada nisi. Quisque a augue nisi. Nullam interdum convallis </p>
                    </div>
                    <div class="span4">
                        <div class="main-titles lined">
                            <h3 class="title">Facebook</h3>
                        </div>
                        <div class="bordered">
                            <div class="fill-iframe">
                                <div class="fb-like-box" data-href="https://www.facebook.com/ProteusNet" data-width="292" data-height="200" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="main-titles lined">
                            <h3 class="title"><span class="light">Newsletters</span> Signup</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Aliquam tincidunt vestibulum risus et gravida.</p>
                        <!-- Begin MailChimp Signup Form -->
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
        </div> <!-- /upper footer -->

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
                            <h3 class="title"><span class="light">Main</span> Navigation</h3>
                        </div>
                        <ul class="nav bold">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Shortcodes</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>

                    <!--  ==========  -->
                    <!--  = Menu 2 =  -->
                    <!--  ==========  -->
                    <div class="span3">
                        <div class="main-titles lined">
                            <h3 class="title"><span class="light">Second</span> Navigation</h3>
                        </div>
                        <ul class="nav">
                            <li><a href="#">Lorem Ipsum Dolor Sit</a></li>
                            <li><a href="#">Amet BestPrice Signup</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Latest Tweets Sometging</a></li>
                            <li><a href="#">Ipsum Sit Lorem Amet</a></li>
                        </ul>
                    </div>

                    <!--  ==========  -->
                    <!--  = Menu 3 =  -->
                    <!--  ==========  -->
                    <div class="span3">
                        <div class="main-titles lined">
                            <h3 class="title"><span class="light">Third</span> Navigation</h3>
                        </div>
                        <ul class="nav">
                            <li><a href="#">Lorem Ipsum Dolor Sit</a></li>
                            <li><a href="#">Amet BestPrice Signup</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Latest Tweets Sometging</a></li>
                            <li><a href="#">Ipsum Sit Lorem Amet</a></li>
                        </ul>
                    </div>

                    <!--  ==========  -->
                    <!--  = Menu 4 =  -->
                    <!--  ==========  -->
                    <div class="span3">
                        <div class="main-titles lined">
                            <h3 class="title"><span class="light">Fourth</span> Navigation</h3>
                        </div>
                        <ul class="nav">
                            <li><a href="#">Lorem Ipsum Dolor Sit</a></li>
                            <li><a href="#">Amet BestPrice Signup</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Latest Tweets Sometging</a></li>
                            <li><a href="#">Ipsum Sit Lorem Amet</a></li>
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
                        &copy; Copyright 2014. Images of products by <a target="_blank" href="http://www.horsefeathers.eu/">SSBV</a>.
                    </div>
                    <div class="span6">
                        <div class="pull-right">BestPrice by <a href="http://www.proteusthemes.com/">MSIT 2013-15</a></div>
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
            <form method="post" action="#">
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputEmail">Username</label>
                    <div class="controls">
                        <input type="text" class="input-block-level" id="inputEmail" placeholder="Username" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputPassword">Password</label>
                    <div class="controls">
                        <input type="password" class="input-block-level" id="inputPassword" placeholder="Password" required>
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
                <button type="submit" class="btn btn-primary input-block-level bold higher">
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
            <form method="post" action="#">
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputUsernameRegister">Username</label>
                    <div class="controls">
                        <input type="text" class="input-block-level" id="inputUsernameRegister" placeholder="Username" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputEmailRegister">Email</label>
                    <div class="controls">
                        <input type="email" class="input-block-level" id="inputEmailRegister" placeholder="Email" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputPasswordRegister">Password</label>
                    <div class="controls">
                        <input type="password" class="input-block-level" id="inputPasswordRegister" placeholder="Password" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger input-block-level bold higher">
                    REGISTER
                </button>
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
    <script src="js/isotope/jquery.isotope.min.js.pagespeed.jm.z0B8alLj_3.js" type="text/javascript"></script>

    <!--  = Tour =  -->
    <script src="js/bootstrap-tour%2c_build%2c_js%2c_bootstrap-tour.min.js%2cMjm.0uuuvYuBmK.js%2bprettyphoto%2c_js%2c_jquery.prettyPhoto.js%2cMjm.yI-YDtvTMT.js%2bgoMap%2c_js%2c_jquery.gomap-"></script><script>eval(mod_pagespeed_x9pWpl7o9N);</script>

    <!--  = PrettyPhoto =  -->
    <script>eval(mod_pagespeed_Q8mZc6qNW5);</script>

    <!--  = Google Maps API =  -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDvMjN1g49P1MA2Onsj-GulDkmDuuH6aoU&amp;sensor=false"></script>
    <script>eval(mod_pagespeed_aZ7AhjP8SR);</script>

    <!--  = Custom JS =  -->
    <script src="js/custom.js.pagespeed.jm.rYRw-5fzBq.js" type="text/javascript"></script>

  </body>

<!-- Mirrored from www.proteusthemes.com/themes/BestPrice-html/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Oct 2014 12:53:16 GMT -->
</html>


