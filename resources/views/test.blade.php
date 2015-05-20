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

		/*==================================
=            SITE STUFF            =
==================================*/
a {
    text-decoration: none !important;
    -webkit-transition: all 225ms ease;
    -moz-transition: all 225ms ease;
    transition: all 225ms ease;
}
header {
    position: relative;
    background: #222;
    height: 50px;
}
header a {
    color: #777;
}
header a:hover {
    color: #fff;
}
header .logo {
    float: left;
    height: 50px;
    line-height: 50px;
}
header .toggle-panel {
    position: absolute;
    top: 0;
    right: 0;
    font-size: 25px;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    background: #333;

    display: none;
}
header ul {
    float: right;
    list-style: none;
    margin: 0;
    padding: 0;
}
header ul li {
    display: inline-block;
}
header ul li a {
    display: block;
    height: 50px;
    line-height: 50px;
    margin: 0 10px;
}
article {
    height: 5000px;
}



/*====================================
=            PANEL STYLES            =
====================================*/
#scotch-panel {
    background: #444;
}
#scotch-panel ul {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
}
#scotch-panel ul li a {
    display: block;
    width: 100%;
    height: 50px;
    line-height: 50px;
    background: transparent;
    color: #fff;
}
#scotch-panel ul li a:hover {
    background: #555;
}








/*=======================================
=            MOBILE SNIPPETS            =
=======================================*/
@media only screen and (max-width : 768px) {
    header .toggle-panel {
        display: block;
    }
    header ul {
        display: none;
    }
}
	</style>
</head>
<body>
	
	<div id="scotch-panel">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contacts</a></li>
        </ul>
    </div>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 clearfix">
                    <a href="/" class="logo">Scotch Panels</a>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <a href="#" class="toggle-panel"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>
    </header>

	

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>	
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script href="{{ URL::to('/') }}/js/scotchPanels.js"></script>

	<script>
		$(function() {
		    var scotchPanel = $('#scotch-panel').scotchPanel({
		        containerSelector: 'body',
		        direction: 'right',
		        duration: 300,
		        transition: 'ease',
		        clickSelector: '.toggle-panel',
		        distanceX: '70%',
		        enableEscapeKey: true
		    });

		    $(window).resize(function() {
		        if ($(window).width() >= 769 && $('.scotch-panel-canvas').hasClass('scotch-is-showing')) {
		            scotchPanel.close();
		        }
		    });
		});
	</script>
</body>
</html>
