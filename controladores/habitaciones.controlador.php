<?php
	
	class ControladorHabitaciones {

		static public function ctrMostrarHabitaciones($item, $valor){
			
			$tabla = "habitaciones";

			$respuesta = ModeloHabitaciones::mdlMostrarHabitaciones($tabla, $item, $valor);

			return $respuesta;

		}

		static public function ctrCrearHabitacion(){

			if(isset($_POST["nuevoNumeroHabitacion"])){
				if(preg_match('/^[0-9 ]+$/', $_POST["nuevoNumeroHabitacion"])&&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoDetalle"])&&
					preg_match('/^[0-9 ]+$/', $_POST["nuevoPrecio"])){

					$tabla = "habitaciones";

					$datos = array("id_categoria" => $_POST["nuevaCategoria"],
									"id_piso" => $_POST["nuevoPiso"],
									"nrohabitacion" => $_POST["nuevoNumeroHabitacion"],
									"detalle" => $_POST["nuevoDetalle"],
									"precio" => $_POST["nuevoPrecio"]);

					$respuesta = ModeloHabitaciones::mdlIngresarHabitaciones($tabla, $datos);

					if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La Habitacion ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "habitaciones";

									}
								})

					</script>';
				}

				}else{
					echo'<script>

					swal({
						  type: "error",
						  title: "¡La habitacion no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "habitaciones";

							}
						})

			  	</script>';

				}
				
			}
		
	}
}