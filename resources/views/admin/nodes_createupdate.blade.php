@extends('layouts.admin.plane')
@section('titlesection')
    Nodes
            @if(isset($node))
              <small>Actualizar nodes</small>
            @else
              <small>Crear nodes</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/nodes">Nodes</a></li>
    <li class="active">Crear nodes</li>
@stop
@section('content')

<div class="row">
            <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Formulario para crear nodes</h3>
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
      @if(isset($node))
        {!! Form::model($node, ['route' => ['admin.nodes.update', $node->id], 'method' => 'patch']) !!}                 
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputName', 'Nombre del nodo en el admin:') !!}
                {!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Ingresa nombre del nodo', "id" => "inputName"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputTitle', 'Titulo del nodo en la pagina:') !!}
                {!! Form::text('title', null, ["class" => "form-control", 'placeholder'=>'Ingresa título del nodo', "id" => "inputTitle"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputContent', 'Contenido del page:') !!}
                {!! Form::textarea('content', null, ["class" => "form-control ckeditor", 'placeholder'=>'Ingresa descripción del nodo', "id" => "inputContent"]) !!}
              </div>

              <div class="form-group">
                {!! Form::label('inputTitle', 'Página:') !!}
                {!! Form::select('pages', array('default' => 'Selecciona') + $pages, $node->pages_id , ['class' => 'form-control']) !!}
                        
              </div>              
              
              
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => 'admin.nodes.store']) !!}
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputName', 'Nombre del nodo en el admin:') !!}
                {!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Ingresa nombre del nodo', "id" => "inputName"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputTitle', 'Titulo del nodo en la pagina:') !!}
                {!! Form::text('title', null, ["class" => "form-control", 'placeholder'=>'Ingresa título del nodo', "id" => "inputTitle"]) !!}
              </div>

              <div class="form-group">
                {!! Form::label('inputContent', 'Contenido del nodo:') !!}
                {!! Form::textarea('content', null, ["class" => "form-control ckeditor", 'placeholder'=>'Ingresa descripción del nodo', "id" => "inputContent"]) !!}
              </div>

              <div class="form-group">
                {!! Form::label('inputTitle', 'Página:') !!}
                <select name="pages" class="form-control">
                  <option value="default">Selecciona la pagina</option>
                  @foreach ($pages as $page)
                    <option value="{{$page->id}}">{{$page->name}}</option>
                  @endforeach                 
                </select>              
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