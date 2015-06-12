@extends('base')
@section('title')
    Cyberlux - Contacto
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 wrapper-contact">
			<div class='pageOption'>
			  <a href='#' class='option' data-inf='photo'>
			    <img src="{{ URL::to('/') }}/img/mapa.png">
			  </a>			
			</div>

			<h2>Contáctenos</h2>
			<form class="form-contact-mobile">
			  <div class="form-group form-custom">
			    <label for="inputEmail3" class="control-label custom-label-form">Su nombre:</label>
			    <div class="custom-input-form">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Nombre">
			    </div>
			  </div>
			  <div class="form-group form-custom">
			    <label for="inputPassword3" class="control-label custom-label-form">Su correo:</label>
			    <div class="custom-input-form">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="Correo">
			    </div>
			  </div>
			  <div class="form-group form-custom">
			    <label for="inputPassword3" class="control-label custom-label-form">Su mensaje:</label>
			    <div class="custom-input-form">
			      <textarea class="form-control" rows="6"></textarea>
			    </div>
			  </div>			  
			  <div class="form-group">			    
			    <div class="col-xs-12 custom-buttom-form">
			      <button type="submit" class="btn btn-default">enviar</button>
			    </div>
			  </div>
			</form>

			<form class="form-horizontal form-contact-desktop">
			  <div class="form-group form-custom">
			    <label for="inputEmail3" class="col-md-3 col-lg-3 control-label custom-label-form">Su nombre:</label>
			    <div class="col-md-5 col-lg-5 custom-input-form">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Nombre">
			    </div>
			  </div>
			  <div class="form-group form-custom">
			    <label for="inputPassword3" class="col-md-3 control-label custom-label-form">Su correo:</label>
			    <div class="col-md-5 custom-input-form">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="Correo">
			    </div>
			  </div>
			  <div class="form-group form-custom">
			    <label for="inputPassword3" class="col-md-3 control-label custom-label-form">Su mensaje:</label>
			    <div class="col-md-5 custom-input-form">
			      <textarea class="form-control" rows="6"></textarea>
			    </div>
			  </div>			  
			  <div class="form-group">			    
			    <div class="col-xs-12 custom-buttom-form">
			      <button type="submit" class="btn btn-default">enviar</button>
			    </div>
			  </div>
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