@extends('base')
@section('title')
    Cyberlux - Galería
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div id = "loading-area" class="col-xs-12 col-sm-12 col-md-12 wrapper-gallery">
			<h1>Galería</h1>

			<h2>Líneas de ensamblaje</h2>

			<div class="col-xs-6 col-md-3">
				<a href="{{ URL::to('/') }}/img/galeria1.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs" class="thumbnail custom-thumb-gallery">
      				<img id="yourImg" class="bttrlazyloading" src="{{ URL::to('/') }}/img/galeria1.jpg" width="400" height="300" alt="">
    			</a>    			
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="{{ URL::to('/') }}/img/galeria2.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs" class="thumbnail custom-thumb-gallery">
      				<img id="yourImg" class="bttrlazyloading" src="{{ URL::to('/') }}/img/galeria2.jpg" width="400" height="300" alt="">
    			</a>    			
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="{{ URL::to('/') }}/img/galeria3.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs" class="thumbnail custom-thumb-gallery">
      				<img id="yourImg" class="bttrlazyloading" src="{{ URL::to('/') }}/img/galeria3.jpg" width="400" height="300" alt="">
    			</a>
    			
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="{{ URL::to('/') }}/img/galeria4.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs" class="thumbnail custom-thumb-gallery">
      				<img id="yourImg" class="bttrlazyloading" src="{{ URL::to('/') }}/img/galeria4.jpg" width="400" height="300" alt="">
    			</a>    			
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="{{ URL::to('/') }}/img/galeria5.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs" class="thumbnail custom-thumb-gallery">
      				<img id="yourImg" class="bttrlazyloading" src="{{ URL::to('/') }}/img/galeria5.jpg" width="400" height="300" alt="">
    			</a>    			
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="{{ URL::to('/') }}/img/galeria6.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs" class="thumbnail custom-thumb-gallery">
      				<img id="yourImg" class="bttrlazyloading" src="{{ URL::to('/') }}/img/galeria6.jpg" width="400" height="300" alt="">
    			</a>    			
			</div>
            <div class="col-xs-6 col-md-3">
                <a href="{{ URL::to('/') }}/img/galeria7.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs" class="thumbnail custom-thumb-gallery">
                    <img id="yourImg" class="bttrlazyloading" src="{{ URL::to('/') }}/img/galeria7.jpg" width="400" height="300" alt="">
                </a>                
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="{{ URL::to('/') }}/img/galeria8.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs" class="thumbnail custom-thumb-gallery">
                    <img id="yourImg" class="bttrlazyloading" src="{{ URL::to('/') }}/img/galeria8.jpg" width="400" height="300" alt="">
                </a>                
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="{{ URL::to('/') }}/img/galeria9.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs" class="thumbnail custom-thumb-gallery">
                    <img id="yourImg" class="bttrlazyloading" src="{{ URL::to('/') }}/img/galeria9.jpg" alt="">
                </a>                
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="{{ URL::to('/') }}/img/galeria10.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs" class="thumbnail custom-thumb-gallery">
                    <img id="yourImg" class="bttrlazyloading" src="{{ URL::to('/') }}/img/galeria10.jpg" alt="">
                </a>                
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="{{ URL::to('/') }}/img/galeria11.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs" class="thumbnail custom-thumb-gallery">
                    <img id="yourImg" class="bttrlazyloading" src="{{ URL::to('/') }}/img/galeria11.jpg" alt="">
                </a>                
            </div>
			<!--<div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="row">
                        <a href="http://distilleryimage6.ak.instagram.com/ba70b8e8030011e3a31b22000a1fbb63_7.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs" class="col-sm-4">
                            <img src="//distilleryimage6.ak.instagram.com/ba70b8e8030011e3a31b22000a1fbb63_7.jpg" class="img-responsive">
                        </a>
                        <a href="http://distilleryimage3.ak.instagram.com/f0c3343c046511e393b222000aa8011b_7.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Man getting wet" class="col-sm-4">
                            <img src="//distilleryimage3.ak.instagram.com/f0c3343c046511e393b222000aa8011b_7.jpg" class="img-responsive">
                        </a>
                        <a href="http://distilleryimage5.ak.instagram.com/59e9419c05d111e3896922000a1fbe1a_7.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Someone lost their dress" class="col-sm-4">
                            <img src="//distilleryimage5.ak.instagram.com/59e9419c05d111e3896922000a1fbe1a_7.jpg" class="img-responsive">
                        </a>
                    </div>
                    <div class="row">
                        <a href="http://distilleryimage2.ak.instagram.com/e3493b0a045411e3a4fb22000a1f97ec_7.jpg" data-toggle="lightbox" data-gallery="multiimages" data-footer="Big ass waterfall- using footer instead of title" class="col-sm-4">
                            <img src="//distilleryimage2.ak.instagram.com/e3493b0a045411e3a4fb22000a1f97ec_7.jpg" class="img-responsive">
                        </a>
                        <a href="http://distilleryimage10.ak.instagram.com/85c5d0e4039411e3bd9b22000aa82186_7.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Cool bottle" data-footer="Now fill it with whiskey" class="col-sm-4">
                            <img src="//distilleryimage10.ak.instagram.com/85c5d0e4039411e3bd9b22000aa82186_7.jpg" class="img-responsive">
                        </a>
                        <a href="http://distilleryimage3.ak.instagram.com/aa7088e6048c11e3a32722000aa800c4_7.jpg" data-toggle="lightbox" class="col-sm-4">
                            <img src="//distilleryimage3.ak.instagram.com/aa7088e6048c11e3a32722000aa800c4_7.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>-->
		</div>
	</div>
</div>
@endsection