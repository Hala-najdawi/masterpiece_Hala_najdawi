<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{__('recipe-single')}}</title>
	<meta charset="UTF-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="../img/favicon.ico" rel="shortcut icon"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">
     <!-- add icon -->
	 <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="../../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../../css/owl.carousel.css"/>
	<link rel="stylesheet" href="../../css/animate.css"/>
	<link rel="stylesheet" href="../../css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
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
				
				<ul class="main-menu">
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
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
        <img src="../../img/page-top-bg.jpg">
		
		</div>
	</section>
	<div class="header-bottom">
			<div class="container">
				
				<ul class="main-menu">
	                <li><a href="{{route('kids.index',app()->getlocale()) }}">{{__('Smoothie and milkshake')}}</a></li> 
	                <li><a href="{{route('babies.create',app()->getlocale())}}">{{__('Baby')}}</a></li>
	                <li><a href="{{route('Rating.create',app()->getlocale()) }}">{{__('Toddler')}}</a></li>
					<li><a href="{{route('LunchBoxes.create',app()->getlocale()) }}">{{__('biscuits&cake')}}</a></li>  
	                <li><a href="{{route('Sweets.create',app()->getlocale()) }}">{{__('jelly')}}</a></li>	
				</ul>
				
			</div>
		</div>
	<!-- Hero section end -->


	<!-- Search section -->
	<div class="search-form-section">
		<div class="sf-warp">
			<div class="container">
				<form class="big-search-form" action="{{ route('kids.create',app()->getlocale()) }}" method="get">
					<input type="text" placeholder="Search Receipies" name="search" style="text-align:end;">
					<button class="bsf-btn">Search</button>
				</form>
			</div>
		</div>
	</div>
	<!-- Search section end -->

	
	<!-- Recipe big view -->
	
	<div style="text-align:center" >
        <div class="rv-warp set-bg  ">
        <img src="../../{{$post->img}}" style="width:1024px;height:683px;"></div>
	</div>
      
	<!-- Recipe details section -->
	<section class="recipe-details-section">
		<div class="container">
			<div class="recipe-meta">
				<div class="racipe-cata">
					<span>{{__('info')}}</span>
				</div>
				<h2>{{$post->name}}</h2>
				<p>{{$post->info}}</p>
				
				
			</div>
			<div class="row">
			
				<div class="col-lg-7">
					<ul class="recipe-info-list">
					@foreach  (explode("\n",$post->methods ) as $method) 
						<li>
							
							<p>{{$method}}</p>
						</li>
					@endforeach
					</ul>
				</div>
				<div class="col-lg-5">
					<div class="recipe-filter-warp">
						<div class="filter-top">
							<div class="filter-top-text">
							<h2>{{__('Ingredients')}}</h2>
							</div>
						</div>
						<!-- recipe filter form -->
						<div class="filter-form-warp">
							<form class="filter-form">
								  @foreach  (explode("\n",$post->ingredient ) as $value)      
								<div class="check-warp" style="text-align: right;">
									<input type="checkbox" id="one">
									<label for="one">
									{{$value}}
									</label>
								</div>
								@endforeach
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Recipe details section end -->


	<!-- Comment section -->
	<section class="comment-section spad pt-0">
		<div class="container">
	
	
  
   <form  name="fbCommentCountform" id="fbCommentCountForm" action="{{ route('babies.update',[app()->getlocale(),'id'=>$post->id]) }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="VisitCount" style="display: none;" value="{{$post->like_count}}" id="postvisitcount" style="_display">
	<button style="height: 59px;
    font-size: 14px;
    color: #fff;
    min-width: 132px;
    background: #ff2a6b;"><i class='fas fa-heart'></i></button>
  </form> 
  
			<h4 style="text-align: right;">{{__('Leave a comment')}}</h4>
			
<div id="fb-root"></div>
<div  id="facebookCommentContainer">
<div id="fbCommentCount" style="display: none;">
    <span class="fb-comments-count" data-href="{{ Request::url() }}"></span>
  </div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v5.0"></script>
<div class="fb-comments" data-href="http://127.0.0.1:8000/1/babies/ar/{{$post->id}}" data-width="" data-numposts="10"></div>
		</div>
		</div>
	</section>
	<!-- Comment section -->


	<!-- Gallery section -->
	<div class="gallery">
		<div class="gallery-slider owl-carousel">
			<div class="gs-item set-bg" data-setbg="img/instagram/1.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/2.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/3.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/4.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/5.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/6.jpg"></div>
		</div>
	</div>
	<!-- Gallery section end -->


	<!-- Footer section  -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
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
	<script>
	
    setTimeout(function() {
	
      let visitcount=document.getElementById("postvisitcount").value;
	  let visitcountplusone=parseInt(visitcount)+1;
	  document.getElementById("postvisitcount").value=visitcountplusone;
      var $formVar = $('form');
     
      });
	   
	  </script>

</body>
</html>