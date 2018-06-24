<?php
	require_once "conexion.php";

	class ModeloHabitaciones{

		static public function mdlMostrarHabitaciones($tabla, $item, $valor){

			if($item != null){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :item");
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

		static public function mdlIngresarHabitaciones($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_categoria,id_piso,nrohabitacion,detalle,precio) VALUES (:id_categoria, :id_piso, :nrohabitacion, :detalle, :precio)");

			$stmt ->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
			$stmt ->bindParam(":id_piso", $datos["id_piso"], PDO::PARAM_INT);
			$stmt ->bindParam(":nrohabitacion", $datos["nrohabitacion"], PDO::PARAM_STR);
			$stmt ->bindParam(":detalle", $datos["detalle"], PDO::PARAM_STR);
			$stmt ->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);

			if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;



		}
	}