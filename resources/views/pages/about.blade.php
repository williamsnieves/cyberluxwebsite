@extends('base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 wrapper-about wrapper-about-mobile">			
			<h1>DESDE AYER Y HASTA EL FUTURO</h1>
			<h5>desde ayer y hasta el futuro</h5>
			<p>				
Iniciamos operaciones en enero del 2004 en Morón Estado Carabobo. Para el año 2009 nos trasladamos a la ciudad de Valencia, importante eje industrial de Venezuela. Para este periodo ya contábamos con nuestra propia planta de ensamblaje de cocinas y con más de 320 mil metros cuadrados de almacenamiento, conformado por 5 depósitos ubicados estratégicamente en todo el país, los cuales generaban aproximadamente 250 empleos directos e indirectos.  En esta etapa se logró un extraordinario posicionamiento en todas las líneas de productos. Tres años después, teníamos una capacidad instalada para la fabricación de Televisores LCD, además de Laptops y DVD’s.

			</p>

			<p>
				Gracias a la solidez y afianzamiento de la marca, pudimos desarrollar fuertes lazos y relaciones comerciales con importantes compañías internacionales radicadas en: Brasil, Ecuador, México, China, entre otros. Siendo el pilar fundamental de este vínculo, la calidad e innovación de nuestros productos, la tecnología de avanzada, las certificaciones internacionales con las que contamos y la alta competitividad de los precios.
			</p>

			<p>
				Nuestros productos son sinónimo de garantía, porque le ofrecemos un excelente servicio post-venta con más de 350 talleres autorizados en todo el territorio nacional. Es así como podemos garantizarle al mercado venezolano que puede contar con productos con altos estándares de calidad y reconocimiento en diferentes partes del mundo, que satisfacen plenamente los gustos y exigencias de todos nuestros usuarios.
			</p>

			<div class="panel-group panel-mision" id="accordionMision" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
			    <div class="panel-heading custom-collapse collapse-header" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordionMision" data-target="#collapseMision">
			      <h4 class="panel-title">
			        Misi&oacute;n
			      </h4>
			      <span class="icon-triangle-down">			      	
			      </span>
			    </div>
			    <div id="collapseMision" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body borders-panel">
			        Ensamblar bajo los más altos estándares de tecnología y calidad, diversas líneas de electrodomésticos y equipo electrónicos, los cuales permitan y garanticen una mejor calidad de vida a las personas y al mismo tiempo lograr la promoción, consolidación y fortalecimiento de la industria nacional venezolana y su desarrollo económico.
			      </div>
			    </div>
			  </div>			  
			</div>

			<div class="panel-group" id="accordionVision" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
			    <div class="panel-heading custom-collapse collapse-header" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordionVision" data-target="#collapseVision">
			      <h4 class="panel-title">
			        Visi&oacute;n
			      </h4>
			      <span class="icon-triangle-down">			      	
			      </span>
			    </div>
			    <div id="collapseVision" class="panel-collapse collapse borders-panel" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body">
			        
			        Ser una empresa promotora de la actividad manufacturera del país, comprometida siempre con su crecimiento y fortalecimiento, al mismo tiempo que nos erigimos como la Empresa con la mayor y más eficiente tecnología en la industria.
			      </div>
			    </div>
			  </div>			  
			</div>

			<a class="social-commitment" href="{{ URL::to('/') }}/social">
				<span class="icon-earth"></span>
				Socialmente comprometidos
			</a>
			
		</div>

		<section class="col-md-12 wrapper-about wrapper-about-desktop">
			<div class="col-md-6">
				<div class="col-md-12">
					<div class="mision-box">
					<h3>Misión</h3>
						<p>
							Ensamblar bajo los más altos estándares de tecnología y calidad, diversas líneas de electrodomésticos y equipo electrónicos, los cuales permitan y garanticen una mejor calidad de vida a las personas y al mismo tiempo lograr la promoción, consolidación y fortalecimiento de la industria nacional venezolana y su desarrollo económico.
						</p>							
					</div>
				</div>
				<div class="col-md-12">
					<div class="vision-box">
					<h3>Visión</h3>
						<p>
							Ser una empresa promotora de la actividad manufacturera del país, comprometida siempre con su crecimiento y fortalecimiento, al mismo tiempo que nos erigimos como la Empresa con la mayor y más eficiente tecnología en la industria.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h1>DESDE AYER Y HASTA EL FUTURO</h1>
				<h5>desde ayer y hasta el futuro</h5>
				<p>				
	Iniciamos operaciones en enero del 2004 en Morón Estado Carabobo. Para el año 2009 nos trasladamos a la ciudad de Valencia, importante eje industrial de Venezuela. Para este periodo ya contábamos con nuestra propia planta de ensamblaje de cocinas y con más de 320 mil metros cuadrados de almacenamiento, conformado por 5 depósitos ubicados estratégicamente en todo el país, los cuales generaban aproximadamente 250 empleos directos e indirectos.  En esta etapa se logró un extraordinario posicionamiento en todas las líneas de productos. Tres años después, teníamos una capacidad instalada para la fabricación de Televisores LCD, además de Laptops y DVD’s.

				</p>

				<p>
					Gracias a la solidez y afianzamiento de la marca, pudimos desarrollar fuertes lazos y relaciones comerciales con importantes compañías internacionales radicadas en: Brasil, Ecuador, México, China, entre otros. Siendo el pilar fundamental de este vínculo, la calidad e innovación de nuestros productos, la tecnología de avanzada, las certificaciones internacionales con las que contamos y la alta competitividad de los precios.
				</p>

				<p>
					Nuestros productos son sinónimo de garantía, porque le ofrecemos un excelente servicio post-venta con más de 350 talleres autorizados en todo el territorio nacional. Es así como podemos garantizarle al mercado venezolano que puede contar con productos con altos estándares de calidad y reconocimiento en diferentes partes del mundo, que satisfacen plenamente los gustos y exigencias de todos nuestros usuarios.
				</p>
				<a class="social-commitment social-button-right" href="{{ URL::to('/') }}/social">
					<span class="icon-earth"></span>
					Socialmente comprometidos
				</a>
			</div>
		</section>
	</div>
</div>
@endsection