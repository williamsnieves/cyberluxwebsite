@extends('base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 wrapper-home">

			<section class="carousel-side">
				<figure>
					<img src="{{ URL::to('/') }}/img/products_banner.png" alt="">
				</figure>
			</section>
			<section class="events-side">
				<h3 class="title-events">Eventos</h3>
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