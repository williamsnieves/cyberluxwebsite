@extends('base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 wrapper-products wrapper-products-mobile">
			<figure>
				<img src="{{ URL::to('/') }}/img/bg_product.png" alt="">
			</figure>
			<figure class="frigi-brand">
				<img src="{{ URL::to('/') }}/img/frigi_logo.png" alt="">
			</figure>
			<a href="{{ URL::to('/') }}/products/frigilux"><span class="icon-keyboard-arrow-right-green arrow-right-frigi">				
			</span></a>
			<a class="white-pro" href="{{ URL::to('/') }}/products/frigilux"><h2>Línea Blanca</h2></a>

			<figure class="cyber-brand">
				<img src="{{ URL::to('/') }}/img/cyber_logo.png" alt="">
			</figure>
			<a href="{{ URL::to('/') }}/products/cyberlux"><span class="icon-keyboard-arrow-right arrow-right-cyber">				
			</span></a>
			<a class="brown-pro" href="{{ URL::to('/') }}/products/cyberlux"><h2>Línea Marrón</h2></a>
		</div>

		<div class="col-xs-12 wrapper-products  wrapper-products-desktop">
			<figure>
				<img src="{{ URL::to('/') }}/img/bg_products_desktop.png" alt="">
			</figure>
			<figure class="frigi-brand">
				<img src="{{ URL::to('/') }}/img/frigi_logo.png" alt="">
			</figure>
			<a href="{{ URL::to('/') }}/img/catalogo_frigilux.pdf"><span class="icon-keyboard-arrow-right-green arrow-right-frigi">				
			</span></a>
			<a class="white-pro" href="{{ URL::to('/') }}/img/catalogo_frigilux.pdf"><h2>Línea Blanca</h2></a>

			<figure class="cyber-brand">
				<img src="{{ URL::to('/') }}/img/cyber_logo.png" alt="">
			</figure>
			<a href="{{ URL::to('/') }}/img/catalogo_cyberlux.pdf"><span class="icon-keyboard-arrow-right arrow-right-cyber">				
			</span></a>
			<a class="brown-pro" href="{{ URL::to('/') }}/img/catalogo_cyberlux.pdf"><h2>Línea Marrón</h2></a>
		</div>
	</div>
</div>
@endsection