
@extends('dashboard.layout.main')
@section('title')
Usuarios
@stop()
@section('seccion')
{{$usuarios->name}}
@stop()
@section('content')
<div class="row">
	<form action="{{url('dashboard/usuarios/agregar')}}/{{$usuarios->id}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 4%;">
				<h4>Nombre</h4>
				<input type="text" name="name" class="form-control" value="{{$usuarios->name}}" placeholder="">
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 4%;">
				<h4>Email</h4>
				<input type="email" name="email" class="form-control" value="{{$usuarios->email}}" placeholder="">
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 4%;">
				<h4>Contraseña</h4>
				<input type="password" name="password" class="form-control" value="" placeholder="">
			</div>
		</div>
		<div class="col-lg-12" style="margin-top: 2%;">
	        <div>
	        	<a href="{{url('dashboard/usuarios')}}" class="btn btn-md btn-danger" style="width:10%;margin-right: 1%;">Cancelar</a>
	        	<input type="submit" class="btn btn-md btn-primary" style=" margin-left: 1%; width: 10%;" value="Guardar">
	        </div>
		</div>
	</form>
</div>

@stop()
@section('scr')
@endsection()