@extends('layouts.general')

@section('metadescription')
	<title>Noticias de moda, mudanza, diseño y decoración - Tus Cajas Para Trasteos</title>
	<meta name="description" content="Tenemos todo lo que necesitas para empacar tu trasteo o mudanza a un solo clic y a domicilio en Bogotá. Contáctanos al  305 367 8619">
	<meta property="og:url"           content="http://www.tuscajasparatrasteos.com" />
	<meta property="og:type"          content="website" />
	<meta property="og:description"   content="Tenemos todo lo que necesitas para empacar tu trasteo o mudanza a un solo clic y a domicilio en Bogotá. Contáctanos al  305 367 8619" />
	<meta property="og:image"         content="{{asset('img/landscape.jpg')}}" />
@endsection

@section('content')


<div id="noticias-section">
	<div class="container-fluid">
		<div class="row">
			<div class="news-categorias">
				<h1 class="text-center">
					<i class="fa fa-newspaper-o" aria-hidden="true"></i> Noticias
				</h1>
				<ul id="ejm2">
					<li class="active" id="todas_noticias"><a  >Todas</a></li>
					@foreach($categories as $ca)
					<li data-id="{{$ca->id}}" value="{{$ca->id}}"><a class="categoria">{{$ca->categoria}}</a></li>
					@endforeach()
				</ul>
			</div>

			<div class="row noticias-galeria" id="noticias-rel">
			</div>
			<div class="col-xs-12" style="margin-bottom: 10%;">
				<center class="center">
					<input type="hidden" class="id_categoria" name="categoria" value="">
					<a class="loadMoreTodas" style="display: none;" >Ver más</a>
					<a class="loadMorePorCategoria" style="display: none;" >Ver más</a>
					<div class="before"></div>
				</center>
			</div>
		</div>
	</div>	
</div>
@endsection

