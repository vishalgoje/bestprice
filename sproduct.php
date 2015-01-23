
<?php
include('session.php');
// establishing the MySQLi connection\
$item='';

// checking the user
$con = mysqli_connect("localhost","root","","student");
	$submit = mysqli_real_escape_string($con,$_POST['submit']);
	$rs = mysqli_real_escape_string($con,$_POST['rs']);
    $pname = mysqli_real_escape_string($con,$_POST['pname']);
    $item = $submit;
?>
<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  

<head>
    <meta charset="utf-8">
    <title>BestPrice - Product Page</title>
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
                                <a href="checkout-step-1.html" class="gray-link">Checkout</a>
                            </div>
                            &nbsp;
                        
                        </div>
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
                        <span class="pacifico">BestPrice</span>
                        <span class="tagline">We bring best things at best price</span>
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
                <form method="post" action="scheckout-step-1.php" >
                <div class="cart-container" id="cartContainer">
                    <div class="cart">

                        <p class="items">CART <span class="dark-clr"></span></p>
                        <p class="dark-clr hidden-tablet">₹ <?php echo $sum; ?></p>
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
                                <strong><a href="product.html">Ipsum Sit Neque</a></strong>
                                <span class="light-clr qty">
                                    Qty: 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>₹ 2527</strong>
                            </div>
                        </div>
                                                <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="images/dummy/cart-items/124x124xcart-item-2.jpg.pagespeed.ic.pWDTtNZ7M8.jpg" width="124" height="124" alt="cart item"/>
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">Consectetur Sed Nisi</a></strong>
                                <span class="light-clr qty">
                                    Qty: 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>₹ 2517</strong>
                            </div>
                        </div>
                                                <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="images/dummy/cart-items/124x124xcart-item-3.jpg.pagespeed.ic.SxHNASdP7z.jpg" width="124" height="124" alt="cart item"/>
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">Vivamus Adipiscing Ac</a></strong>
                                <span class="light-clr qty">
                                    Qty: 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>₹ 3930</strong>
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
                                    <div class="span6 align-right size-16">₹ <?php echo $sum; ?></div>
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
	                        <a href="index.html">BestPrice </a>
	                    </li>
	                    <li><span class="icon-chevron-right"></span></li>
	                    <li>
	                        <a href="shop.html">Shop</a>
	                    </li>
	                    <li><span class="icon-chevron-right"></span></li>
	                    <li>
	                        <a href="#">POLO</a>
	                    </li>
	                    <li><span class="icon-chevron-right"></span></li>
	                    <li>
	                        <a href="product.html">POLO T-shirt</a>
	                    </li>
	                </ul>
        		</div>
        	</div>
        </div>
    </div>

    <!--  ==========  -->
    <!--  = Main container =  -->
    <!--  ==========  -->
    <div class="container">
        <div class="push-up top-equal blocks-spacer">

            <!--  ==========  -->
            <!--  = Product =  -->
            <!--  ==========  -->
            <div class="row blocks-spacer">

                <!--  ==========  -->
                <!--  = Preview Images =  -->
                <!--  ==========  -->
                <div class="span5">
                    <div class="product-preview">
                        <div class="picture">
                            <img src=<?php echo $item; ?> alt="" width="940" height="940" id="mainPreviewImg"/>
                        </div>
                        <div class="thumbs clearfix">
                            <div class="thumb active">
                                <a href="#mainPreviewImg"><img src="images/dummy/products/shirt-1.jpg.pagespeed.ce.Pi4WnL75ui.jpg" alt="" width="940" height="940"/></a>
                            </div>

                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="images/dummy/products/shirt-2.jpg.pagespeed.ce.1mS04Ek51W.jpg" alt="" width="940" height="940"/></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="images/dummy/products/shirt-3.jpg.pagespeed.ce.NeiPCCrCap.jpg" alt="" width="940" height="940"/></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="images/dummy/products/shirt-3.jpg.pagespeed.ce.NeiPCCrCap.jpg" alt="" width="940" height="940"/></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src=<?php echo $item; ?> alt="" width="940" height="940"/></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  ==========  -->
                <!--  = Title and short desc =  -->
                <!--  ==========  -->
                <div class="span7">
                    <div class="product-title">
                        <h1 class="name"><span class="light">  </span> <?php echo $pname; ?></h1>
                        <div class="meta">
                            <span class="tag">₹  <?php echo $rs; ?></span>
                            <span class="stock">
                                <span class="btn btn-success">In Stock</span>
                                <span class="btn btn-danger">Out of Stock</span>
                                <span class="btn btn-warning">Ask for availability</span>
                            </span>
                        </div>
                    </div>
                    <div class="product-description">
                        <p>Designed for travel and trekking in the hills, the Icebreaker Hopper T-shirt features supremely soft and lightweight merino wool. Superfine 190 non-irritating merino wool wicks away moisture and resists odors-naturally! Raglan sleeves offer nonbinding, seamless comfort at the shoulders. Side seams are rolled forward to increase comfort during active pursuits. Contrasting chain stitch at back of neck adds appeal. Machine wash and lay flat to dry.</p>
                        <hr/>

                        <!--  ==========  -->
                        <!--  = Add to cart form =  -->
                        <!--  ==========  -->
                        <form action="saddtocart.php" method="post" class="form form-inline clearfix">
                            <div class="numbered">
                            	<input type="text" name="quantity" class="tiny-size"/>
                            	<span class="clickable add-one icon-plus-sign-alt"></span>
                            	<span class="clickable remove-one icon-minus-sign-alt"></span>
                            </div>
                            &nbsp;
                            <select name="color" class="span2">
                                <option value="-1">Select Color</option>
                                <option value="blue">Blue</option>
                                <option value="orange">Orange</option>
                                <option value="black">Black</option>
                            </select>
                            &nbsp;
                            <select name="size" class="span2">
                                <option value="-1">Select Size</option>
                                <option value="XS">Extra Small</option>
                                <option value="S">Small</option>
                                <option value="M">Medium</option>
                                <option value="L">Large</option>
                                <option value="XL">Extra Large</option>
                                <option value="XXL">Huge</option>
                            </select>
                            <input type="hidden" name="email" value=<?php echo $email; ?> >
                            <input type="hidden" name="item" value=<?php echo $item; ?> >
                            <input type="hidden" name="rs" value=<?php echo $rs; ?> >
                             <input type="hidden" name="pname" value=<?php echo $pname; ?> >
                            <button type="submit" name="submit" value="submit" class="btn btn-danger pull-right"><i class="icon-shopping-cart"></i> &nbsp; Add To Cart</button>
                        </form>

                        <hr/>

                        <!--  ==========  -->
                        <!--  = Share buttons =  -->
                        <!--  ==========  -->
                        <div class="share-item push-down-20">
                            <div class="row-fluid">
                                <div class="span5">
                                    Share this item with friends:
                                </div>
                                <div class="span7">
                                    <div class="social-networks">
                                        <!-- AddThis Button BEGIN -->
                                        <div class="addthis_toolbox addthis_default_style ">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                        <a class="addthis_button_tweet"></a>
                                        <a class="addthis_button_pinterest_pinit"></a>
                                        <a class="addthis_counter addthis_pill_style"></a>
                                        </div>
                                        <script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=xa-517459541beb3977"></script>
                                        <!-- AddThis Button END -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- More Buttons -->
                        <div class="store-buttons">
                            <i class="icon-heart"></i> <a href="#">Add to a wishlist</a> &nbsp;&nbsp; | &nbsp;&nbsp;
                            <i class="icon-exchange"></i> <a href="#">Add to compare</a> &nbsp;&nbsp; | &nbsp;&nbsp;
                            <i class="icon-envelope-alt"></i> <a href="#">Email to a friend</a>
                        </div>

                    </div>
                </div>
            </div>

            <!--  ==========  -->
            <!--  = Tabs with more info =  -->
            <!--  ==========  -->
            <div class="row">
                <div class="span12">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab-1" data-toggle="tab">Details</a>
                        </li>
                        <li>
                            <a href="#tab-2" data-toggle="tab">SIZING CHART</a>
                        </li>
                        <li>
                            <a href="#tab-3" data-toggle="tab">COMMENTS</a>
                        </li>
                        <li>
                            <a href="#tab-4" data-toggle="tab">SHIPPING DETAILS</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="fade in tab-pane active" id="tab-1">
                            <h3>Product Description</h3>
                            <p>
                            <br><b>Product Name:</b> 2pcs/2011 New high-quality men's T-shirt,round neck T-shirt, short sleeve 
                            <br><b>T-shirt.SIZE:</b> M, L, XL/NO1
                            <br><b>Item Code:</b> 106915907
                            <br><b>Category:</b> T-Shirts Add to Favorite Categories
                            <br><b>Short Description:</b>100% cotton,100% new,Kept in prefer condition Size:.M,L,XL, .Model:men model coat, You can mix all brands,color,size and so on. We have more brands,more models,more color in stock,if you are free,please come into my store and have a look. I offer big discount for big wholesale order !!! Warmly welcome to visit my store!top quality products and the best service for you in anytime!cheers!:)
                            <br><b>Quantity:</b> 1 Lot (2 Piece / lot)
                            <br><b>Package Size: </b>15.0 * 15.0 * 19.0 ( cm )
                            <br><b>Gross Weight/Package:</b> 2.0 ( kg )</p>
                          <!--   
                            <h1>Heading H1 30px</h1>
                            <h2>Heading H2 26px</h2>
                            <h3>Heading H3 20px</h3>
                            <h4>Heading H4 18px</h4>
                            <h5>Heading H5 15px</h5>
                            <p>Phasellus velit quam, ultrices et hendrerit vitae, suscipit nec dui. Sed at ligula vitae ligula pellentesque dictum. Duis lobortis auctor ipsum vel placerat. Phasellus nisi odio, ornare eget faucibus et, accumsan nec mauris. per conubia nostra, per inceptos himenaeos.</p> -->
                        </div>
                        <div class="fade tab-pane" id="tab-2">
                            <p>
                                Available sizes are <b>XS,S,M,L,XL,XXL,XXXL</b>.Check your requirements,select options and enjoy shopping.
                            </p>
                        </div>
                        <div class="fade tab-pane" id="tab-3">
                            <p>
                               <b> No</b> comments at present.
                            </p>
                        </div>
                        <div class="fade tab-pane" id="tab-4">
                            <p>
                                The product will be available for delivery in <b>6-7 business days</b> based on the location.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->

    <!--  ==========  -->
    <!--  = Related Products =  -->
    <!--  ==========  -->
    <div class="boxed-area no-bottom">
        <div class="container">

            <!--  ==========  -->
            <!--  = Title =  -->
            <!--  ==========  -->
            <div class="row">
                <div class="span12">
                    <div class="main-titles lined">
                    	<h2 class="title"><span class="light">Related</span> Products</h2>
                    </div>
                </div>
            </div>

            <!--  ==========  -->
            <!--  = Related products =  -->
            <!--  ==========  -->
            <div class="row popup-products">
                
                <!--  ==========  -->
                <!--  = Products =  -->
                <!--  ==========  -->
            	<div class="span3">
            	    <div class="product">
                        <div class="product-inner">
                	        <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/products/product-1.jpg.pagespeed.ce.Da1RubYOlL.jpg" alt="" width="540" height="374"/></a>
                                    <div class="img-overlay">
                                        <a class="btn more btn-primary" href="product.html">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title"><span class="striked">₹ 32</span> <span class="red-clr">₹ 29</span></h4>
                                <h5 class="no-margin">Adidas Converse 552</h5>
                            </div>
                            <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            <p class="center-align stars">
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star"></span>
                            </p>
                        </div>
            	    </div>
            	</div> <!-- /product -->
            	
                <!--  ==========  -->
                <!--  = Products =  -->
                <!--  ==========  -->
            	<div class="span3">
            	    <div class="product">
                        <div class="product-inner">
                	        <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/products/product-2.jpg.pagespeed.ce.EDQe3gHrr4.jpg" alt="" width="540" height="374"/></a>
                                    <div class="img-overlay">
                                        <a class="btn more btn-primary" href="product.html">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title"><span class="striked">₹ 32</span> <span class="red-clr">₹ 29</span></h4>
                                <h5 class="no-margin">Adidas Converse 552</h5>
                            </div>
                            <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            <p class="center-align stars">
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star"></span>
                            </p>
                        </div>
            	    </div>
            	</div> <!-- /product -->
            	
                <!--  ==========  -->
                <!--  = Products =  -->
                <!--  ==========  -->
            	<div class="span3">
            	    <div class="product">
                        <div class="product-inner">
                	        <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/products/product-3.jpg.pagespeed.ce.YWPViY8cOl.jpg" alt="" width="540" height="374"/></a>
                                    <div class="img-overlay">
                                        <a class="btn more btn-primary" href="product.html">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title"><span class="striked">₹ 32</span> <span class="red-clr">₹ 29</span></h4>
                                <h5 class="no-margin">Adidas Converse 552</h5>
                            </div>
                            <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            <p class="center-align stars">
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star"></span>
                            </p>
                        </div>
            	    </div>
            	</div> <!-- /product -->
            	
                <!--  ==========  -->
                <!--  = Products =  -->
                <!--  ==========  -->
            	<div class="span3">
            	    <div class="product">
                        <div class="product-inner">
                	        <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/products/product-4.jpg.pagespeed.ce.bHDWegjUym.jpg" alt="" width="540" height="374"/></a>
                                    <div class="img-overlay">
                                        <a class="btn more btn-primary" href="product.html">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title"><span class="striked">₹ 32</span> <span class="red-clr">₹ 29</span></h4>
                                <h5 class="no-margin">Adidas Converse 552</h5>
                            </div>
                            <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            <p class="center-align stars">
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star"></span>
                            </p>
                        </div>
            	    </div>
            	</div> <!-- /product -->
            	
            </div>
        </div>
    </div>


    
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
                        <h2 class="pacifico">BestPrice  &nbsp; <img src="images/webmarket.png.pagespeed.ce.2I1Tyza8MZ.png" alt="Webmarket Cart" class="align-baseline" width="22" height="19"/></h2>
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
                            <li><a href="#">Amet BestPrice  Signup</a></li>
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
                            <li><a href="#">Amet BestPrice  Signup</a></li>
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
                        &copy; Copyright 2013. Images of products by <a target="_blank" href="http://www.horsefeathers.eu/">MSIT</a>.
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
            <h3 id="registerModalLabel"><span class="light">Register</span> To BestPrice </h3>
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

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Oct 2014 12:53:23 GMT -->
</html>


