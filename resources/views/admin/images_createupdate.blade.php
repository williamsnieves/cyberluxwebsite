@extends('layouts.admin.plane')
@section('titlesection')
    Imagenes
            @if(isset($image))
              <small>Actualizar imagenes</small>
            @else
              <small>Crear imagenes</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/images">Imgenes</a></li>
    <li class="active">Crear imagenes</li>
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
        <h3 class="box-title">Formulario para crear imagenes</h3>
      </div><!-- /.box-header -->
       
      <!-- form start -->
      @if(isset($image))
        {!! Form::model($image, ['route' => ['admin.images.update', $image->id], 'method' => 'patch']) !!}
        {!! Form::token() !!}                 
            <div class="box-body">
              <button style = "margin-bottom: 1em;" type="button" class="btn btn-primary" onclick="BrowseServer('id_of_the_target_input');">Subir imagen o seleccionar imagen</button>
              @if($image->isThumbnail == 1 || $image->isThumbnail == '1')             
              <div class="checkbox">                  
                <label>
                  {!! Form::checkbox('thumbnail', 1, true) !!} Caratula para el tipo de producto (* si se marca permitira elegir una imagen para el tipo de producto)
                </label>
              </div>
              @else
              <div class="checkbox">   
                
                <label>
                  {!! Form::checkbox('thumbnail', null) !!} Caratula para el tipo de producto (* si se marca permitira elegir una imagen para el tipo de producto)
                </label>
              </div>
              @endif

              @if($image->isThumbnailProduct == 1 || $image->isThumbnailProduct == '1')             
              <div class="checkbox">             
                <label>
                  {!! Form::checkbox('thumbnail_product', 1, true) !!} Caratula del producto (* si se marca permitira elegir una imagen para el producto mas no es la imagen detallada)
                </label>
              </div>
              @else
              <div class="checkbox">             
                <label>
                  {!! Form::checkbox('thumbnail_product', null) !!} Caratula del producto (* si se marca permitira elegir una imagen para el producto mas no es la imagen detallada)
                </label>
              </div>
              @endif
              <div class="form-group">
                {!! Form::label('id_of_the_target_input', 'Url de la imagen (*Este campo se llena al seleccionar la imagen del manejador de archivos):') !!}
                {!! Form::text('url', null, ["class" => "form-control", "id" => "id_of_the_target_input"]) !!}
              </div>
              

                           
              
              
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => 'admin.images.store']) !!}
        {!! Form::token() !!}
            <div class="box-body">  

              <button style = "margin-bottom: 1em;" type="button" class="btn btn-primary" onclick="BrowseServer('id_of_the_target_input');">Subir imagen</button>
              <div class="checkbox">             
                <label>
                  {!! Form::checkbox('thumbnail', null) !!} Caratula para el tipo de producto (* si se marca permitira elegir una imagen para el tipo de producto)
                </label>
              </div>
              <div class="checkbox">             
                <label>
                  {!! Form::checkbox('thumbnail_product', null) !!} Caratula del producto (* si se marca permitira elegir una imagen para el producto mas no es la imagen detallada)
                </label>
              </div>
              <div class="form-group">
                {!! Form::label('id_of_the_target_input', 'Url de la imagen (*Este campo se llena al seleccionar la imagen del manejador de archivos):') !!}
                {!! Form::text('url', null, ["class" => "form-control", "id" => "id_of_the_target_input"]) !!}
              </div>              
             
            </div>            

            <div class="box-footer">
              {!! Form::submit('Guardar', ["class" => "btn btn-primary", "id"=>"btnout"]) !!}            
            </div>
        {!! Form::close() !!}
      @endif
    </div><!-- /.box -->
  </div><!--/.col (left) -->
</div>   <!-- /.row -->

@stop