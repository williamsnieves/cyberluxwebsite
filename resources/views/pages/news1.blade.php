@extends('base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 wrapper-news-details">
			<h1>CYBERLUX DE VENEZUELA APERTURA SU LINEA DE
ENSAMBLAJE DE AIRES ACONDICIONADO</h1>
			<div>
				<p>
					Destinada a la produccion  de equipos tipo Split y ventana marca FRIGILUX, Esta línea contara con una capacidad instalada de más de 500.000 Unds al año, generando más de 100 empleos directos entre obreros y técnicos especializados
				</p>
				<p>
					FRIGILUX, estando siempre a la vanguardia en tecnología y calidad, producirá una gran variedad de  modelos  con diversas aplicaciones y capacidades de enfriamiento para brindar un gran versatilidad en el mercado, de la mano siempre con el ambiente estos aires contarán con tecnología con contamínate y ahorradora de energía.
				</p>
				<p>
					FRIGILUX… como siempre.
				</p>
			</div>

			<ul class="bxslider gallery-news">
			  <li><img src="{{ URL::to('/') }}/img/aire.jpg" /></li>
			  <li><img src="{{ URL::to('/') }}/img/aire2-thumb.jpg" /></li>
			  <li><img src="{{ URL::to('/') }}/img/aire-thumb.jpg" /></li>
			</ul>

			<div id="bx-pager" class="gallery-news-thumbs">
			  <a data-slide-index="0" href=""><img width="73" height="73" src="{{ URL::to('/') }}/img/aire.jpg"/></a>
			  <a data-slide-index="1" href=""><img width="73" height="73" src="{{ URL::to('/') }}/img/aire2-thumb.jpg" /></a>
			  <a data-slide-index="2" href=""><img width="73" height="73" src="{{ URL::to('/') }}/img/aire-thumb.jpg" /></a>

			</div>
			
		</div>
	</div>
</div>
@endsection