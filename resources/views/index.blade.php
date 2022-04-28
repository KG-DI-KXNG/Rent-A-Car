<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>KGE Car Rental</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all"
        data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
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
                            <p>Quality rentals when you choose our Exclusive brand. </p>
                            <a href="/car-listing" class="btn">Rent Now <span class="angle_arrow"><i
                                        class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                        </div>
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
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                    believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                    anything embarrassing hidden in the middle of text.</p>
            </div>
            <div class="row">

                <!-- Nav tabs -->
                <div class="recent-tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#resentnewcar" role="tab"
                                data-toggle="tab">New Car</a></li>
                    </ul>
                </div>
                <!-- Recently Listed New Cars -->
                <div id="sec2"
                    style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
                    <h3 style="text-align:center;">Available Cars</h3>
                    <br>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="resentnewcar">


                        @foreach ($vehicle as $car)
                            
                        <div class="col-list-3">
                            <div class="recent-car-list">
                                <div class="car-info-box"> <a href=" "><img src="/storage/{{$car->image[0]->image_name}}"
                                            class="img-responsive" alt="image" style="height: 220px; width:100%"></a>
                                    <ul>
                                        <li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$car->year}}</li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i>{{$car->capacity}} seats</li>
                                    </ul>
                                    <span>
                                        <a href="cardetail/{{$car->id}}" class="btn animate__animated     animate__headShake">Rent Now <div class="angle_arrow"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></div></a>
                                    </span>
                                </div>
                                <div class="car-title-m">
                                    <h6><a href=" ">{{$car->Make. ', '. $car->Model}}</a></h6>
                                    <span class="price" style="font-size: 12px;">${{$car->price}} /Day</span>
                                </div>
                                <div class="inventory_info_m">
                                    <p>{{$car->category->type}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach




                        {{-- <div class="col-list-3">
                            <div class="recent-car-list">
                                <div class="car-info-box"> <a href=""><img src="cars/img2.jpeg" class="img-responsive"
                                            alt="image"></a>
                                    <ul>
                                        <li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2016</li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
                                    </ul>
                                    <span>
                                        <a href="#" class="btn animate__animated     animate__headShake">Rent Now <div class="angle_arrow"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></div></a>
                                    </span>
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
                                <div class="car-info-box"> <a href=""><img src="cars/img5.jpeg"
                                            style="height: 220px; width:100%" class="img-responsive" alt="image"></a>
                                    <ul>
                                        <li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2005</li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
                                    </ul>
                                    <span>
                                        <a href="#" class="btn animate__animated     animate__headShake">Rent Now <div class="angle_arrow"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></div></a>
                                    </span>
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
                                <div class="car-info-box"> <a href=""><img src="cars/img6.jpeg"
                                            style="height: 220px;  width:100%" class="img-responsive" alt="image"></a>
                                    <ul>
                                        <li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2015</li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i>7 seats</li>
                                    </ul>
                                    <span>
                                        <a href="#" class="btn animate__animated     animate__headShake">Rent Now <div class="angle_arrow"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></div></a>
                                    </span>
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
                                <div class="car-info-box"> <a href=""><img src="cars/img3.jpeg"
                                            style="height: 220px;  width:100%" class="img-responsive" alt="image"></a>
                                    <ul>
                                        <li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2015</li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i>7 seats</li>
                                    </ul>
                                    <span>
                                        <a href="#" class="btn animate__animated     animate__headShake">Rent Now <div class="angle_arrow"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></div></a>
                                    </span>
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
                                <div class="car-info-box"> <a href=" "><img src="cars/img1.jpeg"
                                            style="height: 220px; width:100%" class="img-responsive" alt="image"></a>
                                    <ul>
                                        <li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2012</li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
                                    </ul>
                                    <span>
                                        <a href="#" class="btn animate__animated     animate__headShake">Rent Now <div class="angle_arrow"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></div></a>
                                    </span>
                                </div>
                                <div class="car-title-m">
                                    <h6><a href=" ">Nissan , Sylphy</a></h6>
                                    <span class="price">$33 /Day</span>
                                </div>
                                <div class="inventory_info_m">
                                    <p>Sedan</p>
                                </div>
                            </div>
                        </div> --}}

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
                            {{-- <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2> --}}
                            <p>Child Seat Upgrade</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6 col-sm-3">
                    <div class="fun-facts-m">
                        <div class="cell">
                            {{-- <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2> --}}
                            <p>GPS Upgrade</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6 col-sm-3">
                    <div class="fun-facts-m">
                        <div class="cell">
                            {{-- <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2> --}}
                            <p>VIP Pickup</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6 col-sm-3">
                    <div class="fun-facts-m">
                        <div class="cell">
                            {{-- <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2> --}}
                            <p>Multiple Pickup Location</p>
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
                        <div class="owl-wrapper"
                            style="width: 2340px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                            <div class="owl-item" style="width: 585px;">
                                <div class="testimonial-m">
                                    <div class="testimonial-img"> <img src="assets/images/cat-profile.png" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-heading">
                                            <h5>Tom K</h5>
                                            <p>Test Test</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 585px;">
                                <div class="testimonial-m">
                                    <div class="testimonial-img"> <img src="assets/images/cat-profile.png" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-heading">
                                            <h5>Tom K</h5>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc
                                                varius facilis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="owl-controls clickable" style="display: none;">
                        <div class="owl-pagination">
                            <div class="owl-page active"><span class=""></span></div>
                        </div>
                    </div>
                </div>
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
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a>
    </div>
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

</html>
