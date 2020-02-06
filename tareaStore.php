<?php
include('Tarea.php');

$t = new Tarea();

if(!empty($_POST['tarea']) && !empty($_POST['prioridad'])) {
	$tarea = $_POST['tarea'];
	$prioridad = $_POST['prioridad'];
	
	$t->store($tarea, $prioridad);
}

header('Location: tareaIndex.php');
?>