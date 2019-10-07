@extends('dashboard.layout.main')
@section('title')
Detaller orden
@stop()
@section('seccion')
Detalle orden #{{$orden->id}} 
@stop()
@section('content')
<div class="row">
	<div class="col-lg-4">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">
					Datos del comprador
				</h3>
				<span class="pull-right">
					<i class="fa fa-fw ti-angle-up clickable"></i>
					<i class="fa fa-fw ti-close removepanel clickable"></i>
				</span>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12">
						<p><strong>Nombre:</strong> {{$orden->name}}</p>
						<p><strong>Cedula:</strong> {{$orden->document}}</p>
						<p><strong>E-mail:</strong> {{$orden->email}}</p>
						<p><strong>Cel/Tel:</strong> {{$orden->tel}}</p>
						<p><strong>Ciudad:</strong> {{$orden->city}}</p>
						<p><strong>Barrio:</strong> {{$orden->neighborhood}}</p>
						<p><strong>Dirección:</strong> {{$orden->address}}</p>
					
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">
					Detalles de la compra
				</h3>
				<span class="pull-right">
					<i class="fa fa-fw ti-angle-up clickable"></i>
					<i class="fa fa-fw ti-close removepanel clickable"></i>
				</span>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12">
						<p><strong>Kit:</strong> {{$orden->kit->name}}</p>
						<p><strong>Extras:</strong> 
							{{-- {{count($orden->extras)}} --}}
							@if(count($orden->extras) >= 1)
								@foreach($orden->extras as $extras)
									{{$extras->name}} - &nbsp;
								@endforeach()
							@else()
								No existen extras.
							@endif()
						</p>
						<p><strong>Precio:</strong> ${{$orden->value}}</p>
						<p><strong>Estado:</strong> {{$orden->state}}</p>
						<p><strong>Fecha:</strong> {{$orden->date}}</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	
	<div class="col-lg-4">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">
					Metodo de pago
				</h3>
				<span class="pull-right">
					<i class="fa fa-fw ti-angle-up clickable"></i>
					<i class="fa fa-fw ti-close removepanel clickable"></i>
				</span>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12">
						<p><strong>Payment:</strong> {{$orden->payment}}</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
@stop()
