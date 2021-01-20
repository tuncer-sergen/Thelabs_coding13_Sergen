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
	<!-- <div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div> -->


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
				<li><a href="/service">{{$menu[0]->nomLien2}}</a></li>
				<li class="active"><a href="#">{{$menu[0]->nomLien3}}</a></li>
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


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Blog</h2>
				<div class="page-links">
					<a href="/">Home</a>
					<span>{{$menu[0]->nomLien3}}</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Post item -->
					@foreach($article as $element)
					@if($element->confirmer == true)
					<div class="post-item">
						<div class="post-thumbnail">
							<img src="{{asset('img/blog/'.$element->imageBlog)}}" alt="">
							<div class="post-date">
								<h3>{{$element->date}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$element->titreBlog}}</h2>
							<div class="post-meta">
								<div>
								<p><u>tags</u> :</p>
									@foreach($element->tag as $item)
										<a href="">{{$item->tag}}</a>
									@endforeach
								</div>
								<div>
								<p><u>categorie</u> :</p>
									@foreach($element->categorie as $item)
										<a href="">{{$item->categorie}}</a>
									@endforeach
								</div>
								<div>
									<p><u>commentaire</u> :</p>
									<div style="display: none;">{{$a=0}}</div>

                                @foreach($com as $elem)
                                @if ($elem->blog_id == $element->id)
                                <div style="display: none;">{{$a++}}</div>
                                @endif
                                @endforeach
                                <a href="">{{$a}} Comments</a>
								</div>
							</div>
							<p>{{$element->descriptionBlog}}</p>
							<a href="/blog-post/{{$element->id}}" class="read-more">Read More</a>
						</div>
					</div>
					@endif
					@endforeach
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
						@foreach($catRandom as $element)
							<li><a href="#">{{$element->categorie}}</a></li>
						@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
						@foreach($tagRandom as $element)
							<li><a href="">{{$element->tag}}</a></li>
						@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->


	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form class="nl-form" action='/newsLetter' method='POST'>
					@csrf
						<input type="text" placeholder="Your e-mail here" name='email'>
						<button class="site-btn btn-2">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->


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
