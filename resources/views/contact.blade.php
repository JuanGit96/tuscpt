@extends('layouts.general')

@section('metadescription')
	<title>¿Tienes alguna duda? Contáctanos - Tus Cajas Para Trasteos</title>
	<meta name="description" content="Tenemos todo lo que necesitas para empacar tu trasteo o mudanza a un solo clic y a domicilio en Bogotá. Kits de cajas de cartón. Contáctanos al  305 367 8619">
	<meta property="og:url"           content="http://www.tuscajasparatrasteos.com" />
	<meta property="og:type"          content="website" />
	<meta property="og:description"   content="Si tienes alguna duda o deseas hacernos una sugerencia, te agradecemos y estamos para atenderte" />
	<meta property="og:image"         content="{{asset('img/O6PG550.jpg')}}" />
@endsection

@section('content')

<div id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
         <div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="mensaje">
					
				</div>
				<center>
					
					<div class="before">
						
					</div>
				</center>	
				<h1>
		          	<strong>Contáctanos</strong>
		        </h1>

		        <h4>
		          	Escríbenos si tienes alguna duda o sugerencia, estamos para servirte. 
		        </h4>
				<form id="form-contacto" action="{{url('contact/add')}}"" method="post">

					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<input type="text" class="form-control" name="nombre" placeholder="¿Cómo te llamas?" required />
					</div>

					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="¿Cuál es tu correo?" required />
					</div>

					<div class="form-group">
						<textarea rows="3" class="form-control" name="descripcion" placeholder="Describe detalladamente la duda o sugerencia que tengas" required></textarea>
					</div>

					<div class="text-right">
						<input type="submit" id="enviar" class="btn" value="Enviar" placeholder="">
					</div>

				</form>
				
			</div>

			<div class="col-xs-12 col-sm-6">
				<div id="map"></div>
			</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
	<script>
		$('form#form-contacto').submit(function(e){
			e.preventDefault();
			var form = $(this);
			var link_img = '{{asset("img")}}/';
			
			$.ajax({
				type: form.attr('method'),
				url: form.attr('action'),
				data: form.serialize(),
				
				beforeSend: function(){
					$('form').html('');
					$('h1').html('');
					$('h4').html('');
					$(".before").html("<img style='width:15%;text-align:center; margin:4%; vertical-align:middle;' src='"+link_img+"loading.gif' alt="Loading - Cajas de cartón"/>");
				},
				success: function(data){
					$('.before').html('');

					$('.mensaje').html('<div class="alert alert-success" role="alert">Gracias por contactarnos</div>');
					console.log(data);
				},
				error: function(error){
					alert(error);
				}
			});
		});
	</script>

	<script>
		function myMap() {
			var mapCanvas = document.getElementById("map");
			var myCenter = new google.maps.LatLng(4.680217, -74.043190);
			var mapOptions = {center: myCenter, zoom: 15};
			var map = new google.maps.Map(mapCanvas,mapOptions);
			var marker = new google.maps.Marker({
				position: myCenter,
				animation: google.maps.Animation.BOUNCE
			});
			marker.setMap(map);
		}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkHnM_DpcnRpYEsCbdKsWd6be7Jxqhvak&callback=myMap"></script>

	<script type="text/javascript">
	  $(document).ready(function() {
	      $('#header ul').find('active').removeClass('active');
	      $('#header #header-contact').addClass('active');
	  });
	</script>
@endsection