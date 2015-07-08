@extends('base')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-xs-12 col-sm-12 wrapper-detailproducts custom-detail-products">
			
			<h1>{{$category->name}}</h1>
			@foreach($productdetail as $product)
			<h3>{{$product->products->name}}</h3>
			
			<div class="col-xs-12 col-sm-12 col-md-7 images-detail-product">
				<figure>
					<img src="{{ URL::to('/') }}/img/vytron-tv-led-32pulgadas.jpg" alt="" />
				</figure>
			</div>
			<div class="col-md-5 col-sm-12 col-xs-12 feature-details">
				<div class="box-feature">
					<h4>Características Generales: </h4>
					{!! $product->features !!}
				</div>

				<div class="box-specifications">
					@if($product->specialfeatures != "")					
						{!! $product->specialfeatures !!}
					@else
						<p>Este artículo no posee especificaciones especiales</p>
					@endif
				</div>
				
			</div>
			@endforeach
			
		</div>
	</div>
</div>
@endsection