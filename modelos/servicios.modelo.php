<?php

require_once "conexion.php";

class ModeloServicios{

	/*=============================================
	CREAR servicio
	=============================================*/

	static public function mdlIngresarServicios($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_servicio, precio) VALUES (:nombre_servicio, :precio)");

		$stmt->bindParam(":nombre_servicio", $datos["nombre_servicio"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR servicioS
	=============================================*/

	static public function mdlMostrarServicios($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	EDITAR servicios
	=============================================*/

	static public function mdlEditarServicios($tabla, $datos){
$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre_servicio = :nombre_servicio, precio = :precio
     WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre_servicio", $datos["nombre_servicio"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_INT);
		
		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR servicios
	=============================================*/

	static public function mdlEliminarServicio($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}
}