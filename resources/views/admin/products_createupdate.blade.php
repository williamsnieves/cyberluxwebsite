@extends('layouts.admin.plane')
@section('titlesection')
    Productos
            @if(isset($typenews))
              <small>Actualizar productos</small>
            @else
              <small>Crear productos</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/products">Productos</a></li>
    <li class="active">Crear productos</li>
@stop
@section('content')

<div class="row">
            <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Formulario para crear productos</h3>
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
      @if(isset($product))
        {!! Form::model($product, ['route' => ['admin.products.update', $product->id], 'method' => 'patch']) !!}                 
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputName', 'Nombre del producto:') !!}
                {!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Ingresa nombre del producto', "id" => "inputName"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputCod', 'Codigo del producto:') !!}
                {!! Form::text('codproduct', null, ["class" => "form-control", 'placeholder'=>'Ingresa el código del producto', "id" => "inputCod"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputTitle', 'Sección:') !!}
                {!! Form::select('categories', array('default' => 'Selecciona el tipo de producto') + $categories, $product->categories_id , ['class' => 'form-control']) !!}                        
              </div>
              <div class="form-group">
                {!! Form::label('inputThumb', 'Actualizar imagen del producto:') !!}
                {!! Form::select('images', $images, $product->images_id , ['class' => 'form-control select2thumbs', "id="=>"inputThumb"]) !!}                        
              </div>   
                           
              
              
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => 'admin.products.store']) !!}
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputName', 'Nombre del producto:') !!}
                {!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Ingresa nombre del producto', "id" => "inputName"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputCod', 'Codigo del producto:') !!}
                {!! Form::text('codproduct', null, ["class" => "form-control", 'placeholder'=>'Ingresa el código del producto', "id" => "inputCod"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputCategory', 'Categorías:') !!}
                {!! Form::select('categories', array('default' => 'Selecciona el tipo de producto') + $categories, null , ['class' => 'form-control']) !!}                        
              </div>

              <div class="form-group">
                {!! Form::label('inputThumb', 'Agregar imagen del producto:') !!}
                {!! Form::select('images', $images, null , ['class' => 'form-control select2thumbs', "id="=>"inputThumb"]) !!}                        
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
        var url = protocol+"//"+base_url+"/filemanager/userfiles/listaproductos/"+state.text;
       
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