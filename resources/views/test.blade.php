<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
	
	
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
	

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>

      	#slider{
      		background: #ccc;
      	}

	</style>
</head>
<body>
	
	
    
    <!--<div id='slider'>Hello World!!</div>
	<button id='trigger'>Trigger</button>
	<a href="{{ URL::asset('js/jquery.slidereveal.js') }}">sdfsdf</a>-->

	<div id='slider'>Hello World!!</div>
	<button id='trigger'>Trigger</button>

	

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>	
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	{!! HTML::script('js/jquery.slidereveal.js'); !!}	
	{!! HTML::script('js/test.js'); !!}
	
</body>
</html>
