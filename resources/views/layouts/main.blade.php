<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Anyar | Corporation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> 
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="shop/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="shop/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="shop/css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="shop/css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="shop/css/owl.carousel.min.css">
	<link rel="stylesheet" href="shop/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="shop/css/style.css">

	<!-- Modernizr JS -->
	<script src="shop/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
    @include('partials.loader')
	
	<div id="page">

		@include('partials.nav')
		
		@include('partials.aside')

		@include('partials.slider')
		
		@include('partials.products')

		@include('partials.feedback')

		@include('partials.dashboard')

		@include('partials.subscription')

		@include('partials.footer')

	</div>

	   @include('partials.arrow_up')
	
		<!-- jQuery -->
		<script src="shop/js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="shop/js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="shop/js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="shop/js/jquery.waypoints.min.js"></script>
		<!-- Carousel -->
		<script src="shop/js/owl.carousel.min.js"></script>
		<!-- countTo -->
		<script src="shop/js/jquery.countTo.js"></script>
		<!-- Flexslider -->
		<script src="shop/js/jquery.flexslider-min.js"></script>
		<!-- Main -->
		<script src="shop/js/main.js"></script>

	</body>
</html>

