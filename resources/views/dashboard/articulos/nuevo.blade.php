@extends('dashboard.layout.main')
@section('title')
Artculos
@stop()
@section('seccion')
Nuevo Articulo
@stop()
@section('content')
<div class="row">
	<form action="{{url('dashboard/articulos/agregar')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="col-lg-9 col-md-9 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 4%;">
				<h4>Titulo</h4>
				<input type="text" name="title" class="form-control" value="" placeholder="">
			</div>
			<div><h4>Descripción</h4></div>
			<div class="box well well-sm">
                <div class="box-body">
                        <textarea class="textarea" name="description" id="description" placeholder="Descripción del contenido"></textarea>
                </div>
            </div>
		</div>
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 12%; ">
				<h4>Estado</h4>
				<select name="estado" class="form-control">
					<option value=""> Seleccione </option>
					<option value="act">Activo</option>
					<option value="pau">Pausado</option>
					<option value="old">Deshabilidato</option>
				</select>
			</div>

			<div>
				<h4>Categoria</h4>
				<select name="categoria" class="form-control">
					<option value=""> Seleccione </option>
					@foreach($categories as $cate)
						<option value="{{$cate->id}}">{{$cate->categoria}}</option>
					@endforeach()
				</select>
			</div>

			<div style="margin-top: 5%;"><h4>Seleccione una imagen</h4></div>
	        <div>
	        <label class="label_file" >
	        	{{-- <input type="file" name="" value="" placeholder="" class="imgInp"> --}}
	        	{!! Form::file('img', ['class' => 'imgInp', 'id' => 'input-20' , 'required'=>'']) !!}
	        	<img class="blah" src="{{asset('img/black-white.png')}}" style="width: 100%;" />
            </label>
            	{{-- <img src="" alt="" class="blah"> --}}

	        	
	        </div>
	        <div style="margin-top:12%;">
	        	<a href="{{url('dashboard/articulos')}}" class="btn btn-md btn-danger" style="width:48%;margin:0 auto; float: left;">Cancelar</a>
	        	<input type="submit" class="btn btn-md btn-primary" style=" margin:0 auto; width: 48%; float: right;" value="Publicar">
	        </div>
			
		</div>
	</form>
</div>

@stop()
@section('scr')
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
		});

	</script>

	<script>
        CKEDITOR.replace( 'description', {
        	extraPlugins: 'imageuploader',
        	// imagesPath : CKEDITOR.getUrl( CKEDITOR.plugins.getPath() + 'templates/images/' ),
 
    	});
    </script>
@endsection()