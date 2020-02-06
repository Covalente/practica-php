<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Tarea</title>
</head>

<body>
	<center>
		<h1 id="arriba">Tarea</h1>
		<form action="tareaStore.php" method="POST">
		<label form="tarea">NUEVA TAREA: </label>
		<input type="text" name="tarea">
		<br><br><label for="prioridad">PRIORIDAD: </label>
				
				<select name="prioridad">
					<option value="alta">ALTA</option>
					<option value="media">MEDIA</option>
					<option value="baja">BAJA</option>
				</select>
		<br><br><button type="submit">AGREGAR TAREA</button>
	</center>
</body>

</html>
