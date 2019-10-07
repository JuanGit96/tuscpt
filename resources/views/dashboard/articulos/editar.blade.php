@extends('dashboard.layout.main')
@section('title')
Articulos
@stop()
@section('seccion')
Actualización articulo - {{$model->title}}
@stop()
@section('content')
<div class="row">
	<form action="{{ url('dashboard/articulos/actualizar') }}/{{$model->id}}" role="form" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="col-lg-9 col-md-9 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 4%;">
				<h4>Titulo</h4>
				<input type="text" name="title" class="form-control" value="{{$model->title}}" placeholder="">
			</div>
			<div><h4>Descripción</h4></div>
			<div class="box well well-sm">
                <div class="box-body">
                        <textarea class="textarea editor-cls" name="description" placeholder="Descripción del contenido">{{$model->description}}</textarea>
                </div>
            </div>
		</div>
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 12%;">
				<h4>Estado</h4>
				<select name="estado" class="form-control" >
					<option value=""> Seleccione </option>
					@if($model->state == 'act')
						<option value="act" selected="">Activo</option>
						<option value="pau">Pausado</option>
						<option value="old">Deshabilitado</option>
					@elseif($model->state == 'pau')
						<option value="act" >Activo</option>
						<option value="old" selected="">Pausado</option>
						<option value="old">Deshabilitado</option>
					@elseif($model->state == 'old')
						<option value="act">Activo</option>
						<option value="old">Deshabilitado</option>
						<option value="old" selected="">Deshabilitado</option>
					@else()
						<option value="act">Activo</option>
						<option value="old">Deshabilitado</option>
						<option value="old">Deshabilitado</option>
					@endif()


				</select>
			</div>
			<div>
				<h4>Categoria</h4>
				<select name="categoria" class="form-control">
					<option value=""> Seleccione </option>
						
						@foreach($categories as $cate)
							@if($model->id_categoria == $cate->id)
								<option value="{{$cate->id}}" selected="">{{$cate->categoria}}</option>
							@else()
								<option value="{{$cate->id}}">{{$cate->categoria}}}</option>
							@endif()
						@endforeach()
					

				</select>
			</div>
			<div><h4>Seleccione una imagen</h4></div>
	        <div>
	        	<label class="label_file" >
	        		{!! Form::file('img', ['class' => 'imgInp', 'id' => 'input-20']) !!}
	        	@if($model->picture == null)
	        		<img class="blah" src="{{asset('img/black-white.png')}}" style="width: 100%;" />
	        	@else()
    				<img class="blah" src="{{asset('img')}}/{{$model->picture}}" alt="Imagen destacada" style="width: 100%;" />
	        	@endif()
            	</label>

	        </div>
	        <div style="margin-top:12%;">
	        	<a href="{{url('dashboard/articulos')}}" class="btn btn-md btn-danger" style="width:48%;margin:0 auto; float: left;">Cancelar</a>
	        	<input type="submit" class="btn btn-md btn-primary" style=" margin:0 auto; width: 48%; float: right;" value="Actualizar">
	        </div>
			
		</div>
	</form>
</div>

@stop()
@section('scr')
<script>
        CKEDITOR.replace( 'description', {
        	extraPlugins: 'imageuploader',
        	// imagesPath : CKEDITOR.getUrl( CKEDITOR.plugins.getPath() + 'templates/images/' ),
 
    	});
    </script>
<script type="text/javascript">
	$(document).ready(function(){
		function readURL() {
			var $input = $(this);
		    if (this.files && this.files[0]) {
		        var reader = new FileReader();
		        reader.onload = function(e) {
		            $input.next('.blah').attr('src', e.target.result).show();
		        }
		        reader.readAsDataURL(this.files[0]);
		    }
		}
		$(".imgInp").change(readURL);
	})

</script>
@stop()