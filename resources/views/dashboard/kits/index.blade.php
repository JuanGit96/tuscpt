@extends('dashboard.layout.main')
@section('title')
Kits
@stop()
@section('seccion')
Kits
@stop()
@section('content')
<div class="row">
	<div class="col-lg-12">
		<a href="{{url('dashboard/kits/nuevo')}}" title="" class="btn btn-md btn-success">Añadir Kit</a>
	</div>
	<div class="col lg 12">
		@if(Session::has('mensaje'))
			{{Session::get('mensaje')}}
		@endif
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
								<th>Tags</th>
								<th>Descripción</th>
								<th>Contenido</th>
								<th>Precio</th>
								<th>Estado</th>
								<th>Tipo</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							@foreach($kits as $o)
								<tr>
									<td>{{$o->id}}</td>
									<td>{{$o->name}}</td>
									<td>{{$o->tags}}</td>
									<td>{!! $o->description !!}</td>
									<td>{!!$o->contents!!}</td>
									<td>${{$o->price}}</td>
									<td>{{$o->state}}</td>
									<td>{{$o->type}}</td>
									<td style="display: inline-flex">
										<a href="{{url('dashboard/kits/editar')}}/{{$o->id}}" class="btn btn-primary btn-xs" style="margin-right: 10%;"><span class="fa fa-fw ti-pencil-alt"></span></a>
										<button class="btn btn-primary btn-xs" data-toggle="modal"										data-target="#{{$o->id}}" data-placement="top"><span class="fa fa-fw ti-trash"></span></button>
									</td>
								</tr>
								<div class="modal fade" id="{{$o->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" >
					                <div class="modal-dialog">
					                    <div class="modal-content " style="border-radius: 0;">
					                        
					                        <div class="modal-body">
						                        <form action="{{url('dashboard/kits/delete')}}/{{$o->id}}" method="get">
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
							{!! $kits->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop()