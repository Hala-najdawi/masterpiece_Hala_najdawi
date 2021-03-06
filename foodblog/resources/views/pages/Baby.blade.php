<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{__('Baby&Toddler')}}</title>
	<meta charset="UTF-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="../img/favicon.ico" rel="shortcut icon"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>
	<link rel="stylesheet" href="../css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="header-social">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					
				</div>
				
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<a href="/ar" class="site-logo">
				<h3 class="add-text ">{{__('Food Blog')}}</h3>
				</a>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				
				<ul class="main-menu">
					<!-- <li><a href="contact.html">{{__('Contact')}}</a></li>-->
					<li><a href="{{route('Sweets.index',app()->getlocale())}}">{{__('Sweets')}}</a></li>
					<li><a href="{{route('LunchBoxes.index',app()->getlocale())}}">{{__('Lunch Box')}}</a></li> 
					<li><a href="{{route('babies.index',app()->getlocale())}}">{{__('Baby&Toddler')}}</a></li>
					<li><a href="{{ url('/') }}">{{__('Home') }}</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="page-top-section set-bg" data-setbg='../img/page-top-bg.jpg'>
		<div class="container">
			
		 <img src="../img/page-top-bg.jpg"> 
		</div>
	</section>
	<!-- Hero section end -->
	<ul class="main-menu">
	                <li><a href="{{route('kids.index',app()->getlocale()) }}">{{__('Smoothie and milkshake')}}</a></li>  
	                <li><a href="{{route('babies.create',app()->getlocale()) }}">{{__('Baby')}}</a></li>
	                <li><a href="{{route('Rating.create',app()->getlocale()) }}">{{__('Toddler')}}</a></li>
					<!-- <li><a href="">'Baby&Toddler'</a></li>  -->
					
				</ul>

	<!-- Search section -->
	<div class="search-form-section">
		<div class="sf-warp">
			<div class="container">
				<form class="big-search-form" action="{{ route('kids.create',app()->getlocale()) }}" method="get">
					<input type="text" name="search" placeholder="Search Receipies"style="text-align:end;">
					<button class="bsf-btn">Search</button>
				</form>
			</div>
		</div>
	</div>
	<!-- Search section end -->


	<!-- Recipes section -->
	<section class="recipes-page spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="section-title text-right">
						<h2>{{__('Latest recipes')}}</h2>
					</div>
				</div>
			</div>
			<div class="row">
			@foreach($posts as $post)
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
					 <a href="{{route('babies.show',[app()->getlocale(),'id'=>$post->id]) }} "> 
						<img src="../{{$post->img}}" alt="" style="height:281px">
                          
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>{{$post->name}}</h3>
								<div class="rating">
									
									
								</div>

							</div>
						</div>
					</div>
				</div>
                </a>
				@endforeach
				
			</div>
			<div class="site-pagination">
			{{$posts->links()}}
			</div>
		</div>
	</section>
	<!-- Recipes section end -->


	<!-- Gallery section -->
	<div class="gallery">
		<div class="gallery-slider owl-carousel">
			<div class="gs-item set-bg" data-setbg="img/instagram/1.jpg"></div>
			<div class="gs-item set-bg" data-setbg="../img/instagram/2.jpg"></div>
			<div class="gs-item set-bg" data-setbg="../img/instagram/3.jpg"></div>
			<div class="gs-item set-bg" data-setbg="../img/instagram/4.jpg"></div>
			<div class="gs-item set-bg" data-setbg="../img/instagram/5.jpg"></div>
			<div class="gs-item set-bg" data-setbg="../img/instagram/6.jpg"></div>
		</div>
	</div>
	<!-- Gallery section end -->


	<!-- Footer section  -->
	<footer class="footer-section set-bg" data-setbg="../img/footer-bg.jpg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer-logo">
						<img src="img/logo.png" alt="">
					</div>
					<div class="footer-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
					
					</div>
				</div>
				<div class="col-lg-6 text-lg-right">
					<ul class="footer-menu">
					<li><a href="{{route('Sweets.index',app()->getlocale())}}">{{__('Sweets')}}</a></li>
					<li><a href="{{route('LunchBoxes.index',app()->getlocale())}}">{{__('Lunch Box')}}</a></li> 
					<li><a href="{{route('babies.index',app()->getlocale())}}">{{__('Baby&Toddler')}}</a></li>
					<li><a href="{{ url('/') }}">{{__('Home') }}</a></li>
					</ul>
					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>