<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Foodcycled</title>
  
  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="{{ asset('plugins/slick-carousel/slick/slick.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="{{ asset('plugins/fancybox/jquery.fancybox.pack.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css') }}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
  <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <link href="{{ asset('css/index-landingpage/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/index-landingpage/landing-page.css') }}" rel="stylesheet">
  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('css/about2.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/about_responsive.css') }}">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    
  <link href="{{ asset('css/search2.css') }}" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Space+Mono" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 

<style>
.pheader {
    font-family: 'Lato', sans-serif;
}

.hheader {
    font-family: 'Open Sans', sans-serif;
}

.newfam {
  font-family: 'Dosis', serif;
}

.login-button {
  border: 0px !important;
}
#clients {
  padding: 30px 0;
}

#clients img {
  max-width: 100%;
  opacity: 0.5;
  transition: 0.3s;
  padding: 15px 0;
}

#clients img:hover {
  opacity: 1;
}

#clients .owl-nav,
#clients .owl-dots {
  margin-top: 5px;
  text-align: center;
}

#clients .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd;
}

#clients .owl-dot.active {
  background-color: rgb(49, 108, 232);;
}

</style>
</head>

<body class="body-wrapper">


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg  navigation">
					<a class=" navbar-brand" href="/">
						<h2 class="newfam" style="color: #ff6a5b; font-weight: bold;">FOODCYCLED</h2>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link pheader" style="" href="/">Home</a>
							</li>
							<li style="margin-left: 15px; font-size: 55px; font-weight: 500;" class="nav-item">
								<a class="nav-link pheader" href="/tickets">Food Tickets</a>
							</li>
							<li style="margin-left: 15px; font-size: 55px; font-weight: 500;" class="nav-item pheader">
								<a class="nav-link" href="/pantries">Food Pantries</a>
							</li>
						
						</ul>
						<ul   class=" navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a style="font-weight: 500; font-size: 15px;" class="pheader nav-link" href="/register">Sign Up</a>
							</li>
							<li class="nav-item">
								<a style="font-weight: 500; font-size: 15px;" class="pheader nav-link" href="/login">Login</a>
							</li>
							<li style="margin-left: 40px" class="nav-item">
								<a  style="font-weight: bold; font-size: 15px; background: #fff; color:  #ff6a5b;"class="newfam nav-link" href="/donation"><i class="fa fa-plus-circle"></i> Donate Meal/Ticket</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

@yield('content')


<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <h1 style="color: #ff6a5b">FOODCYCLED</h1>
          <!-- description -->
          <p class="alt-color" style="color: #747474; font-weight: 450px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-3 offset-lg-1 col-md-3">
        <div class="block">
          <h4 style="color: #000; font-weight: 350px;">Pages</h4>
          <ul>
            <li><a style="font-weight: 450px;" href="/about">About Us</a></li>
            <li><a style="font-weight: 450px;" href="/programs">Programs</a></li>
            <li><a style="font-weight: 450px;" href="/contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
    
     
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p style="font-weight: 450px;">Copyright © 2019. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12" style="margin-top: 50px; ">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

  <!-- JAVASCRIPTS -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('plugins/tether/js/tether.min.js') }}"></script>
  <script src="{{ asset('plugins/raty/jquery.raty-fa.js') }}"></script>
  <script src="{{ asset('js/vendor.bundle.base.js') }}"></script>

  <script src="{{ asset('plugins/bootstrap/dist/js/popper.min.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js') }}"></script>
  <script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}"></script>
  <script src="{{ asset('plugins/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('plugins/fancybox/jquery.fancybox.pack.js') }}"></script>
  <script src="{{ asset('plugins/smoothscroll/SmoothScroll.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="{{ asset('js/scripts.js') }}"></script>

  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/magnific-popup/magnific-popup.min.js') }}"></script>
  <script src="{{ asset('lib/sticky/sticky.js') }}"></script>


  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main2.js') }}"></script>


</body>

</html>

