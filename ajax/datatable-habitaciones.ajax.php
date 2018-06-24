<?php
 require_once "../controladores/habitaciones.controlador.php";
 require_once "../modelos/habitaciones.modelo.php";

 require_once "../controladores/categorias.controlador.php";
 require_once "../modelos/categorias.modelo.php";

 require_once "../controladores/pisos.controlador.php";
 require_once "../modelos/pisos.modelo.php";

 class TablaHabitaciones{

 	public function mostraTabla(){

 		$item = null;
 		$valor = null;

 		$habitaciones = ControladorHabitaciones::ctrMostrarHabitaciones($item, $valor);
 		echo '{
			  "data": [';

			  for($i = 0; $i < count($habitaciones)-1; $i++){	

			  	$item = "id";
			  	$valor = $habitaciones[$i]["id_categoria"];

			  	$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

			  	$item = "id";
			  	$valor = $habitaciones[$i]["id_piso"];

			  	$pisos = ControladorPiso::ctrMostrarPisos($item, $valor);

			  	echo' [
			      "'.($i+1).'",
			      "'.$habitaciones[$i]["nrohabitacion"].'",
			      "'.$categorias["categoria"].'",
			      "'.$pisos["nro"].'",
			      "'.$habitaciones[$i]["detalle"].'",
			      "S/.'.number_format($habitaciones[$i]["precio"],2).'",
			      "'.$habitaciones[$i]["id"].'"
			    ],';

			  }
			  
			  $item = "id";
			  	$valor = $habitaciones[count($habitaciones)-1]["id_categoria"];

			  	$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

			  	$item = "id";
			  	$valor = $habitaciones[count($habitaciones)-1]["id_piso"];

			  	$pisos = ControladorPiso::ctrMostrarPisos($item, $valor);
			   
			   echo' [
			      "'.count($habitaciones).'",
			      "'.$habitaciones[count($habitaciones)-1]["nrohabitacion"].'",
			      "'.$categorias["categoria"].'",
			      "'.$pisos["nro"].'",
			      "'.$habitaciones[count($habitaciones)-1]["detalle"].'",
			      "S/.'.number_format($habitaciones[count($habitaciones)-1]["precio"],2).'",
			      "'.$habitaciones[count($habitaciones)-1]["id"].'"
			    ]
			  ]
			}';
 	}
 }

 $activar = new TablaHabitaciones();
 $activar -> mostraTabla();