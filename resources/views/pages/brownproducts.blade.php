@extends('base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 wrapper-detailproducts">
			<figure>
				<img src="{{ URL::to('/') }}/img/cyber_logo.png" alt="">
			</figure>
			<p>
				Basándonos en la tendencia tecnológica, incorporamos a nuestro grupo de productos la línea marrón conocida como electrónica, la cual está conformada por electrodomésticos dirigidos al hogar o sector empresarial.
			</p>
			<p>
				Esta marca destaca por disponer de iluminación con una eficiencia luminosa alta, que consume un 92% menos que las bombillas incandescentes de uso doméstico común y un 30% menos que la mayoría de los sistemas de iluminación fluorescentes. Pueden durar hasta 20 años y supone un 200% menos de costes totales de propiedad si se compara con las bombillas o tubos fluorescentes convencionales.
			</p>
			<div class="col-xs-6 col-md-3 wrapper-thumb">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="http://placehold.it/200X200" alt="">
    			</a>
    			<a class="title-thumb" href="{{ URL::to('/') }}/products/cyberlux/televisores">Televisores</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="http://placehold.it/200X200" alt="">
    			</a>
    			<a class="title-thumb" href="">Tabletas</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="http://placehold.it/200X200" alt="">
    			</a>
    			<a class="title-thumb" href="">Reproductores</a>
			</div>			

    		
		</div>
	</div>
</div>
@endsection