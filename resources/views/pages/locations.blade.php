@extends('base')
@section('title')
	Cyberlux - Sedes
@endsection
@section('content')
<div class="container">
	<div class="row">
		@foreach ($pages as $page)
		<div class="col-xs-12 wrapper-location wrapper-location-mobile">
			<h1>{{$page->title}}</h1>

			{!! $page->content !!}

			<div class="panel-group panel-assembler" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
			    <div class="panel-heading custom-collapse-locations collapse-header" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" data-target="#collapseMision">
			      <h4 class="panel-title">
			        {{$page->nodes[0]->title}}
			      </h4>
			      <span class="icon-triangle-down">			      	
			      </span>
			    </div>
			    <div id="collapseMision" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body borders-panel panel-body-locations">
			        {!! $page->nodes[0]->content !!}
			      </div>
			    </div>
			  </div>			  
			</div>

			<div class="panel-group panel-we-are" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
			    <div class="panel-heading custom-collapse-locations" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" data-target="#collapseVision">
			      <h4 class="panel-title">
			        {{$page->nodes[1]->title}}
			      </h4>
			      <span class="icon-triangle-down">			      	
			      </span>
			    </div>
			    <div id="collapseVision" class="panel-collapse collapse borders-panel" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body borders-panel panel-body-locations">
			        {!! $page->nodes[1]->content !!}
			      </div>
			    </div>
			  </div>			  
			</div>
			
		</div>
		@endforeach
		<section class="col-md-12 wrapper-about wrapper-location-desktop">
			@foreach ($pages as $page)
			<div class="col-md-6">
				@foreach ($page->nodes as $node)			
					<div class="col-md-12">
						<div class="locations-box">
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