
@extends('dashboard.layout.main')
@section('title')
Agencias
@stop()
@section('seccion')
Nueva Agencia
@stop()
@section('content')
<div class="row">
	<form action="{{url('dashboard/agencias/agregar')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="col-lg-9 col-md-9 col-xs-12 col-sm-12 ">
			<div style="margin-bottom: 4%;">
				<h4>Titulo</h4>
				<input type="text" name="name" class="form-control" value="" placeholder="">
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
				<h4>Codigo</h4>
				<input type="text" name="code" class="form-control">
			</div>

			<div>
				<h4>Comision</h4>
				<input type="text" name="comision" class="form-control" placeholder="$">
			</div>


	        <div style="margin-top:12%;">
	        	<a href="{{url('dashboard/agencias')}}" class="btn btn-md btn-danger" style="width:48%;margin:0 auto; float: left;">Cancelar</a>
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