@extends('dashboard.layout.main')
@section('title')
Contactos
@stop()
@section('seccion')
Contactos
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
								<th>Correo</th>
								<th>Mensaje</th>
								<th>Fecha Registro</th>
							</tr>
						</thead>
						<tbody>
							@foreach($contactos as $contacto)
								<tr>
									<td>{{$contacto->id}}</td>
									<td>{{$contacto->nombre}}</td>
									<td>{{$contacto->email}}</td>
									<td>{{$contacto->descripcion}}</td>
									<td>{{$contacto->fecha_envio}}</td>
								</tr>
							@endforeach()
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@stop()