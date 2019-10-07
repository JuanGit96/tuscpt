@extends('dashboard.layout.main')
@section('title')
Usuarios
@stop()
@section('seccion')
Usuarios
@stop()
@section('content')
<div class="row">
	<div class="col-lg-12">
		<a href="{{url('dashboard/usuarios/nuevo')}}" title="" class="btn btn-md btn-success">Añadir Usuario</a>
	</div>
	<div class="col-lg-12">
		<div class="panel ">
			<div class="panel-body">
				<div class="table-responsive">
					<table id="mytable" class="table table-bordred table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Nombre</th>
								<th>Correo</th>
								<th>password</th>
								<th>Accion</th>
							</tr>
						</thead>
						<tbody>
							@foreach($usuarios as $usuario)
								<tr>
									<td>{{$usuario->id}}</td>
									<td>{{$usuario->name}}</td>
									<td>{{$usuario->email}}</td>
									<td>{{$usuario->password}}</td>
									<td style="display: inline-flex">
										<a href="{{url('dashboard/usuarios/editar')}}/{{$usuario->id}}" class="btn btn-primary btn-xs" style="margin-right: 10%;"><span class="fa fa-fw ti-pencil-alt"></span></a>
										<button class="btn btn-primary btn-xs" data-toggle="modal"										data-target="#{{$usuario->id}}" data-placement="top"><span class="fa fa-fw ti-trash"></span></button>
									</td>
								</tr>
								<div class="modal fade" id="{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" >
					                <div class="modal-dialog">
					                    <div class="modal-content " style="border-radius: 0;">
					                        
					                        <div class="modal-body">
						                        <form action="{{url('dashboard/usuarios/delete')}}/{{$usuario->id}}" method="get">
						                        	<center>
						                        		<h4>¿Esta seguro de elimanar este registro?</h4>
						                        		<div>
						                        			<br><br>
						                        			<a href="" class="btn btn-md btn-danger" data-dismiss="modal">
						                        				Cancelar
						                        			</a>
						                        			<input type="submit" class="btn bt-md btn-success" value="Eliminar">
						                        		</div>
						                        	</center>
						                        </form>
					                        </div>
					                        	
					                    </div>
					                </div>
            					</div>
							@endforeach()
						</tbody>
					</table>
					{!! $usuarios->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop()