@extends('dashboard.layout.main')
@section('title')
Agentes
@stop()
@section('seccion')
Agentes
@stop()
@section('content')
<div class="row">
	<div class="col-lg-12">
	<a href="{{url('dashboard/agentes/nuevo')}}" title="" class="btn btn-md btn-success">Añadir Nuevo</a>
	</div>
	<div class="col-lg-12">
		<div class="panel ">
			<div class="panel-body">
				<div class="table-responsive">
					<table id="mytable" class="table table-bordred table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Cedula</th>
								<th>Celular</th>
								<th>Codigo</th>
								<th>Comision</th>
								<th>Descuento</th>
								<th>Usuario</th>
								<th>Agencia</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							@foreach($agentes as $agente)
								<tr>
									<td>{{$agente->id}}</td>
									<td>{{$agente->cedula}}</td>
									<td>{{$agente->cel}}</td>
									<td>{{$agente->code}}</td>
									<td>{{$agente->comision}}</td>
									<td>{{$agente->descuento}}</td>
									<td>{{$agente->user->name}}</td>
									<td>{{$agente->agencie->name}}</td>
									<td style="display: inline-flex;">
											<a href="{{url('dashboard/agentes/editar')}}/{{$agente->id}}" class="btn btn-primary btn-xs" data-placement="top" style="margin-right: 10%;"><span class="fa fa-fw ti-pencil-alt"></span></a>
											<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#{{$agente->id}}" data-placement="top"><span class="fa fa-fw ti-trash"></span></button>
									</td>
								</tr>
								<div class="modal fade" id="{{$agente->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" >
					                <div class="modal-dialog">
					                    <div class="modal-content " style="border-radius: 0;">
					                        
					                        <div class="modal-body">
						                        <form action="{{url('dashboard/agentes/delete')}}/{{$agente->id}}" method="get">
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
					{!! $agentes->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop()