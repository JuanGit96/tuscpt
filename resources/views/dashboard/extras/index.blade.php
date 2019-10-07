@extends('dashboard.layout.main')
@section('title')
Ordenes
@stop()
@section('seccion')
Extras
@stop()
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="panel ">

			<div class="panel-body">
				<div class="table-responsive">
					<table id="mytable" class="table table-bordred table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Nombre</th>
								<th>Precio</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							@foreach($extras as $o)
								<tr>
									<td>{{$o->id}}</td>
									<td>{{$o->name}}</td>
									<td>${{$o->price}}</td>
									<td>
										<p>
											<button class="btn btn-primary btn-xs" data-toggle="modal"										data-target="#{{$o->id}}" data-placement="top"><span class="fa fa-fw ti-trash"></span></button>
										</p>
									</td>
								</tr>
								<div class="modal fade" id="{{$o->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" >
					                <div class="modal-dialog">
					                    <div class="modal-content " style="border-radius: 0;">
					                        
					                        <div class="modal-body">
						                        <form action="{{url('dashboard/extras/delete')}}/{{$o->id}}" method="get">
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
							{!! $extras->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop()