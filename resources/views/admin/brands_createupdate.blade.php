@extends('layouts.admin.plane')
@section('titlesection')
    Marca
            @if(isset($brand))
              <small>Actualizar marca</small>
            @else
              <small>Crear marca</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/brands">Marca</a></li>
    <li class="active">Crear marca</li>
@stop
@section('content')

<div class="row">
            <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Formulario para crear marcas</h3>
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
      @if(isset($brand))
        {!! Form::model($brand, ['route' => ['admin.brands.update', $brand->id], 'method' => 'patch']) !!}                 
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputName', 'Nombre de la marca:') !!}
                {!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Ingresa nombre de la marca', "id" => "inputName"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputContent', 'Titulo para el contenido de la marca (opcional):') !!}
                {!! Form::text('titlecontent', null, ["class" => "form-control", 'placeholder'=>'Ingresa titulo para el contenido de la marca', "id" => "inputContent"]) !!}
              </div>            
                           
              
              
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => 'admin.brands.store']) !!}
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputName', 'Nombre de la marca:') !!}
                {!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Ingresa nombre de la marca', "id" => "inputName"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputContent', 'Titulo para el contenido de la marca (opcional):') !!}
                {!! Form::text('titlecontent', null, ["class" => "form-control", 'placeholder'=>'Ingresa titulo para el contenido de la marca', "id" => "inputContent"]) !!}
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