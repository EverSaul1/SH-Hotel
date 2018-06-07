/*=============================================
EDITAR CATEGORIA
=============================================*/
$(".tablas").on("click", ".btnEditarPiso", function(){

	var idPiso = $(this).attr("idPiso");

	var datos = new FormData();
	datos.append("idPiso", idPiso);

	$.ajax({
		url: "ajax/pisos.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){

     		$("#editarPiso").val(respuesta["piso"]);
     		$("#idPiso").val(respuesta["id"]);

     	}

	})


})

/*=============================================
ELIMINAR CATEGORIA
=============================================*/
$(".tablas").on("click", ".btnEliminarPiso", function(){

	 var idPiso = $(this).attr("idPiso");

	 swal({
	 	title: '¿Está seguro de borrar el piso?',
	 	text: "¡Si no lo está puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: 'Si, borrar piso!'
	 }).then(function(result){

	 	if(result.value){

	 		window.location = "index.php?ruta=pisos&idPiso="+idPiso;

	 	}

	 })

})