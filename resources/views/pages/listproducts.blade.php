@extends('base')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 wrapper-detailproducts">
			@foreach($category as $categorys)
				<h1>{{$categorys->name}}</h1>
			@endforeach
			@foreach($products as $product)	
				<div class="col-xs-6 col-md-3 wrapper-thumb">
					<a href="{{ URL::to('/') }}/products/{{$brand}}/{{$categorys->name}}/{{$product->slug}}" class="thumbnail custom-thumb">
	      				<img src="{{$product->images->url}}" alt="">
	    			</a>
	    			<a class="title-thumb" href="{{ URL::to('/') }}/products/{{$brand}}/{{$categorys->name}}/{{$product->slug}}">{{strtoupper($product->name)}}</a>
				</div>
				<!--<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail custom-thumb">
	      				<img src="http://placehold.it/200X200" alt="">
	    			</a>
	    			<a class="title-thumb" href="">refrigeradores</a>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail custom-thumb">
	      				<img src="http://placehold.it/200X200" alt="">
	    			</a>
	    			<a class="title-thumb" href="">dispensadores de agua</a>
				</div>
				<div class="col-xs-6 col-md-3 wrapper-thumb">
					<a href="#" class="thumbnail custom-thumb">
	      				<img src="http://placehold.it/200X200" alt="">
	    			</a>
	    			<a class="title-thumb" href="">hornos microondas</a>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail custom-thumb">
	      				<img src="http://placehold.it/200X200" alt="">
	    			</a>
	    			<a class="title-thumb" href="">hornos</a>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail custom-thumb">
	      				<img src="http://placehold.it/200X200" alt="">
	    			</a>
	    			<a class="title-thumb" href="">cocinas</a>
				</div>-->
			@endforeach
			
		</div>
	</div>
</div>
@endsection