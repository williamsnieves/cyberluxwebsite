@extends('base')
@section('title')
    Cyberlux - Contacto
@endsection
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 wrapper-contact">
			<div class='pageOption'>
			  <a href='#' class='option' data-inf='photo'>
			    <img src="{{ URL::to('/') }}/img/mapa.png">
			  </a>			
			</div>

			<h2>Contáctenos</h2>
			
			<form action="/contact" method="POST" class="form-contact-mobile">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <div class="form-group form-custom">
			    <label for="inputEmail3" class="control-label custom-label-form">Su nombre:</label>
			    <div class="custom-input-form">
			      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Nombre">
			    </div>
			  </div>
			  <div class="form-group form-custom">
			    <label for="inputPassword3" class="control-label custom-label-form">Su correo:</label>
			    <div class="custom-input-form">
			      <input type="text" name="email" class="form-control" id="inputPassword3" placeholder="Correo">
			    </div>
			  </div>
			  <div class="form-group form-custom">
			    <label for="inputPassword3" class="control-label custom-label-form">Su mensaje:</label>
			    <div class="custom-input-form">
			      <textarea class="form-control" rows="6" name="message"></textarea>
			    </div>
			  </div>			  
			  <div class="form-group">			    
			    <div class="col-xs-12 custom-buttom-form">
			      <button type="submit" class="btn btn-default">enviar</button>
			    </div>
			  </div>
			  @if($errors->has())
			    <div class='alert alert-danger' style="margin-top:6em;">
			        @foreach ($errors->all('<p>:message</p>') as $message)
			            {!! $message !!}
			        @endforeach
			    </div>
			@endif			
			
			@if (Session::has('message'))            
			    <div class="alert alert-success alert-dismissable" style="margin-top:6em;">
			      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			      <h4>  <i class="icon fa fa-check"></i> {{ Session::get('message') }}</h4>              
			    </div>
			@endif
			</form>

			<form  action="/contact" method="POST" class="form-horizontal form-contact-desktop">

				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <div class="form-group form-custom">
			    <label for="inputEmail3" class="col-md-3 col-lg-3 control-label custom-label-form">Su nombre:</label>
			    <div class="col-md-5 col-lg-5 custom-input-form">
			      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Nombre">
			    </div>
			  </div>
			  <div class="form-group form-custom">
			    <label for="inputPassword3" class="col-md-3 control-label custom-label-form">Su correo:</label>
			    <div class="col-md-5 custom-input-form">
			      <input type="text" name="email" class="form-control" id="inputPassword3" placeholder="Correo">
			    </div>
			  </div>
			  <div class="form-group form-custom">
			    <label for="inputPassword3" class="col-md-3 control-label custom-label-form">Su mensaje:</label>
			    <div class="col-md-5 custom-input-form">
			      <textarea class="form-control" name="message" rows="6"></textarea>
			    </div>
			  </div>			  
			  <div class="form-group">			    
			    <div class="col-xs-12 custom-buttom-form">
			      <button type="submit" class="btn btn-default">enviar</button>
			    </div>
			  </div>
			  @if($errors->has())
			    <div class='alert alert-danger'>
			        @foreach ($errors->all('<p>:message</p>') as $message)
			            {!! $message !!}
			        @endforeach
			    </div>
			@endif
			
			@if (Session::has('message'))            
			    <div class="alert alert-success alert-dismissable">
			      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			      <h4>  <i class="icon fa fa-check"></i> {{ Session::get('message') }}</h4>              
			    </div>
			@endif
			</form>
			
			<address class="main-address">
				<p>
Zona Industrial Castillito, Valencia Edo Carabobo</p>
<p>Teléfono: 0241 8714574</p>
<p>
	Fax: 0241 8717412
</p>
			</address>
		</div>
	</div>
</div>
@endsection

@section('footerscript')
<script>
	window.setTimeout(function() {
	    $(".alert-danger").fadeTo(500, 0).slideUp(500, function(){
	        $(this).remove(); 
	    });
	}, 5000);

	window.setTimeout(function() {
	    $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
	        $(this).remove(); 
	    });
	}, 5000);
</script>
@endsection