
<style type="text/css">
.container{ width:800px; margin:0 auto;}
.show{ width:800px; margin:0 auto; margin-bottom:10px; padding:10px; }
.show:hover{border-bottom:1px #999 dotted; }
.action { float:right;}
.name { text-transform:capitalize; margin-bottom:25px; }
.name, .action { font-size:18px; font-family:Tahoma, Geneva, sans-serif; color:#09F; font-weight:bold; }
a { text-decoration:none; font-family:Tahoma, Geneva, sans-serif; color:#F00; font-size:10px;}
</style>
?>
<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  

<head>
    <meta charset="utf-8">
    <title>Best Price - Checkout Step 1</title>
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

    <body class=" checkout-page">

    <div class="master-wrapper">
    
    
    <div class="container">
        <div class="row">
            
            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span12">
                
                <div class="checkout-container">
                    <div class="row">
                    	<div class="span10 offset1">
                    	    
                    	    <!--  ==========  -->
							<!--  = Header =  -->
							<!--  ==========  -->
                    		<header>
                    		    <div class="row">
                    		    	<div class="span2">
                    		    		<a href="index.html"><img src="images/logo.png" alt="Webmarket Logo" width="48" height="48"/></a>
                    		    	</div>
                    		    	<div class="span6">
                    		    	    <div class="center-align">
                    		    	        <h1><span class="light">Review</span> Shopping Cart</h1>
                    		    	    </div>
                    		    	</div>
                    		    	<div class="span2">
                    		    	    <div class="right-align">
                    		    	    	<img src="images/buttons/92x65xsecurity.jpg.pagespeed.ic.0kRRD5XXok.jpg" alt="Security Sign" width="92" height="65"/>
                    		    	    </div>
                    		    	</div>
                    		    </div>
                    		</header>
                    		
                    		<!--  ==========  -->
							<!--  = Steps =  -->
							<!--  ==========  -->
                    		<div class="checkout-steps">
                    		    <div class="clearfix">
                    		    	<div class="step active">
                    		    	    <div class="step-badge">1</div>
                    		    	    Shopping Cart
                    		    	</div>
                    		    	<div class="step">
                    		    	    <div class="step-badge">2</div>
                    		    	    Shipping Address
                    		    	</div>
                    		    	<div class="step">
                                        <div class="step-badge">2</div>
                                        Payment Method
                                    </div>
                    		    	<div class="step">
                    		    	    <div class="step-badge">4</div>
                    		    	    Confirm &amp; Pay
                    		    	</div>
                    		    </div>
                    		</div> <!-- /steps -->
                    		
                    		<!--  ==========  -->
							<!--  = Selected Items =  -->
							<!--  ==========  -->
						
							 <table class="table table-items">
                                <thead>
                                    <tr >
                                        <th colspan="2">Item</th>
                                        <th><div class="align-center">Each Price</div></th>
                                        <th><div class="align-center">Quantity</div></th>
                                        <th><div class="align-right">Price</div></th>
                                    </tr>
                                </thead>
                                <tbody>
							          
                                    <?php

                                        $conn = mysqli_connect("localhost","root","","bestprice");
                                        if (mysqli_connect_errno())
                                        {
                                            $error = "!* MySQLi Connection was not established *!";
                                        //echo "MySQLi Connection was not established: " . mysqli_connect_error();
                                        }
                                        // checking the user
                                        if(isset($_POST['submit']))
                                        {
                                            $email = $_POST['submit'];
                                            $pq=0;

                                            $sum=0;
                                            $sel_user = "select * from addtocart where email='$email'";

                                            $ses_sql  = mysqli_query($conn,$sel_user);
                                            while($row = mysqli_fetch_assoc($ses_sql))
                                            {
                                            $id1=$row['id'];

                                            $pname=$row['pname'];
                                            $item=$row['item'];
                                            $rs=$row['rs'];
                                            $quantity=$row['quantity'];

                                            

                                            $pq=$rs * $quantity;
                                            $sum=$sum+$pq;

                                            ?>

                                     <tr class="show" >
                                        <td class="image"><img src=<?php echo $item;  ?> alt="" width="124" height="124"/></td>
                                        
                                        <td class="action">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pname;  ?>&nbsp; <a title="Remove Item" id="<?php echo $id1; ?>" class="delete" href="#">x</a></td>
                                        <td class="qty"> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rs;  ?> per 1
                                        </td>
                                        <td class="price">
                                          <?php echo $quantity;  ?> * <?php echo $rs;  ?> = ₹ <?php echo $pq;  ?>
                                        </td>
                                    </tr>
                                            <?php
                                                }

                                              }
                                              $sum=$sum+40;
                                            ?>     
							       
							        <tr>
							        	<td colspan="2" rowspan="2">
							        	    <div class="alert alert-info">
                                                <button data-dismiss="alert" class="close" type="button">×</button>
                                                Shipping costs are calculated based on location. <a href="#">More information</a>
                                            </div>
							        	</td>
							        	<td class="stronger">Shipping:</td>
							        	<td class="stronger"><div class="align-right">₹ 40</div></td>
							        </tr>
							        <tr>
							        	<td class="stronger">Subtotal:</td>
							        	<td class="stronger"><div class="size-16 align-right">₹ <?php echo $sum;  ?> </div></td>
							        </tr>
							    </tbody>
							</table>
							
							<hr/>
							  <form method="post" action="checkout-step-2.html">
							<p class="right-align">
                              
							    In the next step you will choose your shipping address &nbsp; &nbsp;
							    <button type="submit" name="submit" value="submit"  class="btn btn-primary higher bold">CONTINUE</a>
							</p>
                         </form>
                    	</div>

                    </div>
                </div>
                
                
            </section> <!-- /main content -->
        
        </div>
    </div> <!-- /container -->
    
    
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

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/checkout-step-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Oct 2014 12:52:48 GMT -->
</html>
<script src="jquery.js"></script>
<script type="text/javascript">
$(function() {
$(".delete").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info = 'id=' + del_id;
if(confirm("Are you sure you want to delete this?"))
{
 $.ajax({
   type: "POST",
   url: "sdelete.php",
   data: info,
   success: function(){
 }
});
  $(this).parents(".show").animate({ backgroundColor: "#003" }, "slow")
  .animate({ opacity: "hide" }, "slow");
 }
return false;
});
});
</script>