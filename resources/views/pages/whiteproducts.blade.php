@extends('base')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 wrapper-detailproducts">
			<figure>
				<img class="logo_desktop" src="{{ URL::to('/') }}/img/frigilux_desktop.png" alt="">
				<img class="logo_mobile" src="{{ URL::to('/') }}/img/frigi_logo.png" alt="">
			</figure>
			<p>
				Basándonos en la tendencia tecnológica, incorporamos a nuestro grupo de productos la línea marrón conocida como electrónica, la cual está conformada por electrodomésticos dirigidos al hogar o sector empresarial.
			</p>
			<p>
				Esta marca destaca por disponer de iluminación con una eficiencia luminosa alta, que consume un 92% menos que las bombillas incandescentes de uso doméstico común y un 30% menos que la mayoría de los sistemas de iluminación fluorescentes. Pueden durar hasta 20 años y supone un 200% menos de costes totales de propiedad si se compara con las bombillas o tubos fluorescentes convencionales.
			</p>
			
			
			

			<!--<div class="col-xs-6 col-md-3 thumb-container">
				<div class="thumbnail">
			    	<img src="http://placehold.it/100x100" alt="">
			    	<a class="title-thumb" href="">Aires acondicionados</a>			    
				</div>
			</div>
			<div class="col-xs-6 col-md-3 thumb-container">
				<div class="thumbnail">
			    	<img src="http://placehold.it/100x100" alt="">
			    	<a class="title-thumb" href="">refrigeradores</a>			    
				</div>
			</div>
			<div class="col-xs-6 col-md-3 thumb-container">
				<div class="thumbnail">
			    	<img src="http://placehold.it/100x100" alt="">
			    	<a class="title-thumb" href="">dispensadores de agua</a>			    
				</div>
			</div>
			<div class="col-xs-6 col-md-3 thumb-container">
				<div class="thumbnail">
			    	<img src="http://placehold.it/100x100" alt="">
			    	<a class="title-thumb" href="">dispensadores de agua</a>			    
				</div>
			</div>
			<div class="col-xs-6 col-md-3 thumb-container">
				<div class="thumbnail">
			    	<img src="http://placehold.it/100x100" alt="">
			    	<a class="title-thumb" href="">dispensadores de agua</a>			    
				</div>
			</div>
			<div class="col-xs-6 col-md-3 thumb-container">
				<div class="thumbnail">
			    	<img src="http://placehold.it/100x100" alt="">
			    	<a class="title-thumb" href="">dispensadores de agua</a>			    
				</div>
			</div>
			<div class="col-xs-6 col-md-3 thumb-container">
				<div class="thumbnail">
			    	<img src="http://placehold.it/100x100" alt="">
			    	<a class="title-thumb" href="">dispensadores de agua</a>			    
				</div>
			</div>
			<div class="col-xs-6 col-md-3 thumb-container">
				<div class="thumbnail">
			    	<img src="http://placehold.it/100x100" alt="">
			    	<a class="title-thumb" href="">dispensadores de agua</a>			    
				</div>
			</div>
			<div class="col-xs-6 col-md-3 thumb-container">
				<div class="thumbnail">
			    	<img src="http://placehold.it/100x100" alt="">
			    	<a class="title-thumb" href="">dispensadores de agua</a>			    
				</div>
			</div>
			<div class="col-xs-6 col-md-3 thumb-container">
				<div class="thumbnail">
			    	<img src="http://placehold.it/100x100" alt="">
			    	<a class="title-thumb" href="">dispensadores de agua</a>			    
				</div>
			</div>-->
							

			<div class="col-xs-6 col-md-3 wrapper-thumb">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="{{ URL::to('/') }}/img/aire.png" alt="">
    			</a>
    			<a class="title-thumb" href="">Aires acondicionados</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="{{ URL::to('/') }}/img/congelador.png" alt="">
    			</a>
    			<a class="title-thumb" href="">refrigeradores</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="{{ URL::to('/') }}/img/dispensador.png" alt="">
    			</a>
    			<a class="title-thumb" href="">dispensadores de agua</a>
			</div>
			<div class="col-xs-6 col-md-3 wrapper-thumb">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="{{ URL::to('/') }}/img/lavadora.png" alt="">
    			</a>
    			<a class="title-thumb" href="">lavadoras</a>
			</div>
			<div class="col-xs-6 col-md-3 wrapper-thumb">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="{{ URL::to('/') }}/img/microonda.png" alt="">
    			</a>
    			<a class="title-thumb" href="">hornos microondas</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="{{ URL::to('/') }}/img/horno.png" alt="">
    			</a>
    			<a class="title-thumb" href="">hornos</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="{{ URL::to('/') }}/img/cocina.png" alt="">
    			</a>
    			<a class="title-thumb" href="">cocinas</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="{{ URL::to('/') }}/img/campana.png" alt="">
    			</a>
    			<a class="title-thumb" href="">campanas</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="{{ URL::to('/') }}/img/nevera.png" alt="">
    			</a>
    			<a class="title-thumb" href="">neveras</a>
			</div>
		</div>
	</div>
</div>
@endsection