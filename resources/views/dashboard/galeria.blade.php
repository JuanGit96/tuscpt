@extends('dashboard.layout.main')
@section('title')
Artculos
@stop()
@section('seccion')
Galeria de Imagenes
@stop()
@section('content')
<div class="row">
	<div class="col-lg-12">
		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			Añadir Imagen
		</button>
		<div class="collapse" id="collapseExample" style="margin-top:1%;">
			<div class="well">
			<form action="{{url('dashboard/galeria/add')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<center>
				<div class="form-group">
					<input type="file" name="file" placeholder="" required="">
				</div>
					<input type="submit" name="" class="btn btn-success" value="Subir">
				</center>
			</form>
			</div>
		</div>
	</div>
</div>
<div class="row" style="margin-top: 5%;">
	<?php if ($dir = opendir('img/')): ?>
		<?php while (false !== ($entrada = readdir($dir))): ?>
			<?php if ($entrada != "." && $entrada != ".."): ?>
				<?php if (count($entrada) > 0 ) : ?>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail" style="height: 200px;margin-bottom: 5%;overflow: hidden;">
							{{-- <img src="..." alt="..."> --}}
							<img src="{{asset('img')}}/{{$entrada}}">
							<p style="text-align: center; padding: 5px; background: #ccc;color: #000;vertical-align: bottom;">{{$entrada}}</p>
						</a>
					</div>

				<?php else : ?> 
					<h3>No existen archivos</h3>
				<?php endif ?>
			<?php endif ?>
		<?php endwhile ?>
	<?php endif ?>
</div>
@stop()