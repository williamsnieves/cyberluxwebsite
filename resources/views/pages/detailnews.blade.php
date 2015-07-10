@extends('base')
@section('title')
	Cyberlux - {{$detailsnews->title}}
@endsection
@section('content')
<div class="container-fluid">
	@if(isset($detailsnews->galleries))	
	<div class="row">
		<div class="col-xs-12 wrapper-news-details wrapper-news-details-mobile bg-news-mobile">
			<h1>{{$detailsnews->title}}</h1>

			<div class="container-news">							
				{!! $detailsnews->description !!}
			</div>			
				
				<ul class="bxslider bx-mobile gallery-news">
				  @foreach($detailsnews->galleries->images as $image)
				  	<li><img src="{{$image->url}}" /></li>
				  @endforeach
				</ul>

				<div id="bx-pager-mobile" class="gallery-news-thumbs">
				  @foreach($detailsnews->galleries->images as $key => $image)
				  	 <a data-slide-index="{{$key}}" href=""><img width="73" height="73" src="{{$image->url}}"/></a>
				  @endforeach
				</div>
			
			
		</div>


		<section class="col-md-12 wrapper-news-details wrapper-news-details-desktop bg-news">
			
			<div class="col-md-6 gallery-details-new">
				<ul class="bxslider gallery-news" id="imageGallery">
				  @foreach($detailsnews->galleries->images as $image)
				  	<li><img src="{{$image->url}}" /></li>
				  @endforeach				  
				</ul>

				<div id="bx-pager" class="gallery-news-thumbs">
				  @foreach($detailsnews->galleries->images as $key => $image)
				  	 <a data-slide-index="{{$key}}" href=""><img width="73" height="73" src="{{$image->url}}"/></a>
				  @endforeach	
				</div>
			</div>
		
			<div class="col-md-6">
				<h1>{{$detailsnews->title}}</h1>
			<div>
				{!! $detailsnews->description !!}
			</div>
			</div>
		</section>
	</div>
	@else
	<div class="row">
		<div class="col-xs-12 wrapper-news-details wrapper-news-details-mobile bg-news-mobile">
			<h1>{{$detailsnews->title}}</h1>
			<div class="container-news">
				{!! $detailsnews->description !!}
			</div>	
			
		</div>

		<div class="col-xs-12 wrapper-news-details wrapper-news-details-desktop bg-news">
			<h1>{{$detailsnews->title}}</h1>
			<div class="container-news">
				{!! $detailsnews->description !!}
			</div>	
			
		</div>
	</div>
	@endif
</div>
@endsection

@section('content')
<script>
	var size = $(window).width();

	if(size < 992){
		$('.bxslider').bxSlider({
			  adaptiveHeight: true,
	          pagerCustom: '#bx-pager-mobile'
	    });
	}else{
		$('.bxslider').bxSlider({
	          adaptiveHeight: true,
	          pagerCustom: '#bx-pager'

	    });
	}
	
</script>
@endsection