@extends('dashboard.layout.main')
@section('title')
Agencias
@stop()
@section('seccion')
Agencias
@stop()
@section('content')
<div class="row">
	<div class="col-lg-12">
	<a href="{{url('dashboard/agencias/nuevo')}}" title="" class="btn btn-md btn-success">Añadir Nuevo</a>
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
								<th>Descripción</th>
								<th>Codigo</th>
								<th>Comision</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							@foreach($agencias as $agencia)
								<tr>
									<td>{{$agencia->id}}</td>
									<td>{{$agencia->name}}</td>
									<td>{!! str_limit($agencia->description) !!}</td>
									<td>{{$agencia->code}}</td>
									<td>{{$agencia->comision}}</td>
									<td style="display: inline-flex;">
											<a href="{{url('dashboard/agencias/editar')}}/{{$agencia->id}}" class="btn btn-primary btn-xs" data-placement="top" style="margin-right: 10%;"><span class="fa fa-fw ti-pencil-alt"></span></a>
											<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#{{$agencia->id}}" data-placement="top"><span class="fa fa-fw ti-trash"></span></button>
									</td>
								</tr>
								<div class="modal fade" id="{{$agencia->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" >
					                <div class="modal-dialog">
					                    <div class="modal-content " style="border-radius: 0;">
					                        
					                        <div class="modal-body">
						                        <form action="{{url('dashboard/agencias/delete')}}/{{$agencia->id}}" method="get">
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
				</div>
			</div>
		</div>
	</div>
</div>
@stop()