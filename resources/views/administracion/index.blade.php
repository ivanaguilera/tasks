@extends('layouts.app')

@section('content')

<div class="row">

	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Lista de Administraciones</div><br>
			<div class="panel-body">
			 @include('flash::message') 
				<a href="{{ route('admin.create')}}" class="btn btn-success btn-xs" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>
			</div>
			<div class="panel-body">

				<table class="table table-striped"">
					<thead>
						<th>ID</th>
						<th>Nombre</th>
						<th>RUT</th>
						<th>Email</th>
						<th>Teléfono</th>
						<th>Acción</th>
					</thead>
					<tbody>
						@foreach ($administraciones as $administracion )
						<tr>
							<td>{{$administracion->id}}</td>
							<td>{{$administracion->nombre}} </td>
							<td>{{$administracion->rut}}</td>
							<td>{{$administracion->email}}</td>
							<td>{{$administracion->telefono}}</td>
							<td><a href="{{ route('admin.edit',$administracion->id)}}"  class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							    <a href="{{ route('admin.destroy',$administracion->id)}}" onclick="return confirm('¿ Seguro deseas eliminar el registro ?')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>

						</tr>
						@endforeach 
					</tbody>
				</table>
				{!! $administraciones->render(); !!}
			</div>
		</div>
	</div>
</div>
</div>
@endsection
