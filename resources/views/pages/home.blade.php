@extends('base')
@section('title')
	Cyberlux - Inicio
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 wrapper-home">

			<section class="carousel-side">				
				
				<div id="carousel-example-generic" class="carousel slide banner-main-desktop" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">					     
							<img src="{{ URL::to('/') }}/img/banner-img-desktop.jpg" alt="">
						  	      
					    </div>
					    <div class="item">
					      <img src="{{ URL::to('/') }}/img/banner-img-desktop.jpg" alt="">
					    </div>					   
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
				</div>
				<div id="carousel-example-generic" class="carousel slide banner-main-mobile" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item item-carousel-mobile active">					     
							<img src="{{ URL::to('/') }}/img/products_banner.png" alt="">
						  	      
					    </div>
					    <div class="item item-carousel-mobile">
					      <img src="{{ URL::to('/') }}/img/products_banner.png" alt="">
					    </div>					   
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
				</div>
			</section>
			<section class="events-side">
				<h3 class="title-events">Eventos</h3>
				<figure class="image-event-desktop">
					<img src="{{ URL::to('/') }}/img/aire.jpg" alt="">
				</figure>
				<h4>
						CYBERLUX DE VENEZUELA APERTURA SU LINEA DE ENSAMBLAJE DE AIRES ACONDICIONADO
				</h4>
				<p>
					Destinada a la produccion  de equipos tipo Split y ventana marca FRIGILUX, Esta línea contara con una capacidad instalada de más de 500.000 Unds al año, generando más de 100 empleos directos entre obreros y técnicos especializados.
				</p>
				
								
			</section>	

				

			
		</div>
	</div>
</div>

@endsection