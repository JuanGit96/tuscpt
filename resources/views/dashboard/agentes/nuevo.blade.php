
@extends('dashboard.layout.main')
@section('title')
Agentes
@stop()
@section('seccion')
Nuevo agente
@stop()
@section('content')
<div class="row">
	<form action="{{url('dashboard/agentes/agregar')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 4%;">
				<h4>Cedula</h4>
				<input type="text" name="cedula" class="form-control" value="" placeholder="">
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 4%;">
				<h4>Celular</h4>
				<input type="text" name="cel" class="form-control" value="" placeholder="">
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 4%;">
				<h4>Codigo</h4>
				<input type="text" name="code" class="form-control" value="" placeholder="">
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 4%;">
				<h4>Comision</h4>
				<input type="text" name="comision" class="form-control" value="" placeholder="">
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 4%;">
				<h4>Descuento</h4>
				<input type="text" name="descuento" class="form-control" value="" placeholder="">
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 4%;">
				<h4>Usuario</h4>
				<select name="user_id" class="form-control">
					<option value="">-- Seleccione un usuario --</option>
					@foreach($usuarios as $user)
						<option value="{{$user->id}}">{{$user->name}}</option>
					@endforeach()
				</select>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 4%;">
				<h4>Agencia</h4>
				<select name="agencie_id" class="form-control">
					<option value="">-- Seleccione una agencia</option>
					@foreach($agencias as $agencia)
						<option value="{{$agencia->id}}">{{$agencia->name}}</option>
					@endforeach()
				</select>
			</div>
		</div>
		<div class="col-lg-12" style="margin-top: 2%;">
	        <div>
	        	<a href="{{url('dashboard/agentes')}}" class="btn btn-md btn-danger" style="width:10%;margin-right: 1%;">Cancelar</a>
	        	<input type="submit" class="btn btn-md btn-primary" style=" margin-left: 1%; width: 10%;" value="Guardar">
	        </div>
		</div>
	</form>
</div>

@stop()
@section('scr')
@endsection()