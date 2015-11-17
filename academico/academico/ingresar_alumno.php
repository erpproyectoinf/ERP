<?php
	$query = "INSERT INTO alumno(rut_alumno, nombres_alumno, apellido_paterno_alumno, apellido_materno_alumno, fecha_ingreso_alumno, fecha_retiro_alumno, registro_matric_alumno, numero_boleta_alumno, curso_ingreso_alumno, condicional_alumno, arte_alumno, sexo_alumno, celular_alumno, telefono_fijo_alumno, correo_alumno, fecha_nacimiento_alumno, nacionalidad_alumno, direccion_alumno, comuna_alumno, religion_alumno, vive_con_alumno, colegio_procedente_alumno, junaeb_alumno, cursos_repetidos_alumno, opta_religion_alumno) 
	VALUES ('".$_POST['rut_alumno']."','".$_POST['nombres_alumno']."','".$_POST['apellido_paterno_alumno']."','".$_POST['apellido_materno_alumno']."',
	'".$_POST['fecha_ingreso_alumno']."','".$_POST['fecha_retiro_alumno']."',".$_POST['registro_matric_alumno'].",".$_POST['numero_boleta_alumno'].",
	".$_POST['curso_ingreso_alumno'].",'".$_POST['condicional_alumno']."','".$_POST['arte_alumno']."','".$_POST['sexo_alumno']."',
	".$_POST['celular_alumno'].",".$_POST['telefono_fijo_alumno'].",'".$_POST['correo_alumno']."','".$_POST['fecha_nacimiento_alumno']."',
	'".$_POST['nacionalidad_alumno']."','".$_POST['direccion_alumno']."','".$_POST['comuna_alumno']."','".$_POST['religion_alumno']."',
	'".$_POST['vive_con_alumno']."','".$_POST['colegio_procedente_alumno']."',".$_POST['junaeb_alumno'].",".$_POST['cursos_repetidos_alumno'].",
	".$_POST['opta_religion_alumno'].")";
	echo $query;
	if(isset($_POST['enviar'])){
		if(($result = $conn->query($query)) == TRUE){
			echo '<div class="alert alert-success" role="alert">Alumno Ingresado Exitosamente</div>';
		}
		else{
			echo '<div class="alert alert-danger" role="alert">Error al Ingresar Alumno</div>';
		}
	}
?>
<div class="col-lg-12">
	<ol class="breadcrumb col-lg-12" style="text-align:left;">
	  <li><a href="index.php">Modulos</a></li>
	  <li><a href="modulo.php?m=academico">Academico</a></li>
	  <li class="active">Ingresar Alumno</li>
	</ol>
	<h3>Ingrese Alumno</h3>
	<br>
	<form action="modulo.php?m=academico&t=ingresar_alumno" method="POST">
		<div class="col-lg-12"><label class="col-lg-6">RUT Alumno</label><input class="col-lg-6" name="rut_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Nombres</label><input class="col-lg-6" name="nombres_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Apellido Paterno</label><input class="col-lg-6" name="apellido_paterno_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Apellido Materno</label><input class="col-lg-6" name="apellido_materno_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Fecha Ingreso</label><input class="col-lg-6" placeholder="Año-Mes-Dia" name="fecha_ingreso_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Fecha Retiro</label><input class="col-lg-6" placeholder="Año-Mes-Dia" name="fecha_retiro_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Registro Matricula</label><input class="col-lg-6" name="registro_matric_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Numero Boleta</label><input class="col-lg-6" name="numero_boleta_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Curso</label><select class="col-lg-6" name="curso_ingreso_alumno">
		<?php 
			$curso = "SELECT * FROM curso ORDER BY ensenanza_curso ASC, grado_curso ASC, seccion_curso ASC";
			$result_curso = $conn->query($curso);
			if ($result_curso->num_rows > 0) {
				while($row = $result_curso->fetch_assoc()){
					echo '<option value="'.$row['id_curso'].'">'.$row['grado_curso'].'° '.$row['ensenanza_curso'].' '.$row['seccion_curso'].'</option>';
				}
			}
		?>
		</select></div>
		<div class="col-lg-12"><label class="col-lg-6">Condicional</label>
		<select name="condicional_alumno">
				<option value="Regular">Regular</option>
				<option value="Condicional">Condicional</option>
				<option value="Extrema Condicionalidad">Extrema Condicionalidad</option>
			</select>
		</div>
		<div class="col-lg-12"><label class="col-lg-6">Arte</label><input class="col-lg-6" name="arte_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Sexo</label>
			<select name="sexo_alumno">
				<option value="Masculino">Masculino</option>
				<option value="Femenino">Femenino</option>
			</select>
		</div>
		<div class="col-lg-12"><label class="col-lg-6">Celular</label><input class="col-lg-6" name="celular_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Telefono Fijo</label><input class="col-lg-6" name="telefono_fijo_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Correo</label><input class="col-lg-6" name="correo_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Fecha Nacimiento</label><input class="col-lg-6" placeholder="Año-Mes-Dia" name="fecha_nacimiento_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Nacionalidad</label><input class="col-lg-6" name="nacionalidad_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Direccion</label><input class="col-lg-6" name="direccion_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Comuna</label><input class="col-lg-6" name="comuna_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Religion</label><input class="col-lg-6" name="religion_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Vive Con</label><input class="col-lg-6" name="vive_con_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Colegio Procedente</label><input class="col-lg-6" name="colegio_procedente_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Junaeb</label>
			<select name="junaeb_alumno">
				<option value="1">Si</option>
				<option value="0">No</option>
			</select>
		</div>
		<div class="col-lg-12"><label class="col-lg-6">Cursos Repetidos</label><input class="col-lg-6" name="cursos_repetidos_alumno"></input></div>
		<div class="col-lg-12"><label class="col-lg-6">Opta Religion</label>
					<select name="opta_religion_alumno">
				<option value="1">Si</option>
				<option value="0">No</option>
			</select>
		</div>
		<input type="submit" name="enviar" value="enviar">
	</form>
</div>
