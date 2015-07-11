@extends('layouts.admin.plane')
@section('titlesection')
    Categoría de Productos
            @if(isset($category))
              <small>Actualizar categoría</small>
            @else
              <small>Crear categoría</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/categories">Categoría</a></li>
    <li class="active">Crear categoría</li>
@stop
@section('content')

<div class="row">
            <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Formulario para crear categorías</h3>
      </div><!-- /.box-header -->
        @if($errors->has())
            <div class='alert alert-danger'>
                @foreach ($errors->all('<p>:message</p>') as $message)
                    {!! $message !!}
                @endforeach
            </div>
        @endif

        @if (Session::has('customexception'))            
            <div class='alert alert-danger'>
                {{ Session::get('customexception') }}
            </div>
        @endif
 
        @if (Session::has('message'))            
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>  <i class="icon fa fa-check"></i> {{ Session::get('message') }}</h4>              
            </div>
        @endif
      <!-- form start -->
      @if(isset($category))
        {!! Form::model($category, ['route' => ['admin.categories.update', $category->id], 'method' => 'patch']) !!}                 
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputName', 'Nombre de la marca:') !!}
                {!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Ingresa nombre de la marca', "id" => "inputName"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputTitle', 'Marca:') !!}
                {!! Form::select('brands', array('default' => 'Selecciona la marca') + $brands, $category->brands_id , ['class' => 'form-control']) !!}                        
              </div> 

              <div class="form-group">
                {!! Form::label('inputThumb', 'Actualizar Imagen de la categoría:') !!}
                {!! Form::select('images', $thumbs, $category->images_id , ['class' => 'form-control select2thumbs']) !!}                        
              </div>
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => 'admin.categories.store']) !!}
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputName', 'Nombre de la categoría:') !!}
                {!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Ingresa nombre de la categoría', "id" => "inputName"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputTitle', 'Marca:') !!}
                {!! Form::select('brands', array('default' => 'Selecciona la marca') + $brands, null , ['class' => 'form-control']) !!}                        
              </div>

              <div class="form-group">
                {!! Form::label('inputThumb', 'Agregar Imagen de la categoría:') !!}
                {!! Form::select('images', $thumbs, null , ['class' => 'form-control select2thumbs']) !!}                        
              </div>
                
                            
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
        var url = protocol+"//"+base_url+"/filemanager/userfiles/categorias/"+state.text;       
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