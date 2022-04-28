<header>




   <!-- Navigation -->
   <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse"
                class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="header_wrap">

            {{-- @auth
                DashBoard
            @else --}}
                
            <ul class="nav navbar-nav ">
                <li class="dropdown" id="fat-menu"> <a href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                        </a>
                    <ul class="dropdown-menu">

                        <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Login</a>
                        </li>

                        <li><a href="#signupform" data-toggle="modal" data-dismiss="modal">Register</a></li>

                    
                    </ul>
                </li>
            </ul>
            {{-- @endauth --}}
            <div class="header_search">
                <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
                <form action="#" method="get" id="header-search-form">
                    <input type="text" placeholder="Search..." class="form-control">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a> </li>
                <li><a href="/car-listing">Book Now</a></li> 
                {{-- <li><a href="/car-listing">Car Listing</a> --}}
                {{-- <li><a href="/tours">Tours</a></li> --}}

                <li class="dropdown">
                  <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                      About

                    </a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/about-us">About Us</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/contact-us">Contact Us</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="faq">FAQ</a></li>
                    <li role="presentation" class="divider"></li>

                  </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navigation end -->
</header>