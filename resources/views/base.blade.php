<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
	
	
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset('/css/jasny-bootstrap.min.css') }}" rel="stylesheet">
	

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
	<div id='slider'>Hello World!!</div>
	<nav class="navbar" style="background:#ccc; box-shadow: 0.2em 0.3em 0.5em; margin-top:1em;">
		<div class="brand-logo" style="position: absolute; top: -1em; left: 0; z-index: 999">
		  	  	<img src="{{ URL::to('/') }}/img/bg_brand.png" alt="brand" />
		  	  	<img src="{{ URL::to('/') }}/img/brand.png" alt="cyberlux" style="position: absolute;top: 0; margin-left: 1em; margin-top: 3em;" />
		  	</div>
		<div class="container">
			<span style="position: absolute; top:0 rigth: 0">
				<i class="glyphicon-menu-hamburger"></i>
			</span>
		</div>
	</nav>
	<button id='trigger' style="float:right">Trigger</button>
	
	
	
  	
	
	@yield('content')

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>	
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>	
	{!! HTML::script('js/jquery.slidereveal.js'); !!}	
	{!! HTML::script('js/test.js'); !!}
</body>
</html>
