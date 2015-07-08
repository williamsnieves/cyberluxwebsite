@extends('base')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 wrapper-detailproducts">
				@foreach($brands as $brand)			
					@if($brand->name == 'cyberlux')
						<figure>
							<img class="logo_desktop" src="{{ URL::to('/') }}/img/cyberlux_desktop.png" alt="">
							<img class="logo_mobile" src="{{ URL::to('/') }}/img/cyber_logo.png" alt="">
						</figure>
					@endif

					@if($brand->name == 'frigilux')
						<figure>
							<img class="logo_desktop" src="{{ URL::to('/') }}/img/frigilux_desktop.png" alt="">
							<img class="logo_mobile" src="{{ URL::to('/') }}/img/frigi_logo.png" alt="">
						</figure>
					@endif
				@endforeach			
			<p>
				Basándonos en la tendencia tecnológica, incorporamos a nuestro grupo de productos la línea marrón conocida como electrónica, la cual está conformada por electrodomésticos dirigidos al hogar o sector empresarial.
			</p>
			<p>
				Esta marca destaca por disponer de iluminación con una eficiencia luminosa alta, que consume un 92% menos que las bombillas incandescentes de uso doméstico común y un 30% menos que la mayoría de los sistemas de iluminación fluorescentes. Pueden durar hasta 20 años y supone un 200% menos de costes totales de propiedad si se compara con las bombillas o tubos fluorescentes convencionales.
			</p>
			

			@foreach($categories as $category)
			<div class="col-xs-6 col-md-3 wrapper-thumb">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="{{$category->images->url}}" alt="">
    			</a>
    			<a class="title-thumb" href="{{ URL::to('/') }}/products/cyberlux/{{$category->slug}}">{{strtoupper($category->name)}}</a>
			</div>
			@endforeach

			<!--<div class="col-xs-6 col-md-3 wrapper-thumb">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="{{ URL::to('/') }}/img/televisor.png" alt="">
    			</a>
    			<a class="title-thumb" href="{{ URL::to('/') }}/products/cyberlux/televisores">Televisores</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="{{ URL::to('/') }}/img/tablet.png" alt="">
    			</a>
    			<a class="title-thumb" href="">Tabletas</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail custom-thumb">
      				<img src="{{ URL::to('/') }}/img/reproductor.png" alt="">
    			</a>
    			<a class="title-thumb" href="">Reproductores</a>
			</div>-->			

    		
		</div>
	</div>
</div>
@endsection