<?php
	require_once '../mysql-login.php';
	$conn = new mysqli($hostname, $username,$password, $database);
	if ($conn -> connect_errno)
		die( "Fallo la conexión a MySQL: (" . $conn -> mysqli_connect_errno() . ") " . $conn -> mysqli_connect_error());	
	$result = $conn->query("SELECT nombre_asignatura FROM asignatura WHERE id_asignatura = {$_POST['asignatura']};");
	echo $result;
	echo '<br><table class="table table-striped">';
	while($row = $result->fetch_assoc()){
		echo'
			<tr>
			  <td>'.$row['nombre_asignatura'].'</td>
			</tr>';
	}
	echo '</table>';
	$conn -> close();
?>