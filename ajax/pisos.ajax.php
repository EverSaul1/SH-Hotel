<?php

require_once "../controladores/pisos.controlador.php";
require_once "../modelos/pisos.modelo.php";

class AjaxPisos{

	/*=============================================
	EDITAR CATEGORÍA
	=============================================*/	

	public $idPiso;

	public function ajaxEditarPiso(){

		$item = "id";
		$valor = $this->idPiso;

		$respuesta = ControladorPiso::ctrMostrarPisos($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR CATEGORÍA
=============================================*/	
if(isset($_POST["idPiso"])){

	$piso = new AjaxPisos();
	$piso -> idPiso = $_POST["idPiso"];
	$piso -> ajaxEditarPiso();
}
