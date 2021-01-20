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
	<link rel="stylesheet" href="css/magnific-popup.css"/>
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
				<li class="active"><a href="#">{{$menu[0]->nomLien1}}</a></li>
				<li><a href="/service">{{$menu[0]->nomLien2}}</a></li>
				<li><a href="/blog">{{$menu[0]->nomLien3}}</a></li>
				<li><a href="/contact">{{$menu[0]->nomLien4}}</a></li>
				@if(auth::check() == false)
				<li><a href="/login">login</a></li>
				@elseif(auth::check() == true)
				<li>
				<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
				</li>
				@endif
				@auth
				@if(auth::user()->role_id == '2' || auth::user()->role_id == '3' || auth::user()->role_id == '4')
					<li><a href="/home">HomeAdmin</a></li>
				@endif
				@endauth
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="{{asset('img/'.$banniereLogoSlogan[0]->logo)}}" alt="">
				<p>{{$banniereLogoSlogan[0]->slogan}}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
		@foreach($banniereImg as $element)
			<div class="item  hero-item" data-bg="{{asset('img/'.$element->image)}}"></div>
		@endforeach
		</div>
	</div>
	<!-- Intro Section -->


	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach($serviceRandom as $element)
					<div class="col-md-4 col-sm-12">
						<div class="lab-card">
							<div class="icon">
								<i class="{{$element->iconeService}}"></i>
							</div>
							<h2>{{$element->titreService}}</h2>
							<p>{{$element->textService}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>{{$start}}<span>{{$slice}}</span>{{$end}}</h2>

				</div>
				<div class="row">
					<div class="col-md-6">
					<p>{{$presentation[0]->text1}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$presentation[0]->text2}}</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="/contact" class="site-btn">{{$presentation[0]->nomBoutton}}</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="{{asset('img/'.$video[0]->imageVideo)}}" alt="">
							<a href="{{$video[0]->srcVideo}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->


	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>{{$testimonialTitre[0]->titre}}</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach($testimonial as $element)
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>{{$element->commentaire}}</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{asset('img/avatar/'.$element->image)}}" alt="">
								</div>
								<div class="client-name">
									<h2>{{$element->nom}} {{$element->prenom}}</h2>
									<p>{{$element->poste}}</p>
								</div>
							</div>
						</div>
						@if($loop->iteration %6 == 0)
						</div>
						<div class="owl-carousel" id="testimonial-slide">
						@endif
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->


	<!-- Services section -->
	<div class="services-section spad" id='service'>
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
			<div class='text-center'>
				{{  $service->fragment('service')->links('vendor.pagination.bootstrap-4') }}
			</div>
			<div class="text-center">
				<a href="/service" class="site-btn">{{$serviceTitre[0]->nomBtn}}</a>
			</div>
		</div>
	</div>
	<!-- services section end -->


	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
			<h2>{{$startTeam}}<span>{{$sliceTeam}}</span>{{$endTeam}}</h2>
			</div>
			<div class="row">
				<!-- single member -->
				@foreach($teamRandom1 as $element)
				<div class="col-sm-4">
					<div class="member">
						<img src="{{asset('img/team/'.$element->imageTeam)}}" alt="">
						<h2>{{$element->nomTeam}} {{$element->prenomTeam}}</h2>
						<h3>{{$element->posteTeam}}</h3>
					</div>
				</div>
				@endforeach
				<div class="col-sm-4">
					<div class="member">
						<img src="{{asset('img/team/'.$choix[0]->choix->imageTeam)}}" alt="">
						<h2>{{$choix[0]->choix->nomTeam}} {{$choix[0]->choix->prenomTeam}}</h2>
						<h3>{{$choix[0]->choix->posteTeam}}</h3>
					</div>
				</div>
				@foreach($teamRandom2 as $element)
				<div class="col-sm-4">
					<div class="member">
						<img src="{{asset('img/team/'.$element->imageTeam)}}" alt="">
						<h2>{{$element->nomTeam}} {{$element->prenomTeam}}</h2>
						<h3>{{$element->posteTeam}}</h3>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>{{$ready[0]->readyTitre}}</h2>
					<p>{{$ready[0]->readySousTitre}}</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="/contact" class="site-btn btn-2">{{$ready[0]->readyBoutton}}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->


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
								<button class="site-btn" type='submit'>{{$contact[0]->btnContact}}</button>
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
