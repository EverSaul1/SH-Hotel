<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=sql10.freesqldatabase.com;dbname=sql10245730",
			            "sql10245730",
			            "k7giuejYaI");

		$link->exec("set names utf8");

		return $link;

	}

}