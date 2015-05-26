@extends('base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 wrapper-news">
			<h1>noticias</h1>
			<div>
				<a href="{{ URL::to('/') }}/news/1">					
					<h2>
						CYBERLUX DE VENEZUELA APERTURA LINEA SU LINEA
	DE ENSAMBLAJE DE AIRES ACONDICIONADO
					</h2>
				</a>
				<p>
					Destinada a la produccion  de equipos tipo Split y ventana marca FRIGILUX, Esta línea contara con una capacidad instalada de más de 500.000 Unds al año, generando más de 100 empleos directos entre obreros y técnicos especializados.
				</p>
				<span class="date-news">
					15 Junio, 2015
				</span>
			</div>
			<div>
				<a href="{{ URL::to('/') }}/news/2">				
					<h2>
						FRIGiLUX PARTICIPA EN EL INTERCAMBIO DE ARMAS
	POR ELECTRODOMESTICOS.
					</h2>
				</a>
				<p>
					Desde enero hasta la fecha, el Ministerio para las Relaciones Interiores, Justicia y Paz, en coordinación con otras instancias en materia de seguridad, ha recibido más de 13.000 armas de fuego como parte del Plan Nacional de Desarme y del Plan Nacional de Pacificación.
				</p>
				<span class="date-news">
					15 Junio, 2015
				</span>
			</div>
			<div>
				<a href="{{ URL::to('/') }}/products">				
					<h2>
						Noticia 1
					</h2>
				</a>
				<p>
					Hibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare.
				</p>
				<span class="date-news">
					15 Junio, 2015
				</span>
			</div>
			<div>
				<a href="{{ URL::to('/') }}/products">					
					<h2>
						Noticia 1
					</h2>
				</a>
				<p>
					Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
				</p>
				<span class="date-news">
					15 Junio, 2015
				</span>
			</div>
			<div>
				<a href="{{ URL::to('/') }}/products">					
					<h2>
						Noticia 2
					</h2>
				</a>
				<p>
					Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
				</p>
				<span class="date-news">
					15 Junio, 2015
				</span>
			</div>
			<section class="col-xs-12 filter-tool" style="position:fixed; bottom:0;">
				<ul class="col-md-12">
					<li>				
						<h4>Filtrar por</h4>
						<input id="lastNews"type="checkbox" />
						<label for="lastNews">Últimas Noticias</label>						
				          <form action="" class="relative-form">
				            <span class="icon-search search-icon"></span>
				            <input type="text" placeholder="Palabra clave" class="input custom-search" />				            
				          </form>
				        
					</li>
					<li>				
						<h5>Categoría</h5>

						<form action="" class="form-horizontal">							
							<table >
								<tr>
									<td><input id="lastNewsProd"type="checkbox" /></td>
									<td><label for="lastNewsProd">Noticias de Productos</label>	</td>
								</tr>
								<tr>
									<td><input id="lastNewsCoorp"type="checkbox" /></td>
									<td><label for="lastNewsCoorp">Noticias Corporativas</label></td>
								</tr>
								<tr>
									<td><input id="lastEve"type="checkbox" /></td>
									<td><label for="lastEve">Eventos recientes</label></td>
								</tr>
							</table>					
							
						</form>
					</li>			
				</ul>
			</section>
		</div>
	</div>
</div>
@endsection