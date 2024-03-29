<!DOCTYPE html>
<html lang="<?= APP_LANG ?>">
<head>

	<!-- Meta -->
<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> -->
	<meta charset="<?= APP_CHARSET ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Title -->
	<title><?=PAGE_TITLE?></title>
	<meta name="description" content="<?= (defined('PAGE_DESCR'))?PAGE_DESCR : PAGE_DESCR_DEFAUT ?>">

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/img/favicon.png">
	<link rel="apple-touch-icon" href="assets/img/favicon_60x60.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon_76x76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon_120x120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon_152x152.png">

	<!-- CSS Plugins -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/plugins/slick-carousel/slick/slick.css" />
	<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css" />
	<link rel="stylesheet" href="assets/plugins/animsition/dist/css/animsition.min.css" />

	<!-- CSS Icons -->
	<link rel="stylesheet" href="assets/css/themify-icons.css" />
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css" />

	<!-- CSS Theme -->
	<link id="theme" rel="stylesheet" href="assets/css/themes/theme-beige.min.css" />


	<!-- CSS CREATED -->
	<link href="assets/css/mystyle.css" rel="stylesheet">

</head>

<body>

<!-- Body Wrapper -->
<div id="body-wrapper" class="animsition">

	<!-- Header -->
	<header id="header" class="light">

		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<!-- Logo -->
					<div class="module module-logo dark">
						<a href="index.html">
							<img src="assets/img/logo-light.svg" alt="" width="88">
						</a>
					</div>
				</div>
				<div class="col-md-7">
					<!-- Navigation -->
					<nav class="module module-navigation left mr-4">
						<ul id="nav-main" class="nav nav-main">
							<li class="has-dropdown">
								<a href="#">Home</a>
								<div class="dropdown-container">
									<ul>
										<li><a href="index.html">Home Basic</a></li>
										<li><a href="index-burgers.html">Home Burgers</a></li>
										<li><a href="index-slider.html">Home Fullwidth Slider</a></li>
										<li><a href="index-video.html">Home Video</a></li>
									</ul>
								</div>
							</li>
							<li class="has-dropdown">
								<a href="#">About</a>
								<div class="dropdown-container">
									<ul class="dropdown-mega">
										<li><a href="page-about.html">About Us</a></li>
										<li><a href="page-services.html">Services</a></li>
										<li><a href="page-gallery.html">Gallery</a></li>
										<li><a href="page-reviews.html">Reviews</a></li>
										<li><a href="page-faq.html">FAQ</a></li>
									</ul>
									<div class="dropdown-image">
										<img src="assets/img/photos/dropdown-about.jpg" alt="">
									</div>
								</div>
							</li>
							<li class="has-dropdown">
								<a href="#">Menu</a>
								<div class="dropdown-container">
									<ul>
										<li class="has-dropdown">
											<a href="#">List</a>
											<ul>
												<li><a href="menu-list-navigation.html">Navigation</a></li>
												<li><a href="menu-list-collapse.html">Collapse</a></li>
											</ul>
										</li>
										<li class="has-dropdown">
											<a href="#">Grid</a>
											<ul>
												<li><a href="menu-grid-navigation.html">Navigation</a></li>
												<li><a href="menu-grid-collapse.html">Collapse</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li><a href="page-offers.html">Offers</a></li>
							<li><a href="page-contact.html">Contact</a></li>
							<li class="has-dropdown">   
								<a href="#">More</a>
								<div class="dropdown-container">
									<ul class="dropdown-mega">
										<li><a href="page-offer-single.html">Offer single</a></li>
										<li><a href="page-product.html">Product</a></li>
										<li><a href="book-a-table.html">Book a table</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="confirmation.html">Confirmation</a></li>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="blog-sidebar.html">Blog + Sidebar</a></li>
										<li><a href="blog-post.html">Blog Post</a></li>
										<li><a href="documentation.html">Documentation</a></li>
									</ul>
									<div class="dropdown-image">
										<img src="assets/img/photos/dropdown-more.jpg" alt="">
									</div>
								</div>
							</li>
						</ul>
					</nav>
					<div class="module left">
						<a href="menu-list-navigation.html" class="btn btn-outline-secondary"><span>Order</span></a>
					</div>
				</div>
				<div class="col-md-2">
					<a href="#" class="module module-cart right" data-toggle="panel-cart">
						<span class="cart-icon">
							<i class="ti ti-shopping-cart"></i>
							<span class="notification">2</span>
						</span>
						<span class="cart-value">$32.98</span>
					</a>
				</div>
			</div>
		</div>

	</header>
	<!-- Header / End -->

	<!-- Header -->
	<header id="header-mobile" class="light">

		<div class="module module-nav-toggle">
			<a href="#" id="nav-toggle" data-toggle="panel-mobile"><span></span><span></span><span></span><span></span></a>
		</div>    

		<div class="module module-logo">
			<a href="index.html">
				<img src="assets/img/logo-horizontal-dark.svg" alt="">
			</a>
		</div>

		<a href="#" class="module module-cart" data-toggle="panel-cart">
			<i class="ti ti-shopping-cart"></i>
			<span class="notification">2</span>
		</a>

	</header>
	<!-- Header / End -->

