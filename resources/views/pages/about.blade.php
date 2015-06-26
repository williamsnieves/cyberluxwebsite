@extends('base')
@section('title')
	Cyberlux - Nosotros
@endsection
@section('content')
<div class="container">
	<div class="row">
		@foreach ($pages as $page)
		<div class="col-xs-12 wrapper-about wrapper-about-mobile">			
			<h1>{{$page->title}}</h1>
			{!! $page->content !!}
			
			
			<div class="panel-group panel-mision" id="accordionMision" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
			    <div class="panel-heading custom-collapse collapse-header" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordionMision" data-target="#collapseMision">
			      <h4 class="panel-title">
			        {{$page->nodes[0]->title}}
			      </h4>
			      <span class="icon-triangle-down">			      	
			      </span>
			    </div>
			    <div id="collapseMision" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body borders-panel">
			        {!! $page->nodes[0]->content !!}
			      </div>
			    </div>
			  </div>			  
			</div>
			
			<div class="panel-group" id="accordionVision" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
			    <div class="panel-heading custom-collapse collapse-header" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordionVision" data-target="#collapseVision">
			      <h4 class="panel-title">
			        {{$page->nodes[1]->title}}
			      </h4>
			      <span class="icon-triangle-down">			      	
			      </span>
			    </div>
			    <div id="collapseVision" class="panel-collapse collapse borders-panel" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body">			        
			        {!! $page->nodes[1]->content !!}
			      </div>
			    </div>
			  </div>			  
			</div>
			
			<a class="social-commitment" href="{{ URL::to('/') }}/social">
				<span class="icon-earth"></span>
				Socialmente comprometidos
			</a>
			
		</div>
		@endforeach

		<section class="col-md-12 wrapper-about wrapper-about-desktop">			
			@foreach ($pages as $page)
			<div class="col-md-6">
				@foreach ($page->nodes as $node)			
				<div class="col-md-12">
					<div class="company-box">
						<h3>{{$node->title}}</h3>
						{!! $node->content !!}
					</div>
				</div>
				@endforeach
			</div>
			
			
			<div class="col-md-6">
				<h1>{{$page->title}}</h1>
				{!! $page->content !!}
				<a class="social-commitment social-button-right" href="{{ URL::to('/') }}/social">
					<span class="icon-earth"></span>
					Socialmente comprometidos
				</a>
			</div>
			@endforeach
		</section>
	</div>
</div>
@endsection