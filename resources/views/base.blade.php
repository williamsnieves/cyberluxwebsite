<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable = no" />
	<title>@yield('title')</title>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	{!! HTML::style('css/fonts.css'); !!}
	{!! HTML::style('css/appstyles.css'); !!}
	{!! HTML::style('css/jquery.bxslider.css'); !!}
	{!! HTML::style('css/ekko-lightbox.min.css'); !!}
	{!! HTML::style('css/bttrlazyloading.min.css'); !!}
	{!! HTML::style('css/animate.min.css'); !!}
	{!! HTML::style('css/lightslider.css'); !!}
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css' />

	


	
</head>
<body>
	<!-- Preloader -->
	<div id="preloader">
	    <div id="status">&nbsp;</div>
	</div>
	<div id='slider'>
		<ul>
			<li><a href="{{ URL::to('/') }}/home">Inicio</a></li>
			<li><a href="{{ URL::to('/') }}/about">Nuestra Empresa</a></li>
			<li><a href="{{ URL::to('/') }}/products">Productos</a></li>
			<li><a href="{{ URL::to('/') }}/news">Noticias</a></li>
			<li><a href="{{ URL::to('/') }}/locations">Sedes</a></li>
			<li><a href="{{ URL::to('/') }}/gallery">Galería</a></li>
			<li><a href="{{ URL::to('/') }}/contact">Contáctenos</a></li>
		</ul>
	</div>

	<nav class="navbar navbar-mobile">
		<div class="brand-logo">
		  	  	<img src="{{ URL::to('/') }}/img/bg_brand.png" alt="brand" />
		  	  	<img src="{{ URL::to('/') }}/img/brand.png" alt="cyberlux" />
		</div>
		<div class="container">
			<span id="trigger" class="menu-hamburguer icon-th-menu">			
			</span>
		</div>
	</nav>
	<header class="container-fluid navbar-desktop">
		<section class="row">
			<img class="bg-brand" src="{{ URL::to('/') }}/img/bg-brand.png" alt="brand" />
			<nav class="navbar navbar-default custom-wrapper-navbar">
				<div class="brand-logo">				  	  	
				  	  	<img class="brand-shape" src="{{ URL::to('/') }}/img/bg-shape.png" alt="brand" />
				  	  	<img src="{{ URL::to('/') }}/img/brand-desktop.png" alt="cyberlux" />
				</div>
				<ul class="nav navbar-nav custom-nav-list">
			        <li class="active"><a href="{{ URL::to('/') }}/home">Inicio</a></li>
					<li><a href="{{ URL::to('/') }}/about">Nuestra Empresa</a></li>
					<li><a href="{{ URL::to('/') }}/products">Productos</a></li>
					<li><a href="{{ URL::to('/') }}/news">Noticias</a></li>
					<li><a href="{{ URL::to('/') }}/locations">Sedes</a></li>
					<li><a href="{{ URL::to('/') }}/gallery">Galería</a></li>
					<li><a href="{{ URL::to('/') }}/contact">Contáctenos</a></li>		       
			      </ul>
			</nav>
		</section>
	</header>
	
	
  	
	
	@yield('content')

	<footer>
		@include('footer')
	</footer>

	<!-- Scripts -->
	<!--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	{!! HTML::script('js/react.min.js'); !!}
	{!! HTML::script('js/JSXTransformer.js'); !!}	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>		
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
	{!! HTML::script('js/moment-es.js'); !!}
	{!! HTML::script('js/css3-mediaqueries.js'); !!}	
	{!! HTML::script('js/jquery.bttrlazyloading.min.js'); !!}
	{!! HTML::script('js/jquery.slidereveal.js'); !!}
	{!! HTML::script('js/jquery.bxslider.js'); !!}
	{!! HTML::script('js/ekko-lightbox.min.js'); !!}
	{!! HTML::script('js/test.js'); !!}
	{!! HTML::script('js/modal.js'); !!}
	{!! HTML::script('js/imageload.js'); !!}
	{!! HTML::script('js/jquery.bcSwipe.min.js'); !!}
	{!! HTML::script('js/lightslider.js'); !!}
	
	<script>
		//<![CDATA[
        $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(350).css({'overflow':'visible'});
        })
    //]]>
	</script>	

	<script>  
		$(document).ready(function() {  
		   $('.carousel').bcSwipe({ threshold: 50 });
		});  
	</script>

	<script>

		var size = $(window).width();

		/*if(size >= 1500){
			$(".container-fluid").addClass("container");
			$(".container").removeClass("container-fluid");
			$(".container-fluid").show();
		}

		$(window).resize(function() {
			var size = $(window).width();
			if(size >= 1500 ){				
				$(".container-fluid").addClass("container");
				$(".container").removeClass("container-fluid");
				$(".container-fluid").show();
			}
		})*/


		if(size < 1500 ){
			$(".container-fluid").removeClass("container");
			$(".container").addClass("container-fluid");
		}else{
			$(".container-fluid").addClass("container");
			$(".container").removeClass("container-fluid");
			$(".container-fluid").show();
		} 		
		$(window).resize(function() {
			var size = $(window).width();
			if(size < 1500 ){
				$(".container").addClass("container-fluid");
				$(".container-fluid").removeClass("container");
			}else{
				$(".container-fluid").addClass("container");
			$(".container").removeClass("container-fluid");
			$(".container-fluid").show();
			}
		})
	</script>
	@yield('footerscript')
</body>
</html>
