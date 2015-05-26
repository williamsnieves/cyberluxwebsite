@extends('base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 wrapper-contact">
			<div class='pageOption'>
			  <a href='#' class='option' data-inf='photo'>
			    <img src="{{ URL::to('/') }}/img/map.png">
			  </a>			
			</div>

			<h2>Contactenos</h2>
			<form>
			  <div class="form-group form-custom">
			    <label for="inputEmail3" class="control-label custom-label-form">Su nombre:</label>
			    <div class="custom-input-form">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group form-custom">
			    <label for="inputPassword3" class="control-label custom-label-form">Su correo:</label>
			    <div class="custom-input-form">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group form-custom">
			    <label for="inputPassword3" class="control-label custom-label-form">Su mensaje:</label>
			    <div class="custom-input-form">
			      <textarea class="form-control" rows="6"></textarea>
			    </div>
			  </div>			  
			  <div class="form-group">
			    <div class="col-xs-6">			      
			    </div>
			    <div class="col-xs-6 custom-buttom-form">
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