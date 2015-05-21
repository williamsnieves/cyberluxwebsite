<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
	
	
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	{!! HTML::style('css/appstyles.css'); !!}
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body>
	<div id='slider'>
		<ul>
			<li><a href="{{ URL::to('/') }}/home">Inicio</a></li>
			<li><a href="{{ URL::to('/') }}/about">Nuestra Empresa</a></li>
			<li><a href="{{ URL::to('/') }}/products">Productos</a></li>
			<li><a href="{{ URL::to('/') }}/news">Noticias</a></li>
			<li><a href="{{ URL::to('/') }}/locations">Sedes</a></li>
			<li><a href="{{ URL::to('/') }}/gallery">Galeria</a></li>
			<li><a href="{{ URL::to('/') }}/contact">Contactenos</a></li>
		</ul>
	</div>
	<nav class="navbar">
		<div class="brand-logo">
		  	  	<img src="{{ URL::to('/') }}/img/bg_brand.png" alt="brand" />
		  	  	<img src="{{ URL::to('/') }}/img/brand.png" alt="cyberlux" />
		</div>
		<div class="container">
			<span id="trigger" class="menu-hamburguer icon-th-menu">			
			</span>
		</div>
	</nav>
	
  	
	
	@yield('content')

	<footer>
		@include('footer')
	</footer>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>	
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>	
	{!! HTML::script('js/jquery.slidereveal.js'); !!}	
	{!! HTML::script('js/test.js'); !!}
</body>
</html>
