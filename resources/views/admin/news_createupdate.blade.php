@extends('layouts.admin.plane')
@section('titlesection')
    Noticias
            @if(isset($typenews))
              <small>Actualizar noticias</small>
            @else
              <small>Crear noticias</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/news">Noticias</a></li>
    <li class="active">Crear noticias</li>
@stop
@section('content')

<div class="row">
            <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Formulario para crear noticias</h3>
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
      @if(isset($news))
        {!! Form::model($news, ['route' => ['admin.news.update', $news->id], 'method' => 'patch']) !!}                 
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputTitle', 'Título de la noticia:') !!}
                {!! Form::text('title', null, ["class" => "form-control", 'placeholder'=>'Ingresa título de la noticia', "id" => "inputTitle"]) !!}
              </div>

              <div class="form-group">
                {!! Form::label('inputSummary', 'Summario de la noticia:') !!}
                {!! Form::text('summary', null, ["class" => "form-control", 'placeholder'=>'Ingresa summario de la noticia', "id" => "inputSummary"]) !!}
              </div>

              <div class="form-group">
                {!! Form::label('inputDescription', 'Descripción de la noticia:') !!}
                {!! Form::textarea('description', null, ["class" => "form-control ckeditor", 'placeholder'=>'Ingresa descripción de la noticia', "id" => "inputDescription"]) !!}
              </div>

              <div class="form-group">
                {!! Form::label('inputTitle', 'Tipo de noticia:') !!}
                {!! Form::select('categorynews', array('default' => 'Selecciona') + $typenews, $news->type_news_id , ['class' => 'form-control']) !!}                              
              </div>

              <div class="form-group">
                {!! Form::label('inputTitle', 'Selecciona una galería:') !!}
                {!! Form::select('galleries', array('default' => 'Selecciona') + $galleries, $news->galleries_id , ['class' => 'form-control']) !!}
              </div> 
              
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => 'admin.news.store']) !!}
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputTitle', 'Título de la noticia:') !!}
                {!! Form::text('title', null, ["class" => "form-control", 'placeholder'=>'Ingresa título de la noticia', "id" => "inputTitle"]) !!}
              </div>

              <div class="form-group">
                {!! Form::label('inputSummary', 'Summario de la noticia:') !!}
                {!! Form::text('summary', null, ["class" => "form-control", 'placeholder'=>'Ingresa summario de la noticia', "id" => "inputSummary"]) !!}
              </div>

              <div class="form-group">
                {!! Form::label('inputDescription', 'Descripción de la noticia:') !!}
                {!! Form::textarea('description', null, ["class" => "form-control ckeditor", 'placeholder'=>'Ingresa descripción de la noticia', "id" => "inputDescription"]) !!}
              </div>

              <div class="form-group">
                {!! Form::label('inputTitle', 'Tipo de noticia:') !!}
                <select name="categorynews" class="form-control">
                  <option value="default">Selecciona tipo de noticia</option>
                  @foreach ($typenews as $singletypenews)
                    <option value="{{$singletypenews->id}}">{{$singletypenews->name}}</option>
                  @endforeach                 
                </select>
              </div>

              <div class="form-group">
                {!! Form::label('inputTitle', 'Selecciona una galería:') !!}
                {!! Form::select('galleries', array('default' => 'Selecciona') + $galleries, null , ['class' => 'form-control']) !!}
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