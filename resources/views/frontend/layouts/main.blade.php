<!DOCTYPE HTML>
<html>
	<head>
	@include('googletagmanager::head')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Anyar | Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	@include('googletagmanager::body')
		
    @include('frontend.partials.loader')
	
	<div id="page">

		@include('frontend.partials.nav')
		
		@include('frontend.partials.aside')

		@include('frontend.partials.slider')
		
		@yield('products')

		@include('frontend.partials.feedback')

		@include('frontend.partials.dashboard')

		@include('frontend.partials.subscription')

		@include('frontend.partials.footer')

	</div>

	   @include('frontend.partials.arrow_up')
	
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
		{{-- google adsense --}} 
		<script data-ad-client="ca-pub-5980092772114657" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	</body>
</html>

