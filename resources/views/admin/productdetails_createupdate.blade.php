@extends('layouts.admin.plane')
@section('titlesection')
    Detalle de productos
            @if(isset($productdetails))
              <small>Actualizar detalle de productos</small>
            @else
              <small>Crear detalle de productos</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/productdetails">Ver listado de los detalles de  productos</a></li>
    <li class="active">Crear detalle para un producto</li>
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
        <h3 class="box-title">Formulario para crear el detalle de productos</h3>
      </div><!-- /.box-header -->
        
      <!-- form start -->
      @if(isset($productdetails))
        {!! Form::model($productdetails, ['route' => ['admin.productdetails.update', $productdetails->id], 'method' => 'patch']) !!}                 
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputThumb', 'Asociar producto:') !!}
                {!! Form::select('products', $products, $productdetails->products_id , ['class' => 'form-control select2thumbs', "id="=>"inputThumb"]) !!}                        
              </div>
              <div class="form-group">
                {!! Form::label('inputFeature', 'Características generales:') !!}
                {!! Form::textarea('features', null, ["class" => "form-control ckeditor", 'placeholder'=>'Ingresa las caracteristicas generales', "id" => "inputFeature"]) !!}
              </div>              
              <div class="form-group">
                {!! Form::label('inputFeatureSpecial', 'Características especiales:') !!}
                {!! Form::textarea('specialfeatures', null, ["class" => "form-control ckeditor", 'placeholder'=>'Ingresa las caracteristicas especiales', "id" => "inputFeatureSpecial"]) !!}
              </div>
              
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => 'admin.productdetails.store']) !!}
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputThumb', 'Asociar producto al detalle:') !!}
                {!! Form::select('products', $products, null , ['class' => 'form-control select2thumbs', "id="=>"inputThumb"]) !!}                        
              </div>    
              <div class="form-group">
                {!! Form::label('inputFeature', 'Características generales:') !!}
                {!! Form::textarea('features', null, ["class" => "form-control ckeditor", 'placeholder'=>'Ingresa las caracteristicas generales', "id" => "inputFeature"]) !!}
              </div>              
              <div class="form-group">
                {!! Form::label('inputFeatureSpecial', 'Características especiales:') !!}
                {!! Form::textarea('specialfeatures', null, ["class" => "form-control ckeditor", 'placeholder'=>'Ingresa las caracteristicas especiales', "id" => "inputFeatureSpecial"]) !!}
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
      $(".select2thumbs").select2();
    </script>
@stop