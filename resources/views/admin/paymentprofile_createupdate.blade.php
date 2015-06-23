@extends('layouts.admin.plane')
@section('titlesection')
    Perfiles de pago
            @if(isset($paymentprofile))
              <small>Actualizar perfiles de pago</small>
            @else
              <small>Crear perfiles de pago</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/address">Perfiles de pago</a></li>
    <li class="active">Crear perfiles de pago</li>
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
        <h3 class="box-title">Formulario para crear perfiles de pago</h3>
      </div><!-- /.box-header -->
       
      <!-- form start -->
      @if(isset($paymentprofile))
        {!! Form::model($paymentprofile, ['route' => ['admin.paymentprofiles.update', $paymentprofile->id], 'method' => 'patch']) !!}                 
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputName', 'Numero de tarjeta:') !!}
                {!! Form::text('creditcard', null, ["class" => "form-control", 'placeholder'=>'Ingresa el metodo de pago', "id" => "inputName"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputName', 'Nombre impreso:') !!}
                {!! Form::text('printedname', null, ["class" => "form-control", 'placeholder'=>'Ingresa el metodo de pago', "id" => "inputName"]) !!}
              </div>              
              <div class="form-group">
                {!! Form::label('inputName', 'Numero de seguridad:') !!}
                {!! Form::text('securenumber', null, ["class" => "form-control", 'placeholder'=>'Ingresa el metodo de pago', "id" => "inputName"]) !!}
              </div> 

              <div class="form-group">
                {!! Form::label('inputDate', 'Fecha de caducidad:') !!}
                {!! Form::text('expirationdate', null, ["class" => "form-control", 'placeholder'=>'Ingresa el metodo de pago', "id" => "inputDate"]) !!}
              </div>              
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => 'admin.paymentprofiles.store']) !!}
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputName', 'Numero de tarjeta:') !!}
                {!! Form::text('creditcard', null, ["class" => "form-control", 'placeholder'=>'Ingresa el metodo de pago', "id" => "inputName"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputName', 'Nombre impreso:') !!}
                {!! Form::text('printedname', null, ["class" => "form-control", 'placeholder'=>'Ingresa el metodo de pago', "id" => "inputName"]) !!}
              </div>              
              <div class="form-group">
                {!! Form::label('inputName', 'Numero de seguridad:') !!}
                {!! Form::text('securenumber', null, ["class" => "form-control", 'placeholder'=>'Ingresa el metodo de pago', "id" => "inputName"]) !!}
              </div> 

              <div class="form-group">
                {!! Form::label('inputDate', 'Fecha de caducidad:') !!}
                {!! Form::text('expirationdate', null, ["class" => "form-control", 'placeholder'=>'Ingresa el metodo de pago', "id" => "inputDate"]) !!}
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
      $("#inputDate").datepicker({
        format: 'yyyy-mm-dd',
      });
    </script>
@stop