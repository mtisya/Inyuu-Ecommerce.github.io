<?php
  include('express-stk.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
@import url(https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900);
@import url(https://fonts.googleapis.com/css?family=Source+Code+Pro:400,200,300,500,600,700,900);
</style>
<meta charset="UTF-8" />
<title>inStore Market</title>
<link href="images/cart-rnd.png" rel="icon" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/slideshow.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/carousel.css" media="screen" />
<link rel="stylesheet" type="text/css" href="js/colorbox/colorbox.css" media="screen" />
<!-- CSS Part End-->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<div class="main-wrapper">
  <!-- Header Start-->
  <header class="header-top-main">
    <section class="header-top">
      <div id="welcome">Welcome visitor you can <a href="login.html">login</a> or <a href="register.html">create an account</a>.</div>
      <div id="currency"> <a title="US Dollar"><b>$</b></a> <a title="Kenyan Shillings">KES</a> <a title="Ugandan Shillings">UGS</a> </div>
      <div id="language"> <a title="flagkenya"><img src="image/flags/flagkenya.png" alt="flagkenya" /></a> <a title="ugandanflag"><img src="image/flags/flaguganda.jpg" alt="ugandanflag" /></a> </div>
      <!-- Mini Cart Start-->
      <section id="cart">
        <div class="heading"> <a><span id="cart_total">3 item(s) - $305.00</span></a></div> 
      </section>
      <!-- Mini Cart End-->
      <div class="clear"></div>
    </section>
    <section id="header-main">
      <div id="header">
        <div id="logo"><a href="index-2.html"><img src="image/logo2.png" title="inStore HTML Template" alt="instore-html-template" /></a></div>
        <div class="links"> <a class="home" title="Home" href="index-2.html">Home</a> <a href="wishlist.html" id="wishlist-total">Wish List (4)</a> <a href="#">My Account</a> <a href="cart.html">Shopping Cart</a> <a href="checkout.html">Checkout</a> </div>
        <div id="search">
          <div class="button-search"></div>
          <input type="text" value="" placeholder="Search" id="filter_name" name="search">
        </div>
      </div>
    </section>
    <!-- Main Navigation Start-->
    <nav class="menu-main">
      <h3 class="menuarrow"><span>Menu</span></h3>
      <div id="menu">
        <ul>
          <li><a href="desktop_computers.html">Desktops</a>
            <div>
              <ul>
                <li><a href="product.html">Compq-Desktops (6)</a></li>
                <li><a href="product_dell.html">Dell-Desktops (4)</a></li>
                <li><a href="product_asus.html">ASUS-Desktops (12)</a></li>
                <li><a href="product_hp.html">HP-Desktops(11)</a></li>
              </ul>
            </div>
          </li>
          <li><a href="Laptops.html">Laptops</a>
            <div>
              <ul >
                <li><a href="appleLaptop.html">Apple Laptops (3)</a></li>
                <li><a href="dellLaptop.html">Dell-Laptops (5)</a></li>
                <li><a href="acerLaptop.html">ACER-Laptops(10)</a></li>
                <li><a href="lenovoLaptop.html">Lenovo-Laptops (6)</a></li>
              </ul>
            </div>
          </li>
          </li>
          <li><a href="components.html">Components</a>
            <div>
              <ul >
                <li><a href="mtrackballs.html">Mice and Trackballs</a></li>
                <li><a href="product_moniters.html">Monitors </a></li>
                <li><a href="printers.html">Printers &amp; Scanners </a></li>
                <li><a href="cameras.html">Cameras</a></li>
              </ul>
            </div>
          </li>
          <li><a href="tablets.html">Tablets</a> </li>
          <li><a href="phones.html">Phones &amp; PDAs</a> </li>
          <li><a href="cameras.html">Cameras</a> </li>
          <li><a href="50x.html">MP3 Players</a>
            <div>
              <ul>
                <li><a href="50x.html">Motorola (11)</a></li>
                <li><a href="50x.html">Siemens(13)</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>   
    </nav>
    <!-- Main  Navigation End-->
  </header>
  <!-- Header End-->
  <section class="wrapper">
    <div id="container">
      <!--Middle Part Start-->
    	<div id="content">
        <!--Breadcrumb Part Start-->
        <div class="breadcrumb"> <a href="index-2.html">Home</a> » <a href="#">Shopping Cart</a></div>
        <!--Breadcrumb Part End-->
        <h1>Checkout</h1>
        <div class="checkout">
          <div class="container">
    <form action='status.php' method='POST'>
    <div class="card__container">
        <div class="card">
            <div class="row">
              <img src="mpesa.png" style="width:30%;margin: 0 35%;">
              <p style="color:#8F92C3;line-height:1.7;">After receiving the payment confirmation message press "Confirm Payment" to finish your transaction.</p>     
            </div>
        </div>
    </div>
    <div class="button">
        <button type="submit"><i class="ion-locked"></i>Confirm Payment</button>
    </div>
    </form>
    	</div>
      	</div>
    <!--Middle Part End-->
    	</div>
    </div>
  </section>
  <div class="clear"></div>
  <!-- About Store information Start -->
   <section id="footer-top-outside">
    <div class="line-bottom">
      <div id="customHome" class="container_12">
        <div id="about_us_footer" class="grid_3">
          <h2>About InStore</h2>
          <img class="about_us_image" alt="small logo" src="image/product/logo_small.png"/>
          <p>Instore is Kenya's no. 1 online retailer, was established in May 2020 with the aim and vision to become the one-stop shop for retail in Kenya with implementation of best practices both online and offline..<br/>At inception we did an average delivery time of a week, today we do, on average, delivery in 1-5 days</p>
        </div>
        <!--  TWITTER -->
        <div id="twitter_footer" class="grid_3">
          <h2>Latest Tweets</h2>
          <ul id="twitter_update_list">
            <script type="text/javascript"
  src="../../../twitter.com/javascripts/blogger.js"></script>
            <script
  type="text/javascript" src="https://api.twitter.com/1/statuses/user_timeline.json?screen_name=harnishdesign&amp;callback=twitterCallback2&amp;count=2"></script>
          </ul>
        </div>
        <div id="contact_footer" class="grid_3">
          <h2>Contact Us</h2>
          <ul>
            <li>
              <!-- TELEPHONE -->
              <ul id="tel" class="contact_column">
                <li id="footer_telephone">+254 714795773</li>
                <li id="footer_telephone2">+254 714795773</li>
              </ul>
              <!-- FAX  -->
              <ul id="fax" class="contact_column">
                <li id="footer_fax">+254 785267980</li>
              </ul>
              <!-- EMAIL -->
              <ul id="mail" class="contact_column">
                <li id="footer_email">samtis2010@gmail.com</li>
                <li id="footer_email2">info@mutisya.com</li>
              </ul>
              <!-- SKYPE -->
              <ul id="skype" class="contact_column">
                <li id="footer_skype">Mutisyadesign</li>
              </ul>
            </li>
          </ul>
        </div>
        <!--  FACEBOOK -->
        <div id="facebook_footer" class="grid_3">
          <h2>Facebook</h2>
          <div class="facebook-outer">
            <div id="facebook" >
              <div id="fb-root"></div>
              <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../../../connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
              <div class="fb-like-box" data-href="http://www.facebook.com/160281810726316" data-width="240" data-connections="9" data-height="200" data-show-faces="true" data-stream="false" data-header="false" data-border-color="#fff"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="line-bottom1"></div>
  </section>
  <!-- About Store information End-->
</div>
<!--Footer Part Start-->
<footer id="footer-main">
  <div id="footer">
    <div class="column">
      <h3>Information</h3>
      <ul>
        <li><a href="about-us.html">About Us</a></li>
        <li><a href="about-us.html">Delivery Information</a></li>
        <li><a href="about-us.html">Privacy Policy</a></li>
      </ul>
    </div>
    <div class="column">
      <h3>Customer Service</h3>
      <ul>
        <li><a href="contact-us.html">Contact Us</a></li>
        <li><a href="sitemap.html">Site Map</a></li>
      </ul>
    </div>
    <div class="column">
      <h3>Extras</h3>
      <ul>
        <li><a href="#">Brands</a></li>
        <li><a href="#">Gift Vouchers</a></li>
        <li><a href="#">Specials</a></li>
      </ul>
    </div>
    <div class="column">
      <h3>My Account</h3>
      <ul>
        <li><a href="#">My Account</a></li>
        <li><a href="#">Wish List</a></li>
        <li><a href="#">Newsletter</a></li>
      </ul>
    </div>
  </div>
  <div class="powered-main">
    <div id="powered">
      <div class="fl"><a href="#">InStore Market Website</a> &copy; 2020</div>
      Designed By <a target="_blank" href="https://mutisoftwares.co.ke/">MutiSoftwares 0714795773</a>
      <div class="back-to-top" id="back-top"><a title="Back to Top" href="javascript:void(0)" class="backtotop">Top</a></div>
    </div>
  </div>
</footer>
<!--Footer Part End-->
<!-- JS Part Start-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- JS Part End-->
</body>
</html>