@extends('base')
@section('title')
	Cyberlux - Compromiso social
@endsection
@section('content')
<div class="container">
	<div class="row">
		@foreach ($pages as $page)
		<div class="col-xs-12 wrapper-about wrapper-about-mobile">			
			<h1>{{$page->title}}</h1>			
			{!! $page->content !!}

			<div class="panel-group panel-social-labor" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
			    <div class="panel-heading custom-collapse-social collapse-header" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" data-target="#collapseSocialLabor">
			      <h4 class="panel-title">
			        {{$page->nodes[0]->title}}
			      </h4>
			      <span class="icon-triangle-down-yellow">			      	
			      </span>
			    </div>
			    <div id="collapseSocialLabor" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body borders-panel panel-body-social">
			        {!! $page->nodes[0]->content !!}
			      </div>
			    </div>
			  </div>			  
			</div>			
			
		</div>
		@endforeach
		<section class="col-md-12 wrapper-about wrapper-about-desktop bg-social">
			@foreach ($pages as $page)
			<div class="col-md-6">
				@foreach ($page->nodes as $node)			
				<div class="col-md-12">
					<div class="social-box">
						<h3>{{$node->title}}</h3>
						{!! $node->content !!}
					</div>
				</div>
				@endforeach						
			</div>
			<div class="col-md-6">
				<h1>{{$page->title}}</h1>			
				{!! $page->content !!}
			</div>
			@endforeach
		</section>
	</div>
</div>
@endsection