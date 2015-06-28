@extends('base')
@section('title')
	Cyberlux - {{$detailsnews->title}}
@endsection
@section('content')
<div class="container">
	@if(isset($detailsnews->galleries))
	<div class="row">
		<div class="col-xs-12 wrapper-news-details wrapper-news-details-mobile">
			<h1>{{$detailsnews->title}}</h1>
			<div class="container-news">
				{!! $detailsnews->description !!}
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


		<section class="col-md-12 wrapper-news-details wrapper-news-details-desktop">
			
			<div class="col-md-6 gallery-details-new">
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
		<div class="col-xs-12 wrapper-news-details">
			<h1>{{$detailsnews->title}}</h1>
			<div class="container-news">
				{!! $detailsnews->description !!}
			</div>	
			
		</div>
	</div>
	@endif
</div>
@endsection