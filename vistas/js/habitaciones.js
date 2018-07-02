var table = $(".tablaHabitaciones").DataTable({

	"ajax": "ajax/datatable-habitaciones.ajax.php",
	"columnDefs": [{

		"targets": -1,
		"data": null,
		"defaultContent": '<div class="btn-group">  <button class="btn btn-warning btnEditarHabitacion" idHabitacion data-toggle= "modal" data-target = "#modalEditarHabitacion"><i class="fa fa-pencil"></i></button> <button class="btn btn-danger btnEliminarHabitacion" idHabitacion><i class="fa fa-times"></i></button></div>'
	}

	],

	"language": {

		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
		},
		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}
	}
	



})

 $('.tablaHabitaciones tbody').on( 'click', 'button', function () {

        var data = table.row( $(this).parents('tr') ).data();

        
        $(this).attr("idHabitacion", data[7])
 } );


$(".tablaHabitaciones tbody").on("click", "button.btnEditarHabitacion", function(){

	var idHabitacion = $(this).attr("idHabitacion");
	
	var datos = new FormData();

	datos.append("idHabitacion", idHabitacion);

	console.log("idHabitacion", idHabitacion);

	$.ajax({
		url: "ajax/habitaciones.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){

     		var datosCategoria = new FormData();
     		datosCategoria.append("idcategoria",respuesta["id_categoria"]);

			     $.ajax({
					url: "ajax/categorias.ajax.php",
					method: "POST",
			      	data: datosCategoria,
			      	cache: false,
			     	contentType: false,
			     	processData: false,
			     	dataType:"json",
			     	success: function(respuesta){

			     		$("#editarCategoria").val(respuesta["id"]);
			     		$("#editarCategoria").html(respuesta["categoria"]);

				     	}

					})

     		
     	}

	})

})

