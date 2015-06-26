@extends('layouts.admin.plane')
@section('titlesection')
    Editores
            <small>Mostrar editores</small>
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Ver Editores</li>
@stop
@section('content')
 @if($errors->has())
    <div class='alert alert-danger'>
        @foreach ($errors->all('<p>:message</p>') as $message)
            {!! $message !!}
        @endforeach
    </div>
@endif

<a href="{{ URL::to('/') }}/admin/editors/create" class="btn btn-primary" style="margin-bottom:1em;">
  Agregar Usuario
</a>
@if (Session::has('message'))            
    <div class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4>  <i class="icon fa fa-check"></i> {{ Session::get('message') }}</h4>              
    </div>
@endif
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Usuarios Creados en Cyberlux</h3>
        <div class="box-tools">
          <div class="input-group">
            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
       
      </div><!-- /.box-header -->

      <div class="box-body table-responsive no-padding">
        @if(!$users->isEmpty())
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Editar</th>
            @if (Auth::user()->isAdmin == 1)
            <th>Eliminar</th>
             @endif
            <th>Cambiar Password</th>
          </tr>
          @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->lastname}}</td>
            <td>{{$user->email}}</td>
            @if (Auth::user()->name == $user->name)
            <td>
              <a href="{{ URL::to('/') }}/admin/editors/{{$user->id}}/edit" class="btn btn-default">
                  <i class="fa fa-edit"></i>
              </a>
            </td>
            @else
            <td>
              <a href="#" class="btn btn-default disabled">
                  <i class="fa fa-edit"></i>
              </a>
            </td>
            @endif
            @if (Auth::user()->isAdmin == 1)
            <td>
             {!! Form::open(array('route' => array('admin.editors.destroy', $user->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()')) !!}                
                <button type="submit" class="btn btn-default">
                  <i class="fa fa-remove"></i>
                </button>
            {!! Form::close() !!}
            @endif 
            </td>
            @if (Auth::user()->name == $user->name)
            <td>
              <a href="{{ URL::to('/') }}/admin/editors/{{$user->id}}/edit" class="btn btn-default">
                  Cambiar clave
              </a>
            </td>
            @else
            <td>
              <a href="#" class="btn btn-default disabled">
                  Cambiar clave
              </a>
            </td>            
          </tr>
          @endif
          @endforeach       
        </table>
        <?php echo $users->render(); ?>
        @endif
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>
<script>

  function ConfirmDelete()
  {
  var x = confirm("Seguro que quieres eliminar?");
  if (x)
    return true;
  else
    return false;
  }

</script>
@stop