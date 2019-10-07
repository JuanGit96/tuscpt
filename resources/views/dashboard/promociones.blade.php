@extends('dashboard.layout.main')
@section('title')
Codigos para descuento
@stop()
@section('seccion')
Codigos para descuentos
@stop()
@section('content')
<div class="row">
	<div class="panel-group col-xs-12 col-sm-6" id="accordion">
		<div class="panel>
		    <div class="panel-heading">
		      <h2 class="panel-title">
		       <strong><button style="margin-left: 16px;" data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="btn btn-info">Nueva Promocion +</button></strong>
		     </h2>
		   	</div>
		   	<div id="collapse1" class="panel-collapse collapse">
		    	<div class="panel-body">
		     		<form  id="promociones">
				{{ csrf_field() }}
				       	<div class="col-xs-12 col-sm-6">
					        <div class="form-group">
					          <label for="" class="control-label">Nombre</label>
					          <input type="text" name="name" class="form-control"  >
					        </div>
				      	</div>
				      	<div class="col-xs-12 col-sm-6">
					        <div class="form-group">
					          <label for="" class="control-label">Codigo</label>
					          <input type="text" name="code" class="form-control">
					        </div>
				      	</div>
					    <div class="col-xs-12 col-sm-6">
					        <div class="form-group">
					          <label for="" class="control-label">Descuento</label>
					          <input type="number" name="discount" class="form-control"  placeholder="porcentaje">
					        </div>
				      	</div>
					    
					    <div class="col-xs-12">
					      <div class="boton-registrar">
					        <button type="button" id="enviar" class="btn btn-success" >Publicar</button>
					      </div>
					    </div>
		  			</form>
				</div>
			</div>
		</div>
	<div class="col-lg-12">
		<div class="panel ">
			<div class="table-responsive">
				<table id="mytable" class="table table-bordred table-striped">
					<thead>
						<tr>
							<th>id</th>
							<th>Nombre</th>
							<th>Codigo</th>
							<th>Descuento</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($codepromo as $c)
							<tr>
								<td>{{$c->id}}</td>
								<td>{{$c->name}}</td>
								<td>{{$c->code}}</td>
								<td>{{$c->discount}}</td>
								<td>
									<p>
										<a class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modaleditcode" onclick="showEditCode({{$c->id}})" title="editar"><span class="fa fa-fw ti-pencil"></span></a>
										<a  class="btn btn-xs btn-primary" onclick="deletecode({{$c->id}})" title="eliminar"><span class="fa fa-fw ti-cut"></span></a>
										
									</p>
								</td>
							</tr>
						@endforeach()
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modaleditcode" tabindex="-1" role="dialog"  style="z-index: 9000000">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #41B9E6;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h2 class="modal-title" style="color: white">Editar Contacto</h2>
			</div>
			<div class="modal-body">
				<form   method="post" id="formeditcode">
				{{ csrf_field() }}
					<div class="form-group row">
						<label class="col-md-3 form-control-label" >Nombre:</label>
						<div class="col-md-9">
							<input type="text" id="name"  class="form-control"  name="name_edit"  >
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3 form-control-label" for="text-input">Codigo: </label>
						<div class="col-md-9">
							<input type="text" id="code"  class="form-control"  name="code_edit" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3 form-control-label" for="text-input">Descuento:</label>
						<div class="col-md-9">
							<input type="text" id="discount"  class="form-control" name="discount_edit" required>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button"  onclick="updateCode()" class="btn btn-primary">Guardar cambios</button>
						<button type="button"  class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
$(document).ready(function(){
    $("#enviar").click(function(){
       $.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
		});
		$.ajax({
			method: "POST",
			url: '/dashboard/promociones/createpromo',
			data: $("#promociones").serialize(),
		}).done((res) => {
			console.log(res);
			swal({
				title: "! Registro Exitoso!",
				text: "Se creo una nueva promocion",
				icon: "success"
			}).then(function() {
				location.reload(true);
			});


		}).fail((error) => {
			swal("Oops...", "Verfique que se hayan completado todos los campos", "error");

		});
	    });
});


</script>
@stop()
