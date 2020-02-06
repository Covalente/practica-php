<?php
class Conexion {
	public $conexionDB;
	function __construct() {
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="practica";
		
		try {
			$this->conexionDB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$this->conexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e) {
			echo "Conexión Fallida: " . $e->getMessage();
		}
	}
}
?>