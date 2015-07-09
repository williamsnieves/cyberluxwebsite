@extends('base')
@section('title')
	Cyberlux - Noticias
@endsection
@section('content')
<div class="container-fluid">
	<div class="row elavation-desktop">
		<div class="col-xs-12 wrapper-news wrapper-news-mobile">
			<h1>noticias</h1>
			<div>
				<a href="{{ URL::to('/') }}/news/cyberlux-de-venezuela-apertura-su-linea-de-ensamblaje-de-aires-acondicionado">					
					<h2>
						CYBERLUX DE VENEZUELA APERTURA SU LÍNEA
	DE ENSAMBLAJE DE AIRES ACONDICIONADO
					</h2>
				</a>
				<p>
					Destinada a la produccion  de equipos tipo Split y ventana marca FRIGILUX, Esta línea contara con una capacidad instalada de más de 500.000 Unds al año, generando más de 100 empleos directos entre obreros y técnicos especializados.
				</p>
				<span class="date-news">
					12 Junio, 2015
				</span>
			</div>
			<div>
				<a href="{{ URL::to('/') }}/news/frigilux-participa-en-elintercambio-de-armas-por-electrodomesticos">				
					<h2>
						FRIGILUX PARTICIPA EN EL INTERCAMBIO DE ARMAS
	POR ELECTRODOMESTICOS.
					</h2>
				</a>
				<p>
					Desde enero hasta la fecha, el Ministerio para las Relaciones Interiores, Justicia y Paz, en coordinación con otras instancias en materia de seguridad, ha recibido más de 13.000 armas de fuego como parte del Plan Nacional de Desarme y del Plan Nacional de Pacificación.
				</p>
				<span class="date-news">
					12 Junio, 2015
				</span>
			</div>

			<div>
				<a href="{{ URL::to('/') }}/news/cyberlux-venezuela-se-planteo-exportar-productos">				
					<h2>
						CYBERLUX VENEZUELA SE PLANTEÓ EXPORTAR PRODUCTOS.
					</h2>
				</a>
				<p>
					El presidente de Cyberlux Venezuela, Yaser Daga, ofreció detalles del primer encuentro empresarial “Hecho en Venezuela” que se realizó este miércoles donde se convocaron a varias empresas venezolanas para ensamblar electrodomésticos. En el evento estuvieron presentes empresas nacionales, internacionales y el Ministerio de Industria.
				</p>
				<span class="date-news">
					12 Junio, 2015
				</span>
			</div>			
			
			
		</div>

		<section class="col-md-12 wrapper-news-desktop">			
			<div class="col-md-12 wrapper-news" id="newsContentDesktop">
				<h1>resultados</h1>
				<div id="container-news" style="margin-top:5em;">
					<?php 
						$myresults =  json_decode($results);
						//print_r($myresults); 
						foreach($myresults as $result):
							
							$array = get_object_vars($result);

							if($array['label'] == 'products'){
								$url = "/products/".$array['brand']."/".$array['category']."/".$array['slug'];
							}

							if($array['label'] == 'news'){
								$url = "/news/".$array['slug'];
							}

							if(isset($array['link'])){								
								if($array['link'] == 'about'){
									$url = "/".$array['link'];
								}

								if($array['link'] == 'locations'){
									$url = "/".$array['link'];
								}

								if($array['link'] == 'social'){
									$url = "/".$array['link'];
								}
							}							

					?>				
					<div>
						<a href="{{ URL::to('/') }}<?php echo $url; ?>">				
							<?php 
									if(isset($array['title'])):	
							?>
								<h2>
									
									<?php 
										echo $array['title'];	
									?>
								</h2>
							<?php 
									else:	
							?>
								<h2>
									
									<?php 
										echo $array['name'];	
									?>
								</h2>
							<?php 
									endif;
							?>
						</a>						
					</div>
					<?php 
						endforeach;
					?>	
				</div>				
				
			</div>			
			
		</section>
	</div>
</div>
@endsection
