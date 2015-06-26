@extends('layouts.admin.plane')
@section('titlesection')
    Numeros de cuenta
            @if(isset($accountnumber))
              <small>Actualizar Numeros de cuenta</small>
            @else
              <small>Crear Numeros de cuenta</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/bankaccounts">Numeros de cuenta</a></li>
    <li class="active">Crear numeros de cuenta</li>
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
        <h3 class="box-title">Formulario para crear numeros de cuenta</h3>
      </div><!-- /.box-header -->
       
      <!-- form start -->
      @if(isset($accountnumber))
        {!! Form::model($accountnumber, ['route' => ['admin.bankaccounts.update', $accountnumber->id], 'method' => 'patch']) !!}                 
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputNumber', 'Numero de cuenta:') !!}
                {!! Form::text('number', null, ["class" => "form-control", 'placeholder'=>'Ingresa el numero de cuenta', "id" => "inputNumber"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputBank', 'Banco:') !!}
                {!! Form::text('bank', null, ["class" => "form-control", 'placeholder'=>'Ingresa el nombre del banco', "id" => "inputBank"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputTypeAccount', 'Tipo de cuenta:') !!}
                {!! Form::text('type', null, ["class" => "form-control", 'placeholder'=>'Ingresa el tipo de cuenta', "id" => "inputTypeAccount"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputConsideration', 'Consideraciones:') !!}
                {!! Form::text('consideration', null, ["class" => "form-control", 'placeholder'=>'Ingresa alguna consideracion', "id" => "inputConsideration"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputPayment', 'Asociar al metodo de pago:') !!}
                {!! Form::select('payments', $paymentmethods, $accountnumber->payment_methods_id , ['class' => 'form-control', "id="=>"inputPayment"]) !!}                        
              </div>               
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => 'admin.bankaccounts.store']) !!}
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputNumber', 'Numero de cuenta:') !!}
                {!! Form::text('number', null, ["class" => "form-control", 'placeholder'=>'Ingresa el numero de cuenta', "id" => "inputNumber"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputBank', 'Banco:') !!}
                {!! Form::text('bank', null, ["class" => "form-control", 'placeholder'=>'Ingresa el nombre del banco', "id" => "inputBank"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputTypeAccount', 'Tipo de cuenta:') !!}
                {!! Form::text('type', null, ["class" => "form-control", 'placeholder'=>'Ingresa el tipo de cuenta', "id" => "inputTypeAccount"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputConsideration', 'Consideraciones:') !!}
                {!! Form::text('consideration', null, ["class" => "form-control", 'placeholder'=>'Ingresa alguna consideracion', "id" => "inputConsideration"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputPayment', 'Asociar al metodo de pago:') !!}
                {!! Form::select('payments', $paymentmethods, null , ['class' => 'form-control', "id="=>"inputPayment"]) !!}                        
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