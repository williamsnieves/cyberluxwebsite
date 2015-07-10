@extends('base')
@section('title')
	Cyberlux - Inicio
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 wrapper-home">

			<section class="carousel-side">				
				
				<div id="carousel-example-generic" class="carousel slide banner-main-desktop" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="3"></li>					    
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					   <div class="item item-carousel-mobile active">					     
							<img src="{{ URL::to('/') }}/img/banner1.jpg" alt="">
						  	      
					    </div>
					    <div class="item item-carousel-mobile">
					      <img src="{{ URL::to('/') }}/img/banner2.jpg" alt="">
					    </div>			
					    <div class="item item-carousel-mobile">
					      <img src="{{ URL::to('/') }}/img/banner3.jpg" alt="">
					    </div>
					    <div class="item item-carousel-mobile">
					      <img src="{{ URL::to('/') }}/img/banner4.jpg" alt="">
					    </div>								   			   
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
				</div>
				<div id="carousel-example-generic" class="carousel slide banner-main-mobile" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="3"></li>					    				    
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item item-carousel-mobile active">					     
							<img src="{{ URL::to('/') }}/img/banner1-tablet.jpg" alt="">
						  	      
					    </div>
					    <div class="item item-carousel-mobile">
					      <img src="{{ URL::to('/') }}/img/banner2-tablet.jpg" alt="">
					    </div>

					    <div class="item item-carousel-mobile">
					      <img src="{{ URL::to('/') }}/img/banner3-tablet.jpg" alt="">
					    </div>

					    <div class="item item-carousel-mobile">
					      <img src="{{ URL::to('/') }}/img/banner4-tablet.jpg" alt="">
					    </div>		
					   
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
				</div>
			</section>
			<section class="separator-line separator-line-mobile"></section>
			<section class="events-side">
				<h3 class="title-events">{{$newsmain[0]->typenews->name}}</h3>
				<a class="link-news-home" href="{{ URL::to('/') }}/news/{{$newsmain[0]->slug}}">
					<figure class="image-event-desktop">
						<img width="300" height="200" src="{{$newsmain[0]->galleries->images[1]->url}}" alt="">
					</figure>
				</a>
				<a href="{{ URL::to('/') }}/news/{{$newsmain[0]->slug}}">
					<h4>
						{{$newsmain[0]->title}}
					</h4>
				</a>
				<p>
					{{$newsmain[0]->summary}}
				</p>
				
								
			</section>	

				

			
		</div>
	</div>
</div>

@endsection