<?php
include('conexion.php');
class Tarea extends Conexion {
	function __construct() {
		parent:: __construct();
	}
	public function store($tarea, $prioridad) {
		$sql = "INSERT INTO tarea(tarea,prioridad)
		VALUES('$tarea', '$prioridad')";
		
		$this->conexionDB->exec($sql);
	}
	
	public function index() {
		$resultado = [];
		
		$stmt = $this->conexionDB->prepare("SELECT * FROM tarea");
		$stmt->execute();
		
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		
		return $stmt->fetchAll();
	}
}
?>