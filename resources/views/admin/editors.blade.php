@extends('layouts.admin.plane')
@section('titlesection')
    Editores
            <small>Crear editores</small>
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/editors">Editores</a></li>
    <li class="active">Crear</li>
@stop
@section('content')

<div class="row">
            <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Formulario para crear usuarios editores y administradores</h3>
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
      {!! Form::open(['route' => 'admin.editors.store']) !!}
          <div class="box-body">
            <div class="form-group">
              {!! Form::label('inputName', 'Nombre:') !!}
              {!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Ingresa nombre', "id" => "inputName"]) !!}
            </div>
            <div class="form-group">
              {!! Form::label('inputLast', 'Apellido:') !!}
              {!! Form::text('lastname', null, ["class" => "form-control", 'placeholder'=>'Ingresa apellido', "id" => "inputLast"]) !!}
            </div>
            <div class="form-group">
              {!! Form::label('inputEmail', 'Email:') !!}
              {!! Form::text('email', null, ["class" => "form-control", 'placeholder'=>'Ingresa email', "id" => "inputEmail"]) !!}
            </div>
            <div class="form-group">
              {!! Form::label('inputPassword', 'Password:') !!}
              {!! Form::text('password', null, ["class" => "form-control", 'placeholder'=>'Password', "id" => "inputPassword"]) !!}
            </div>
            <div class="checkbox">             
              <label>
                {!! Form::checkbox('editor', null) !!} Editor
              </label>
            </div>
            <div class="checkbox">
              <label>
                {!! Form::checkbox('admin', null) !!} Administrador
              </label>
            </div>            
          </div>
          <div class="box-footer">
            {!! Form::submit('Guardar', ["class" => "btn btn-primary"]) !!}            
          </div>
      {!! Form::close() !!}
    </div><!-- /.box -->
  </div><!--/.col (left) -->
</div>   <!-- /.row -->

@stop