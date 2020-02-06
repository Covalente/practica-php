<!DOCTYPE html>
<?php
	include('Tarea.php');
?>
<html>

<head>
	<meta charset="utf-8">
	<title>Tareas</title>
</head>

<body>
	<center>
		<h1 id="arriba">Listado de Tareas</h1>
	</center>
	<?php
		$t = new Tarea();
		$info = $t->index();
	?>
	<table border="5">
		<tr>
			<th>ID</th>
			<th>Tarea</th>
			<th>Prioridad</th>
		</tr>
		<?php
			foreach($info as $row){
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['tarea'] . "</td>";
				echo "<td>" . $row['prioridad'] . "</td>";			
				echo "</tr>";
			}
		?>
	</table>
</body>

</html>