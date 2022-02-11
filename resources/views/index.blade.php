<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Epic Car Rental Portal</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/user.css">
<link rel="stylesheet" href="assets/w3css/w3.css">

<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>

<!-- Start Switcher -->
@include('includes/colorswitcher')
<!-- /Switcher -->  
        
<!--Header-->
@include('includes/header')
<!-- /Header --> 

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>Find the right car for you.</h1>
            <p>We have more than a thousand cars for you to choose. </p>
            <a href="#" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>CarForYou</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Car</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">


            {{-- <div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
              <h3 style="text-align:center;">Available Cars</h3>
      <br>
              <section class="menu-content">
                              <a href="1">
                  <div class="sub-menu">
                  
      
                  <img class="card-img-top" src="assets/img/cars/audi-a4.jpg" alt="Card image cap">
                  <h5><b> Audi A4 </b></h5>
                  <h6> AC Fare: Rs. 36/km &amp; Rs.5200/day</h6>
                  <h6> Non-AC Fare: Rs. 26/km &amp; Rs.2600/day</h6>
      
                  
                  </div> 
                  </a>
                              <a href="2">
                  <div class="sub-menu">
                  
      
                  <img class="card-img-top" src="assets/img/cars/creta.jpg" alt="Card image cap">
                  <h5><b> Hyundai Creta </b></h5>
                  <h6> AC Fare: Rs. 22/km &amp; Rs.2900/day</h6>
                  <h6> Non-AC Fare: Rs. 12/km &amp; Rs.1400/day</h6>
      
                  
                  </div> 
                  </a>
                              <a href="3">
                  <div class="sub-menu">
                  
      
                  <img class="card-img-top" src="assets/img/cars/bmw6.jpg" alt="Card image cap">
                  <h5><b> BMW 6-Series </b></h5>
                  <h6> AC Fare: Rs. 39/km &amp; Rs.6950/day</h6>
                  <h6> Non-AC Fare: Rs. 30/km &amp; Rs.5999/day</h6>
      
                  
                  </div> 
                  </a>
                              <a href="4">
                  <div class="sub-menu">
                  
      
                  <img class="card-img-top" src="assets/img/cars/mcec.jpg" alt="Card image cap">
                  <h5><b> Mercedes-Benz E-Class </b></h5>
                  <h6> AC Fare: Rs. 45/km &amp; Rs.7200/day</h6>
                  <h6> Non-AC Fare: Rs. 30/km &amp; Rs.5200/day</h6>
      
                  
                  </div> 
                  </a>
                              <a href="6">
                  <div class="sub-menu">
                  
      
                  <img class="card-img-top" src="assets/img/cars/ecosport.png" alt="Card image cap">
                  <h5><b> Ford EcoSport </b></h5>
                  <h6> AC Fare: Rs. 21/km &amp; Rs.3890/day</h6>
                  <h6> Non-AC Fare: Rs. 13/km &amp; Rs.2600/day</h6>
      
                  
                  </div> 
                  </a>
                              <a href="8">
                  <div class="sub-menu">
                  
      
                  <img class="card-img-top" src="assets/img/cars/rangero.jpg" alt="Card image cap">
                  <h5><b> Land Rover Range Rover Sport </b></h5>
                  <h6> AC Fare: Rs. 36/km &amp; Rs.6000/day</h6>
                  <h6> Non-AC Fare: Rs. 26/km &amp; Rs.4600/day</h6>
      
                  
                  </div> 
                  </a>
                              <a href="9">
                  <div class="sub-menu">
                  
      
                  <img class="card-img-top" src="assets/img/cars/mghector.jpg" alt="Card image cap">
                  <h5><b> MG Hector </b></h5>
                  <h6> AC Fare: Rs. 20/km &amp; Rs.2900/day</h6>
                  <h6> Non-AC Fare: Rs. 12/km &amp; Rs.1400/day</h6>
      
                  
                  </div> 
                  </a>
                              <a href="10">
                  <div class="sub-menu">
                  
      
                  <img class="card-img-top" src="assets/img/cars/hondacr.jpg" alt="Card image cap">
                  <h5><b> Honda CR-V </b></h5>
                  <h6> AC Fare: Rs. 22/km &amp; Rs.2850/day</h6>
                  <h6> Non-AC Fare: Rs. 15/km &amp; Rs.1400/day</h6>
      
                  
                  </div> 
                  </a>
                              <a href="11">
                  <div class="sub-menu">
                  
      
                  <img class="card-img-top" src="assets/img/cars/Mahindra XUV.jpg" alt="Card image cap">
                  <h5><b> Mahindra XUV 500 </b></h5>
                  <h6> AC Fare: Rs. 15/km &amp; Rs.3000/day</h6>
                  <h6> Non-AC Fare: Rs. 13/km &amp; Rs.2600/day</h6>
      
                  
                  </div> 
                  </a>
                              <a href="12">
                  <div class="sub-menu">
                  
      
                  <img class="card-img-top" src="assets/img/cars/Fortuner.png" alt="Card image cap">
                  <h5><b> Toyota Fortuner </b></h5>
                  <h6> AC Fare: Rs. 16/km &amp; Rs.3200/day</h6>
                  <h6> Non-AC Fare: Rs. 14/km &amp; Rs.2800/day</h6>
      
                  
                  </div> 
                  </a>
                              <a href="13">
                  <div class="sub-menu">
                  
      
                  <img class="card-img-top" src="assets/img/cars/hyundai0.png" alt="Card image cap">
                  <h5><b> Hyundai Veloster </b></h5>
                  <h6> AC Fare: Rs. 23/km &amp; Rs.4500/day</h6>
                  <h6> Non-AC Fare: Rs. 15/km &amp; Rs.3500/day</h6>
      
                  
                  </div> 
                  </a>
                              <a href="14">
                  <div class="sub-menu">
                  
      
                  <img class="card-img-top" src="assets/img/cars/jaguarxf.jpg" alt="Card image cap">
                  <h5><b> Jaguar XF </b></h5>
                  <h6> AC Fare: Rs. 39/km &amp; Rs.6100/day</h6>
                  <h6> Non-AC Fare: Rs. 29/km &amp; Rs.4380/day</h6>
      
                  
                  </div> 
                  </a>
                                                    
              </section>
                          
          </div> --}}

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=" "><img src="cars/img4.jpeg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>2012</li>
<li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href=" ">Mazda , Demio</a></h6>
<span class="price">$20 /Day</span> 
</div>
<div class="inventory_info_m">
<p>Compact</p>
</div>
</div>
</div>




