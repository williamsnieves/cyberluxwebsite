@extends('layouts.admin.plane')
@section('titlesection')
    Nodes
            <small>Mostrar nodes</small>
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Ver nodes</li>
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
<a href="{{ URL::to('/') }}/admin/nodes/create" class="btn btn-primary" style="margin-bottom:1em;">
  Agregar Nodo
</a>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Node o nodos</h3>
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
        @if(!$nodes->isEmpty())
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Title</th>
            <th>Contenido</th>
            <th>Fecha de Creación</th>     
            <th>Editar</th>
            <th>Eliminar</th>            
          </tr>
          @foreach ($nodes as $node)
          <tr>
            <td>{{$node->id}}</td>
            <td>{{$node->name}}</td>
            <td>{{$node->title}}</td>
            <td>{{str_limit($node->content, 10)}}</td>
            <td>{{date('F d, Y', strtotime($node->created_at))}}</td>           
            <td>
              <a href="{{ URL::to('/') }}/admin/nodes/{{$node->id}}/edit" class="btn btn-default">
                  <i class="fa fa-edit"></i>
              </a>
            </td>
            <td>
             {!! Form::open(array('route' => array('admin.nodes.destroy', $node->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()')) !!}                
                <button type="submit" class="btn btn-default">
                  <i class="fa fa-remove"></i>
                </button>
            {!! Form::close() !!}
              
            </td>           
          </tr>
          @endforeach       
        </table>
        <?php echo $nodes->render(); ?>
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