<?php
	
	 require_once "../controladores/habitaciones.controlador.php";
	 require_once "../modelos/habitaciones.modelo.php";




	class AjaxHabitaciones{

		public $idHabitacion;

		public function ajaxEditarHabitaciones(){

			$item = "id";
			$valor = $this->idHabitacion;

			$respuesta = ControladorHabitaciones::ctrMostrarHabitaciones($item, $valor);

			echo json_encode($respuesta);


		}
	}

if(isset($_POST["idHabitacion"])){

	$editarHabitacion = new AjaxHabitaciones();
	$editarHabitacion -> idHabitacion = $_POST["idHabitacion"];
	$editarHabitacion -> ajaxEditarHabitaciones();
}	