<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=""><img src="cars/img2.jpeg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>2016</li>
<li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="">Mazda , Cx5</a></h6>
<span class="price">$80 /Day</span> 
</div>
<div class="inventory_info_m">
<p>SUV</p>
</div>
</div>
</div>



<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=""><img src="cars/img5.jpeg" style="height: 220px; width:100%" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>2005</li>
<li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="">Mitsubishi , gallant</a></h6>
<span class="price">$20 /Day</span> 
</div>
<div class="inventory_info_m">
<p>Sedan</p>
</div>
</div>
</div>

<div class="col-list-3">
  <div class="recent-car-list">
  <div class="car-info-box"> <a href=""><img src="cars/img6.jpeg" style="height: 220px;  width:100%" class="img-responsive" alt="image"></a>
  <ul>
  <li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
  <li><i class="fa fa-calendar" aria-hidden="true"></i>2015</li>
  <li><i class="fa fa-user" aria-hidden="true"></i>7 seats</li>
  </ul>
  </div>
  <div class="car-title-m">
  <h6><a href="">Toyota , Voxy</a></h6>
  <span class="price">$40 /Day</span> 
  </div>
  <div class="inventory_info_m">
  <p>Mini-Van</p>
  </div>
  </div>
  </div>



<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=" "><img src="cars/img1.jpeg" style="height: 220px; width:100%" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>2012</li>
<li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href=" ">Nissan , Sylphy</a></h6>
<span class="price">$33 /Day</span> 
</div>
<div class="inventory_info_m">
<p>Sedan</p>
</div>
</div>
</div> 
       
      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat --> 

<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>
            <p>Years In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
            <p>New Cars For Sale</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
            <p>Used Cars For Sale</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>
            <p>Satisfied Customers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 


<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Our Satisfied <span>Customers</span></h2>
    </div>
    <div class="row">
      <div id="testimonial-slider" class="owl-carousel owl-theme" style="opacity: 1; display: block;">


        <div class="owl-wrapper-outer">
        <div class="owl-wrapper" style="width: 2340px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);">
        <div class="owl-item" style="width: 585px;">
        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="assets/images/cat-profile.png" alt=""> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5>Tom K</h5>
            <p>Test Test</p>
          </div>
        </div>
        </div>
        </div>
        <div class="owl-item" style="width: 585px;"><div class="testimonial-m">
          <div class="testimonial-img"> <img src="assets/images/cat-profile.png" alt=""> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5>Tom K</h5>
            <p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilis</p>
          </div>
        </div>
        </div></div></div></div>
        

        
                
       
  
      <div class="owl-controls clickable" style="display: none;"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div></div></div></div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Testimonial--> 


<!--Footer -->
@include('includes/footer')
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
@include('includes/login')
<!--/Login-Form --> 

<!--Register-Form -->
@include('includes/registration')

<!--/Register-Form --> 

<!--Forgot-password-Form -->
@include('includes/forgotpassword')
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>