


var deletecode = (id) => {
	swal({
		title: "¿Deseas eliminar este codigo?",
		text: "Preciona Eliminar para hacerlo",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Eliminar",
		closeOnConfirm: false,
		html: false
	}).then(function() {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			method: "get",
			url: "/dashboard/promociones/delete/"+id
		}).done((res) => {
			swal({
				title: "! Accion completada !",
				text: "Se creo una nueva promocion",
				icon: "success"
			}).then(function() {
				location.reload(true);
			});
		}).fail((error) => {
			swal("Error!",
				"No se puede eliminar el codigo",
				"error");
		});
	});
}

var showEditCode = (id) => {

	this.id = id;
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$.ajax({
		method: "GET",
		url: "/dashboard/promociones/show/" + id

	}).done((res) => {

		document.getElementById("name").value = res.name;
		document.getElementById("code").value = res.code;
		document.getElementById("discount").value = res.discount;
		

	}).fail((error) => {
		$('#modaleditcode').modal('hide');
		alert("error, no se puede traer la información solicitada");
	});
};

var updateCode = () => {

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$.ajax({
		method: "PUT",
		url: "/dashboard/promociones/editar/" + this.id,
		data: $("#formeditcode").serialize(),
	}).done((res) => {
		console.log(res);
		$('#modaleditcode').modal('toggle');
		swal({
				title: "! Accion completada !",
				text: "Se edito la promocion",
				icon: "success"
			}).then(function() {
				location.reload(true);
			});


	}).fail((error) => {
		$('#modaleditcode').modal('toggle');
		swal("Oops...", "Verfique que se hayan completado todos los campos", "error");
	});
}
