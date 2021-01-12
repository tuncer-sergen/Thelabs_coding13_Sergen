<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="{{asset('img/mini-'.$banniereLogoSlogan[0]->logo)}}" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li><a href="/">{{$menu[0]->nomLien1}}</a></li>
				<li class="active"><a href="/service">{{$menu[0]->nomLien2}}</a></li>
				<li><a href="/blog">{{$menu[0]->nomLien3}}</a></li>
				<li><a href="/contact">{{$menu[0]->nomLien4}}</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Services</h2>
				<div class="page-links">
					<a href="/">Home</a>
					<span>{{$menu[0]->nomLien2}}</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
			<h2>{{$startService}}<span>{{$sliceService}}</span>{{$endService}}</h2>
			</div>
			<div class="row">
				<!-- single service -->
				@foreach($service as $element)
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="{{$element->iconeService}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$element->titreService}}</h2>
							<p>{{$element->textService}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="text-center">
				<a href="#servicePrimé" class="site-btn">{{$serviceTitre[0]->nomBtn}}</a>
			</div>
		</div>
	</div>
	<!-- services section end -->


	<!-- features section -->
	<div class="team-section spad" id='servicePrimé'>
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$startServicePrime}}<span>{{$sliceServicePrime}}</span>{{$endServicePrime}}</h2>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 features">
					<!-- feature item -->
					@foreach($servicePrime1 as $element)
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$element->titreService}}</h2>
							<p>{{$element->textService}}</p>
						</div>
						<div class="icon">
							<i class="{{$element->iconeService}}"></i>
						</div>
					</div>
					@endforeach
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<div class="col-md-4 col-sm-4 features">
					<!-- feature item -->
					@foreach($servicePrime2 as $element)
					<div class="icon-box light">
						<div class="icon">
							<i class="{{$element->iconeService}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$element->titreService}}</h2>
							<p>{{$element->textService}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="text-center mt100">
				<a href="" class="site-btn">{{$servicePrime[0]->btnServicePrime}}</a>
			</div>
		</div>
	</div>
	<!-- features section end-->


	<!-- services card section-->
	<div class="services-card-section spad">
		<div class="container">
			<div class="row">
				<!-- Single Card -->
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="img/card-1.jpg" alt="">
						</div>
						<div class="card-text">
							<h2>Get in the lab</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- Single Card -->
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="img/card-2.jpg" alt="">
						</div>
						<div class="card-text">
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- Single Card -->
				<div class="col-md-4 col-sm-12">
					<div class="sv-card">
						<div class="card-img">
							<img src="img/card-3.jpg" alt="">
						</div>
						<div class="card-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- services card section end-->


	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form">
						<input type="text" placeholder="Your e-mail here">
						<button class="site-btn btn-2">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->


	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
					<h2>{{$contact[0]->titreContact}}</h2>
					</div>
					<p>{{$contact[0]->textContact}}</p>
					<h3 class="mt60">{{$contact[0]->sousTitreContact}}</h3>
					<p class="con-item">{{$contact[0]->rueContact}} <br> {{$contact[0]->codePostalContact}} </p>
					<p class="con-item">{{$contact[0]->telContact}}</p>
					<p class="con-item">{{$contact[0]->emailContact}}</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form" action='/mailHome' method='POST'>
					@csrf
						<div class="row">
							<div class="col-sm-6">
							@if(Auth::check() == false)
								<input type="text" name="name" placeholder="Your name">
							@elseif(Auth::check())
								<input type="text" name="name" value='{{auth::user()->name}}'>
							@endif
							</div>
							<div class="col-sm-6">
							@if(Auth::check() == false)
								<input type="text" name="email" placeholder="Your email">
							@elseif(Auth::check())
								<input type="text" name="email" value='{{auth::user()->email}}'>
							@endif
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								<button class="site-btn">{{$contact[0]->btnContact}}</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->


	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
	</footer>
	<!-- Footer section end -->




	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
