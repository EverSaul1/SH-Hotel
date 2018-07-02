<?php

class ControladorServicios{

	/*=============================================
	CREAR serviciosS
	=============================================*/

	static public function ctrCrearServicio(){

		if(isset($_POST["nuevoServicio"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoServicio"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoPrecio"]))
			   {


			   	$tabla = "servicios";

			   	$datos = array("nombre_servicio"=>$_POST["nuevoServicio"],
			   		           "precio"=>$_POST["nuevoPrecio"])
					           ;

			   	$respuesta = ModeloServicios::mdlIngresarServicios($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "el servico ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "servicios";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El servicio no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "servicios";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	MOSTRAR servicisS
	=============================================*/

	static public function ctrMostrarServicios($item, $valor){

		$tabla = "servicios";

		$respuesta = ModeloServicios::mdlMostrarServicios($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR servicios
	=============================================*/

	static public function ctrEditarServicio(){

		if(isset($_POST["editarServicio"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarServicio"]) &&
			   preg_match('/^[0-9]+$/', $_POST["editarPrecio"])){

			   	$tabla = "servicios";

			   	$datos = array("id"=>$_POST["idServicio"],
			   				   "nombre_servicio"=>$_POST["editarServicio"],
					           "precio"=>$_POST["editarPrecio"]);

			   	$respuesta = ModeloServicios::mdlEditarServicios($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El servico ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "servicios";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El servicio no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "servicios";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR Servicio
	=============================================*/

	static public function ctrEliminarServicio(){

		if(isset($_GET["idServicio"])){

			$tabla ="Servicios";
			$datos = $_GET["idServicio"];

			$respuesta = ModeloServicios::mdlEliminarServicio($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El Servicio ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "servicios";

								}
							})

				</script>';

			}		

		}

	}

}