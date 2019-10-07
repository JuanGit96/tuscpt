@extends('dashboard.layout.main')
@section('title')
Ordenes
@stop()
@section('seccion')
Ordenes
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
								<th>Cedula</th>
								<th>Estado</th>
								<th>Kit</th>
								<th>Valor</th>
								<th>Ciudad</th>
								<th>Barrio</th>
								<th>Pago</th>
								<th>Garantia</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							@foreach($order as $o)
								<tr>
									<td>{{$o->id}}</td>
									<td>{{$o->name}}</td>
									<td>{{$o->document}}</td>
									<td>{{$o->kit->name}}</td>
									<td>{{$o->state}}</td>
									<td>{{$o->value}}</td>
									<td>{{$o->city}}</td>
									<td>{{$o->neighborhood}}</td>
									<td>{{$o->payment}}</td>
									<td>
										<?php
									$garantia = DB::table('garantias')->where('orders_id',$o->id)->select('cajas')->get();
									

									?>
									@foreach($garantia  as $garantia)
									{{$garantia->cajas}}
									@endforeach()
									</td>
									<td>
										<p>
											<a href="{{url('dashboard/ordenes/ver')}}/{{$o->id}}" class="btn btn-xs btn-primary"><span class="fa fa-fw ti-eye"></span></a>
											<a data-toggle="modal" onclick="Garantia({{$o->id}})"><i class="fa fa-fw ti-archive" data-toggle="tooltip" title="crear Garantia" ></i></a>
											
										</p>
									</td>
								</tr>
							@endforeach()
						</tbody>
					</table>
							{!! $order->render() !!}
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
          <h4 class="modal-title">Garantía</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="{{ action('dashboardController@creargarantia') }}">
                {{ csrf_field() }}
          <input type="number" name="orden_id" hidden id="orden_id">
		  <div class="form-group">
		    <label for="number">Número de cajas</label>
		    <input type="number" class="form-control" id="number" name="cajas" placeholder="Ingrese número de cajas">
		  </div>
	       <div class="modal-footer">
		      <button type="submit" class="btn btn-primary">Guardar cambios</button>
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