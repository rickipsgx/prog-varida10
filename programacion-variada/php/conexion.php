<?php 
	function conectarse() {
		$servidor="localhost";
		$usuario="root";
		$password="";
		$bd="usuario_registro";

		$conectar = new mysqli($servidor,$usuario,$password,$bd);
		return $conectar;
	};

	$conexion = conectarse();
 ?>