@section('script')
<script>
	$(document).ready( function(){
		var ul = document.getElementById('ejm2');  // Parent
		var row = $(this).parents('li');
		var id = row.data('id');
		
		var url_site = '{{route('articles.index')}}/';
		var link_img = '{{asset('img')}}/';
		if ($('#todas_noticias').hasClass('active')) {
			$('#noticias-rel').html('');
			$.ajax({
				type : 'get',
				url : '{{url("noticias")}}',
				data : 'todas=all',
				beforeSend: function(){
					$('.loadMoreTodas').hide();
					$(".before").html("<img style='width:150px;text-align:center; margin:4%; vertical-align:middle;' src='"+link_img+"loading.gif' alt='loading cajas de cartón' />");
				},
				success: function(data){
					$(".before").html("");
					$('.loadMoreTodas').show();
					console.log(data);
					for (var i = 0; i < data.length; i++) {
						var id_noticia = data[i].id;
						$(".loadMoreTodas").prop("id", id_noticia);
						var noticias = [
						'<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 kit-content">',
						'<a href="'+url_site+''+data[i].id+'">',
						'<div class="kit-lienzo">',
						'<div class="kit-img">',
						'<img src="'+link_img+''+data[i].picture+'" alt="'+data[i].title+'">',
						'</div>',
						'<div class="kit-title">',
						'<h3>' + data[i].title + '</h3>',
						'</div>',
						'<p>' + data[i].description.substring(0,100) + '</p>',
						'</div>',
						'</a>',
						'</div>'
						];
						var htmlToString = noticias.join('');
						$('#noticias-rel').append(htmlToString);
					}
				},
				error: function(error){
					console.log(error);
				}
			});
		}
		$('#todas_noticias').click(function(){
			$('#noticias-rel').html('');
			$.ajax({
				type : 'get',
				url : '{{url("noticias")}}',
				data : 'todas=all',
				beforeSend: function(){
					$('.loadMorePorCategoria').hide();
					$(".before").html("<img style='width:150px;text-align:center; margin:4%; vertical-align:middle;' src='"+link_img+"loading.gif' alt='loading cajas de cartón 2'/>");
				},
				success: function(data){
					$(".before").html("");
					$('.loadMoreTodas').show();
					console.log(data);
					for (var i = 0; i < data.length; i++) {
						var id_noticia = data[i].id;
						$(".loadMoreTodas").prop("id", id_noticia);
						var noticias = [
						'<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 kit-content">',
						'<a href="'+url_site+''+data[i].id+'">',
						'<div class="kit-lienzo">',
						'<div class="kit-img">',
						'<img src="'+link_img+''+data[i].picture+'" alt="'+data[i].title+'">',
						'</div>',
						'<div class="kit-title">',
						'<h3>' + data[i].title + '</h3>',
						'</div>',
						'<p>' + data[i].description.substring(0,100) + '</p>',
						'</div>',
						'</a>',
						'</div>'
						];
						var htmlToString = noticias.join('');
						$('#noticias-rel').append(htmlToString);
					}
				},
				error: function(error){
					console.log(error);
				}
			});
		});
		$('.loadMoreTodas').on("click", function(e){
			e.preventDefault();
			var id = $(this).attr("id");

			if (id != "" || id != "undefined") {
				$.ajax({
					type : "get",
					url : "{{url('noticias')}}",
                	data : "cargarMas=" + id,
	                beforeSend: function()
	                {
	                	$(".loadMoreTodas").hide();
	                	$(".before").html("<img style='width:150px;text-align:center; margin:4%; vertical-align:middle;' src='"+link_img+"loading.gif' alt='loading cajas de cartón 3'/>");
	                },
	                success : function(data) 
	                {
	                	console.log(data);
	                	$(".before").html("");
                		$(".loadMoreTodas").show();
	                	if (data.response == true) {
							for (var i = 0; i < data.arti.length; i++) {
								var id_noticia = data.arti[i].id;
								$(".loadMoreTodas").prop("id", id_noticia);
								var noticias = [
								'<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 kit-content">',
								'<a href="'+url_site+''+data.arti[i].id+'">',
								'<div class="kit-lienzo">',
								'<div class="kit-img">',
								'<img src="'+link_img+''+data.arti[i].picture+'" alt="'+data.arti[i].title+'">',
								'</div>',
								'<div class="kit-title">',
								'<h3>' + data.arti[i].title + '</h3>',
								'</div>',
								'<p>' + data.arti[i].description.substring(0,100) + '</p>',
								'</div>',
								'</a>',
								'</div>'
								];
								var htmlToString = noticias.join('');
								$('#noticias-rel').append(htmlToString);
							}
	                	}else{
	                		$('.loadMoreTodas').hide();
	                	}
	                	
	                },
	                error: function()
	                {
	                	alert("error");
	                }
            	});
			}
			return false;
		});
		$('.loadMorePorCategoria').on("click", function(e){
			e.preventDefault();
			var id = $(this).attr("id");
			var id_categoria = $('.id_categoria').val();

			if (id != "" || id != "undefined") {
				$.ajax({
					type : "get",
					url : "{{url('noticias')}}",
                	data : {
                		'ID': id,
                		'ID_CATEGORIA' : id_categoria,
                	},
	                beforeSend: function()
	                {
	                	$(".loadMorePorCategoria").hide();
	                	$(".before").html("<img style='width:150px;text-align:center; margin:4%; vertical-align:middle;' src='"+link_img+"loading.gif' alt='loading cajas de cartón 4'/>");
	                },
	                success : function(data) 
	                {
	                	console.log(data);
	                	$(".before").html("");
                		$(".loadMorePorCategoria").show();
	                	if (data.response == true) {
							for (var i = 0; i < data.arti.length; i++) {

								var id_noticia = data.arti[i].id;
								$(".loadMorePorCategoria").prop("id", id_noticia);

								var noticias = [
								'<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 kit-content">',
								'<a href="'+url_site+''+data.arti[i].id+'">',
								'<div class="kit-lienzo">',
								'<div class="kit-img">',
								'<img src="'+link_img+''+data.arti[i].picture+'" alt="'+data.arti[i].title+'">',
								'</div>',
								'<div class="kit-title">',
								'<h3>' + data.arti[i].title + '</h3>',
								'</div>',
								'<p>' + data.arti[i].description.substring(0,100) + '</p>',
								'</div>',
								'</a>',
								'</div>'
								];
								var htmlToString = noticias.join('');
								$('#noticias-rel').append(htmlToString);
							}
	                	}else{
	                		$('.loadMorePorCategoria').hide();
	                	}
	                	
	                },
	                error: function()
	                {
	                	alert("error");
	                }
            	});
			}
			return false;
		});
		$('.categoria').on('click', function(e){
			var row = $(this).parents('li');
			var id = row.data('id');
			$('#noticias-rel').html('');
			$('.loadMoreTodas').hide();

			$.ajax({
				type : 'get',
				url : '{{url("noticias")}}',
				data : 'categoria='+id,
				beforeSend: function(){
					$('.loadMorePorCategoria').hide();
					$(".before").html("<img style='width:150px;text-align:center; margin:4%; vertical-align:middle;' src='"+link_img+"loading.gif' alt='loading cajas de cartón 5'/>");
				},
				success: function(data){
					$(".before").html("");
					$('.loadMorePorCategoria').show();
					for (var i = 0; i < data.length; i++) {
						console.log(data);
						var id = data[i].id;
						$('.loadMorePorCategoria').prop('id', id);
						var id_categoria = data[i].id_categoria;
						$('.id_categoria').val(id_categoria); 
						var noticias = [
						'<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 kit-content">',
						'<a href="'+url_site+''+data[i].id+'">',
						'<div class="kit-lienzo">',
						'<div class="kit-img">',
						'<img src="'+link_img+''+data[i].picture+'" alt="'+data[i].title+'">',
						'</div>',
						'<div class="kit-title">',
						'<h3>' + data[i].title + '</h3>',
						'</div>',
						'<p>' + data[i].description.substring(0,100) + '</p>',
						'</div>',
						'</a>',
						'</div>'
						];
						var htmlToString = noticias.join('');
						$('#noticias-rel').append(htmlToString);
					}
				},
				error: function(error){
					console.log(error);
				}
			});
		});
	});

</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#header ul').find('active').removeClass('active');
		$('#header #header-noticias').addClass('active');
		$('#ejm2 li').click(function() {
			$(this).siblings().removeClass('active');
			$(this).addClass('active');
		});
	});
</script>
@endsection