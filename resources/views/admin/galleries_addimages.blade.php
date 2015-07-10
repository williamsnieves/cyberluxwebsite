@extends('layouts.admin.plane')
@section('titlesection')
    Agregar Imagenes
            @if(isset($typenews))
              <small>Cambiar imagenes</small>
            @else
              <small>Agregar imagenes a la galería</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/galleries">Galerías</a></li>
    <li class="active">Crear galerías</li>
@stop
@section('content')
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
<div class="row">
            <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Formulario para crear galerías</h3>
      </div><!-- /.box-header -->        
      <!-- form start -->
      @if(isset($gallery))
        {!! Form::model($gallery, ['route' => ['admin.galleries.putEditImages']]) !!}  
            {!! Form::hidden('galleryid', $gallery->id) !!}               
            <div class="box-body">
              {!! Form::select('images[]', $images, null , ['class' => 'form-control select2thumbs', "id="=>"inputThumb", "multiple" =>"multiple"]) !!}

              <div class="form-group">
                  <ul class="thumbnail" style="list-style:none; display: inline-block;">                    
                   @foreach ($gallery->images as $image)
                      <li style="display: inline-block;"><img width="64" height="64" src="{{$image->url}}" alt=""></li>
                   @endforeach
                  </ul>
              </div>
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => ['admin.galleries.postSaveImages']]) !!}
        {!! Form::hidden('galleryid', $gallerypost->id) !!}
            <div class="box-body">              
              {!! Form::select('images[]', $images, null , ['class' => 'form-control select2thumbs', "id="=>"inputThumb", "multiple" =>"multiple"]) !!}

                 
            </div>
            <div class="box-footer">
              {!! Form::submit('Guardar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @endif
    </div><!-- /.box -->
  </div><!--/.col (left) -->
</div>   <!-- /.row -->

@stop

@section('footerscript')
    <script>
      var protocol,host, base_url;

      protocol = window.location.protocol;
      host = window.location.host;

      base_url = host;
      function formatState (state) {       
        if (!state.id) { return state.text; }
        var url = protocol+"//"+base_url+"/filemanager/userfiles/gallery/"+state.text;
        console.log(state);
        var $state = $(
          '<span><img width="50" height="50" src="'+url+'" />' + state.text + '</span>'
        );
        
        return $state;
      };
      $(".select2thumbs").select2({
        templateResult: formatState
      });
    </script>
@stop