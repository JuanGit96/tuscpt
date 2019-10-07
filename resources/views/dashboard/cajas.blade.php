@extends('dashboard.layout.main')
@section('title')
Ordenes
@stop()
@section('seccion')
Ordenes
@stop()
@section('content')
<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success">Crear Orden de Cajas</button>
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
								<th>Cedula</th>
								<th>Cajas</th>
								<th>Ciudad</th>
								<th>Barrio</th>
								<th>Pago</th>
							</tr>
						</thead>
						<tbody>
							@foreach($cajas as $cajas)

								<tr>
									<td>{{$cajas->id}}</td>
									<td>{{$cajas->name}}</td>
									<td>{{$cajas->email}}</td>
									<td>{{$cajas->phone}}</td>
									<td>{{$cajas->cajas}}</td>
									<td>{{$cajas->city}}</td>
									<td>{{$cajas->pago}}</td>								
								</tr>
								@endforeach()
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nueva Venta de Cajas</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="{{ action('dashboardController@crearordencaja') }}">
                {{ csrf_field() }}
          <input type="number" name="orden_id" hidden id="orden_id">
		  <div class="form-group">
		    <label for="number">Nombre</label>
		    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese Nombre">
		  </div>
		    <div class="form-group">
		    <label for="number">Cedula</label>
		    <input type="number" class="form-control" id="document" name="document" placeholder="Ingrese Correo">
		  </div>
		  <div class="form-group">
		    <label for="number">Correo</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese Correo">
		  </div>
		  <div class="form-group">
		    <label for="number">Teléfono</label>
		    <input type="number" class="form-control" id="phone" name="phone" placeholder="Ingrese Teléfono">
		  </div>
		   <div class="form-group">
		    <label for="number"># de cajas</label>
		    <input type="number" class="form-control" id="cajas" name="cajas" placeholder="Ingrese número de cajas">
		  </div>
		  <div class="form-group">
		    <label for="number">Ciudad</label>
		    <input type="text" class="form-control" id="city" name="city" placeholder="Ingrese número de cajas">
		  </div>
		    <div class="form-group">
		    <label for="number">Valor del Pago</label>
		    <input type="text" class="form-control" id="pago" name="pago" placeholder="Ingrese número de cajas">
		  </div>
	       <div class="modal-footer">
		      <button type="submit" class="btn btn-success">Guardar cambios</button>
		      <button type="button"  class="btn btn-default" data-dismiss="modal">Cerrar</button>
	   	  </div>
		  <!-- Mas campos aqui… -->
		</form>
        </div>
        
      </div>
      
    </div>
</div>
@stop()
<script>

	var Garantia = (id)=>{

		document.getElementById("orden_id").value = id;
		$("#myModal").modal('show');

	}
</script>