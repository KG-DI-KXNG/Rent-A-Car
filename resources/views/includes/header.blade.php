<header>
  <nav id="navbar-example" class="navbar navbar-default navbar-static">
    <div class="container-fluid">
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar">Yes</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Epic Car Rentals</a>
      </div>
      <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a id="drop1" href="#" class="dropdown-toggle" style="color:black;" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                Vehicles
                <span class="caret"></span>
              </a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sedan</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mini-Van</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Coupe</a></li>
              <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hatchback</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a id="drop2" href="#" class="dropdown-toggle" style="color:black;" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                About
                <span class="caret"></span>
              </a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Contact Us</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">FAQ</a></li>
              <li role="presentation" class="divider"></li>
              {{-- <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li> --}}
            </ul>
          </li>
        </ul>
       <ul class="nav navbar-nav navbar-right">
         <li>
           <a href="" style="color:red">Home</a>
         </li>
       </ul>
        <ul class="nav navbar-nav navbar-right">
          <li id="fat-menu" class="dropdown">
            <a id="drop3" href="#" class="dropdown-toggle" style="color:black;" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                Account
                {{-- <span class="caret"></span> --}}
              </a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="/login">Login</a></li>
              <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="/register">Register</a></li>
              {{-- <li role="presentation"><a role="menuitem" tabindex="-1" href="">Browse as Guest</a></li> --}}
              {{-- <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li> --}}
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.nav-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>


</header>