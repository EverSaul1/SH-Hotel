var table = $(".tablaHabitaciones").DataTable({

	"ajax": "ajax/datatable-habitaciones.ajax.php",
	"columnDefs": [{

		"targets": -1,
		"data": null,
		"defaultContent": '<div class="btn-group">  <button class="btn btn-warning btnEditarHabitacion " idHabitacion><i class="fa fa-pencil"></i></button> <button class="btn btn-danger btnEliminarHabitacion" idHabitacion><i class="fa fa-times"></i></button></div>'
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

