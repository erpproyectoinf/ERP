<ol class="breadcrumb col-lg-12" style="text-align:left;">
  <li><a href="index.php">Modulos</a></li>
  <li><a href="modulo.php?m=academico">Academico</a></li>
  <li class="active">Clases</li>
</ol>
<div class="col-lg-12" style="text-align:center;">
	<h3>Seleccione Clases</h3>
	<?php
		$query = "SELECT * FROM curso ORDER BY ensenanza_curso ASC, grado_curso ASC, seccion_curso ASC;";
		$result = $conn->query($query);
	?>
	<select class="form-control" id="cursoselector">
		<option value=""></option>
	<?php 
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				echo '<option value="'.$row['id_curso'].'">'.$row['grado_curso'].'° '.$row['ensenanza_curso'].' '.$row['seccion_curso'].'</option>';
			}
		}
	?>
	</select>
	<?php
		$result = $conn->query($query);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
	echo '
	<div id="'.$row['id_curso'].'" class="cursos" style="display:none">
		<h3><caption>Profesor a cargo de '.$row['grado_curso'].'° '.$row['ensenanza_curso'].' '.$row['seccion_curso'].': </caption><a href=""><small>Nombre Docente</small></a></h3>
		<table class="table table-striped">
		  <thead>
			<tr>
			  <th>Numero Lista</th>
			  <th>Nombre</th>
			  <th>Apellido</th>
			  <th>Perfil</th>
			</tr>
		  </thead>
		  <tbody>';
				$alumn = "SELECT id_alumno,nombres_alumno, apellido_paterno_alumno FROM alumno WHERE curso_ingreso_alumno = ".$row['id_curso']."";
				$data = $conn->query($alumn);
				if ($data->num_rows > 0) {
					while($alumno = $data->fetch_assoc()){
						echo'
			<tr>
			  <th scope="row">1</th>
			  <td>'.$alumno['nombres_alumno'].'</td>
			  <td>'.$alumno['apellido_paterno_alumno'].'</td>
			  <td><a href="modulo.php?m=academico&t=alumno&id='.$alumno['id_alumno'].'">Ver</a></td>
			</tr>';
					}
				}
		echo '
		  </tbody>
		</table>
	</div>';
			}
		}
	?>
</div>
<script>
	$(function() {
        $('#cursoselector').change(function(){
            $('.cursos').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>