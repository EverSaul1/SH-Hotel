<?php

class ControladorPiso{

	/*=============================================
	CREAR CATEGORIAS
	=============================================*/

	static public function ctrCrearPisos(){

		if(isset($_POST["nuevoPiso"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoPiso"])){

				$tabla = "pisos";

				$datos = $_POST["nuevoPiso"];

				$respuesta = ModeloPisos::mdlIngresarPiso($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El piso ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "pisos";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La categoría no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "pisos";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/

	static public function ctrMostrarPisos($item, $valor){

		$tabla = "pisos";

		$respuesta = ModeloPisos::mdlMostrarPisos($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	EDITAR CATEGORIA
	=============================================*/

	static public function ctrEditarPiso(){

		if(isset($_POST["editarPiso"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarPiso"])){

				$tabla = "pisos";

				$datos = array("nro"=>$_POST["editarPiso"],
							   "id"=>$_POST["idPiso"]);

				$respuesta = ModeloPisos::mdlEditarPiso($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El piso ha sido cambiada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "pisos";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El piso no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "pisos";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR CATEGORIA
	=============================================*/

	static public function ctrBorrarPiso(){

		if(isset($_GET["idPiso"])){

			$tabla ="pisos";
			$datos = $_GET["idPiso"];

			$respuesta = ModeloPisos::mdlBorrarPiso($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "El piso ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "pisos";

									}
								})

					</script>';
			}
		}
		
	}
}
