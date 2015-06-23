@extends('layouts.admin.plane')
@section('titlesection')
    Agregar Imagenes
            @if(isset($typenews))
              <small>Cambiar imagenes</small>
            @else
              <small>Agregar imagenes a los productos</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/galleries">Ver detalle de los productos</a></li>
    <li class="active">Agregar Imagenes</li>
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
      @if(isset($productdetail))
        {!! Form::model($productdetail, ['route' => ['admin.productdetails.putEditImages']]) !!}  
            {!! Form::hidden('productdetailid', $productdetail->id) !!}               
            <div class="box-body">
              <div class="form-group">
                <select name="images[]" class="form-control" id="inputImages" multiple="multiple">
                 
                </select>
              </div>

              <div class="form-group">
                  <ul class="thumbnail" style="list-style:none; display: inline-block;">                    
                   @foreach ($productdetail->images as $image)
                      <li style="display: inline-block;"><img width="64" height="64" src="{{$image->url}}" alt=""></li>
                   @endforeach
                  </ul>
              </div>
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => ['admin.productdetails.postSaveImages']]) !!}
        {!! Form::hidden('productdetailid', $productdetailpost->id) !!}
            <div class="box-body">              
              <div class="form-group">
                <select name="images[]" class="form-control" id="inputImages" multiple="multiple">
                 
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