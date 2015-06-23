@extends('layouts.admin.plane')
@section('titlesection')
    Direcciones
            @if(isset($typenews))
              <small>Actualizar direccion</small>
            @else
              <small>Crear direccion</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/address">Direcciones</a></li>
    <li class="active">Crear direccion</li>
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
        <h3 class="box-title">Formulario para crear direcciones</h3>
      </div><!-- /.box-header -->
       
      <!-- form start -->
      @if(isset($address))
        {!! Form::model($address, ['route' => ['admin.address.update', $address->id], 'method' => 'patch']) !!}                 
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputAddress', 'Dirección:') !!}
                {!! Form::text('address', null, ["class" => "form-control", 'placeholder'=>'Ingresa tu direccion', "id" => "inputAddress"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputCode', 'Codigo postal:') !!}
                {!! Form::text('zipcode', null, ["class" => "form-control", 'placeholder'=>'Ingresa tu codigo postal', "id" => "inputCode"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputCountry', 'País:') !!}
                {!! Form::select('countries', $countries, $address->countries_id , ['class' => 'form-control']) !!}                        
              </div> 

              <div class="form-group">
                {!! Form::label('inputState', 'Estado:') !!}
                {!! Form::select('cities', $cities, $address->cities_id , ['class' => 'form-control select2thumbs', "id=" =>"inputState"]) !!}                        
              </div>

              @if($address->isBilling == 1)
              <div class="checkbox">
                <label>
                  {!! Form::checkbox('isbilling', 1, true) !!} Colocar como direccion de facturación
                </label>
              </div>
              @else
              <div class="checkbox">
                <label>
                  {!! Form::checkbox('isbilling', null) !!} Colocar como direccion de facturación
                </label>
              </div>
              @endif
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => 'admin.address.store']) !!}
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputAddress', 'Dirección:') !!}
                {!! Form::text('address', null, ["class" => "form-control", 'placeholder'=>'Ingresa tu direccion', "id" => "inputAddress"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputCode', 'Codigo postal:') !!}
                {!! Form::text('zipcode', null, ["class" => "form-control", 'placeholder'=>'Ingresa tu codigo postal', "id" => "inputCode"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputCountry', 'País:') !!}
                {!! Form::select('countries', $countries, null , ['class' => 'form-control']) !!}                        
              </div> 

              <div class="form-group">
                {!! Form::label('inputState', 'Estado:') !!}
                {!! Form::select('cities', $cities, null , ['class' => 'form-control select2thumbs', "id=" =>"inputState"]) !!}                        
              </div>

              <div class="checkbox">             
                <label>
                  {!! Form::checkbox('isbilling', null) !!} Colocar como direccion de facturación
                </label>
              </div>
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