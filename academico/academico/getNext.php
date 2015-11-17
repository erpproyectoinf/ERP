<?php
	require_once '../mysql-login.php';
	$conn = new mysqli($hostname, $username,$password, $database);
	if ($conn -> connect_errno)
		die( "Fallo la conexión a MySQL: (" . $conn -> mysqli_connect_errno() . ") " . $conn -> mysqli_connect_error());	
	$result = $conn->query("SELECT * FROM alumno WHERE nombres_alumno LIKE '%{$_POST['nombres_alumno']}%';");
	echo '<br><table class="table table-striped">';
	while($row = $result->fetch_assoc()){
		echo'
			<tr>
			  <td>'.$row['nombres_alumno'].'</td>
			  <td>'.$row['apellido_paterno_alumno'].'</td>
			  <td><a href="modulo.php?m=academico&t=alumno&id='.$row['id_alumno'].'">Ver</a></td>
			</tr>';
	}
	echo '</table>';
	$conn -> close();
?>