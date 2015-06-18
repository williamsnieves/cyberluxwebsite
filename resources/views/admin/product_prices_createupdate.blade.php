@extends('layouts.admin.plane')
@section('titlesection')
    Precio de los productos
            @if(isset($typenews))
              <small>Actualizar precio de productos</small>
            @else
              <small>Asignar precio a los productos</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/productprices">Precios de los productos</a></li>
    <li class="active">Crear precio de los productos</li>
@stop
@section('content')

<div class="row">
            <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Formulario para crear precio de los productos</h3>
      </div><!-- /.box-header -->
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
      <!-- form start -->
      @if(isset($productPrice))
        {!! Form::model($productPrice, ['route' => ['admin.productprices.update', $productPrice->id], 'method' => 'patch']) !!}                 
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputPrice', 'Precio del producto:') !!}
                {!! Form::text('price', null, ["class" => "form-control", 'placeholder'=>'Ingresa `precio del producto', "id" => "inputPrice"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputTax', 'Impuesto:') !!}
                {!! Form::text('tax', null, ["class" => "form-control", 'placeholder'=>'Ingresa el el impuesto del producto', "id" => "inputTax"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputProducts', 'Productos:') !!}
                {!! Form::select('products', $products, $productPrice->products_id , ['class' => 'form-control']) !!}                        
              </div>
                 
                           
              
              
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => 'admin.productprices.store']) !!}
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputPrice', 'Precio del producto:') !!}
                {!! Form::text('price', null, ["class" => "form-control", 'placeholder'=>'Ingresa `precio del producto', "id" => "inputPrice"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputTax', 'Impuesto:') !!}
                {!! Form::text('tax', null, ["class" => "form-control", 'placeholder'=>'Ingresa el el impuesto del producto', "id" => "inputTax"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputProducts', 'Productos:') !!}
                {!! Form::select('products', $products, null , ['class' => 'form-control']) !!}                    
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