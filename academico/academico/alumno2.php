<?php
	$sql = "SELECT * FROM alumno WHERE id_alumno = ".$_GET['id']."";
	$alumn = $conn->query($sql);
	$data = $alumn->fetch_assoc();
	$sql2 = "SELECT * FROM curso WHERE id_curso = ".$data['curso_ingreso_alumno']."";
	$class = $conn->query($sql2);
	$data2 = $class->fetch_assoc();
?>
<ol class="breadcrumb col-lg-12" style="text-align:left;">
  <li><a href="index.php">Modulos</a></li>
  <li><a href="modulo.php?m=academico">Academico</a></li>
  <li><a href="modulo.php?m=academico&t=clases">Clases</a></li>
  <li class="active">Ficha Alumno</li>
</ol>
<div class="col-lg-12" style="text-align:center;">
	<div class="col-lg-6 col-lg-offset-3">
		<h3>Ficha Alumno</h3>
	</div>
	<div class="col-lg-12" style="margin-top:20px;" id="ficha_alumno">
		<button type="button" class="btn btn-info" onclick="toggle()" id="editar_perfil" style="margin-bottom:10px;">Editar</button>
		<button type="button" class="btn btn-warning" onclick="toggle2()" id="editar_perfil" style="margin-bottom:10px;">Eliminar Alumno</button>
		<div class="col-lg-3">
			<img class="col-lg-12" src="img/academico/perfil.jpg">
		</div>
		<div class="col-lg-9" style="text-align:left; font-size:1.2em;">
			<div class="col-lg-12" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Nombre Completo:</h4></b><small><?php echo $data['nombres_alumno'].' '.$data['apellido_paterno_alumno'].' '.$data['apellido_materno_alumno'];?></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>RUT:</h4></b><small><?php echo $data['rut_alumno'];?></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Fecha Nacimiento:</h4></b><small><?php echo $data['fecha_nacimiento_alumno'];?></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Curso:</h4></b><small><a href=""><?php echo $data2['grado_curso'].'° '.$data2['ensenanza_curso'].' '.$data2['seccion_curso'];?></a></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Nombre Apoderado:</h4></b><small><?php echo 'Dato Faltante';?></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Condición Actual:</h4></b><small><?php echo $data['condicional_alumno'];?></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Sexo:</h4></b><small><?php echo $data['sexo_alumno'];?></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Arte:</h4></b><small><?php echo $data['arte_alumno'];?></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Telefono Fijo:</h4></b><small><?php echo $data['telefono_fijo_alumno'];?></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Celular:</h4></b><small><?php echo $data['celular_alumno'];?></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Correo:</h4></b><small><?php echo $data['correo_alumno'];?></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Nacionalidad:</h4></b><small><?php echo $data['nacionalidad_alumno'];?></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Comuna:</h4></b><small><?php echo $data['comuna_alumno'];?></small></div>
			<div class="col-lg-12" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Direccion:</h4></b><small><?php echo $data['direccion_alumno'];?></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Religion:</h4></b><small><?php echo $data['religion_alumno'];?></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Vive con:</h4></b><small><?php echo $data['vive_con_alumno'];?></small></div>
			<?php $coleg = $data['colegio_procedente_alumno'] == '' ? 'Ninguno' : $data['colegio_procedente_alumno'];?>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Colegio Anterior:</h4></b><small><?php echo $coleg;?></small></div>
			<?php $junaeb = $data['junaeb_alumno'] == 1 ? 'Si' : 'No';?>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Junaeb:</h4></b><small><?php echo $junaeb;?></small></div>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Cursos Repetidos:</h4></b><small><?php echo $data['cursos_repetidos_alumno'];?></small></div>
			<?php $opta = $data['opta_religion_alumno'] == 1 ? 'Si' : 'No';?>
			<div class="col-lg-6" style="border:1px solid RGBA(0,0,0,0.2);"><b><h4>Opta Religion:</h4></b><small><?php echo $opta;?></small></div>
			
		</div>
	</div>
		<div id="editar_ficha">
			<form action="modulo.php?m=academico&t=alumno2&id=<?php echo $_GET['id'];?>" method="POST">
			<div class="col-lg-12"><label class="col-lg-6">RUT Alumno</label><input class="col-lg-6" name="rut_alumno" value="<?php echo $data['rut_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Nombres</label><input class="col-lg-6" name="nombres_alumno" value="<?php echo $data['nombres_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Apellido Paterno</label><input class="col-lg-6" name="apellido_paterno_alumno" value="<?php echo $data['apellido_paterno_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Apellido Materno</label><input class="col-lg-6" name="apellido_materno_alumno" value="<?php echo $data['apellido_materno_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Fecha Nacimiento</label><input class="col-lg-6" placeholder="Año-Mes-Dia" name="fecha_nacimiento_alumno" value="<?php echo $data['fecha_nacimiento_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Curso</label><select class="col-lg-6" name="curso_ingreso_alumno">
			<?php 
				$curso = "SELECT * FROM curso ORDER BY ensenanza_curso ASC, grado_curso ASC, seccion_curso ASC";
				$result_curso = $conn->query($curso);
				if ($result_curso->num_rows > 0) {
					while($row = $result_curso->fetch_assoc()){
						$curso_alumno = $data2['grado_curso'].'° '.$data2['ensenanza_curso'].' '.$data2['seccion_curso'];
						$current_curso =$row['grado_curso'].'° '.$row['ensenanza_curso'].' '.$row['seccion_curso'];
						echo '<option value="'. $row['id_curso'] .'"'. ($current_curso == $curso_alumno ? "selected" : "") .'>'. $current_curso .'</option>';
					}
				}
			?>
			</select></div>
			<div class="col-lg-12"><label class="col-lg-6">Condicional</label>
			<select name="condicional_alumno">
					<option value="Regular " <?php echo $data['condicional_alumno'] == 'Regular' ? 'selected' : '' ?>>Regular</option>
					<option value="Condicional " <?php echo $data['condicional_alumno'] == 'Condicional' ? 'selected' : '' ?>>Condicional</option>
					<option value="Extrema Condicionalidad " <?php echo $data['condicional_alumno'] == 'Extrema Condicionalidad' ? 'selected' : '' ?>>Extrema Condicionalidad</option>
				</select>
			</div>
			<div class="col-lg-12"><label class="col-lg-6">Sexo</label>
				<select name="sexo_alumno">
					<option value="Masculino " <?php echo $data['sexo_alumno'] == 'Masculino' ? 'selected' : '' ?>>Masculino</option>
					<option value="Femenino " <?php echo $data['sexo_alumno'] == 'Femenino' ? 'selected' : '' ?>>Femenino</option>
				</select>
			</div>
			<div class="col-lg-12"><label class="col-lg-6">Arte</label><input class="col-lg-6" name="arte_alumno" value="<?php echo $data['arte_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Telefono Fijo</label><input class="col-lg-6" name="telefono_fijo_alumno" value="<?php echo $data['telefono_fijo_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Celular</label><input class="col-lg-6" name="celular_alumno" value="<?php echo $data['celular_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Correo</label><input class="col-lg-6" name="correo_alumno" value="<?php echo $data['correo_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Nacionalidad</label><input class="col-lg-6" name="nacionalidad_alumno" value="<?php echo $data['nacionalidad_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Comuna</label><input class="col-lg-6" name="comuna_alumno" value="<?php echo $data['comuna_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Direccion</label><input class="col-lg-6" name="direccion_alumno" value="<?php echo $data['direccion_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Religion</label><input class="col-lg-6" name="religion_alumno" value="<?php echo $data['religion_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Vive Con</label><input class="col-lg-6" name="vive_con_alumno" value="<?php echo $data['vive_con_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Colegio Procedente</label><input class="col-lg-6" name="colegio_procedente_alumno" value="<?php echo $data['colegio_procedente_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Junaeb</label>
				<select name="junaeb_alumno">
					<option value="1 " <?php echo $data['junaeb_alumno'] == '1' ? 'selected' : '' ?>>Si</option>
					<option value="0 " <?php echo $data['junaeb_alumno'] == '0' ? 'selected' : '' ?>>No</option>
				</select>
			</div>
			<div class="col-lg-12"><label class="col-lg-6">Cursos Repetidos</label><input class="col-lg-6" name="cursos_repetidos_alumno" value="<?php echo $data['cursos_repetidos_alumno'];?>"></input></div>
			<div class="col-lg-12"><label class="col-lg-6">Opta Religion</label>
						<select name="opta_religion_alumno">
					<option value="1 " <?php echo $data['opta_religion_alumno'] == '1' ? 'selected' : '' ?>>Si</option>
					<option value="0 " <?php echo $data['opta_religion_alumno'] == '0' ? 'selected' : '' ?>>No</option>
				</select>
			</div>
			
			<input type="submit" name="enviar" value="enviar">
		</form>
		<button onclick="toggle()">Cancelar</button>
	</div>
</div>
<?php
	$query = "UPDATE alumno SET rut_alumno = '".$_POST['rut_alumno']."', nombres_alumno = '".$_POST['nombres_alumno']."', 
	apellido_paterno_alumno = '".$_POST['apellido_paterno_alumno']."', apellido_materno_alumno = '".$_POST['apellido_materno_alumno']."',
	condicional_alumno = '".$_POST['condicional_alumno']."', arte_alumno = '".$_POST['arte_alumno']."', 
	sexo_alumno = '".$_POST['sexo_alumno']."', celular_alumno = ".$_POST['celular_alumno'].", telefono_fijo_alumno = ".$_POST['telefono_fijo_alumno'].",
	correo_alumno = '".$_POST['correo_alumno']."', fecha_nacimiento_alumno = '".$_POST['fecha_nacimiento_alumno']."',
	nacionalidad_alumno = '".$_POST['nacionalidad_alumno']."', direccion_alumno = '".$_POST['direccion_alumno']."',
	comuna_alumno = '".$_POST['comuna_alumno']."', religion_alumno = '".$_POST['religion_alumno']."',
	vive_con_alumno = '".$_POST['vive_con_alumno']."', colegio_procedente_alumno = '".$_POST['colegio_procedente_alumno']."',
	junaeb_alumno = ".$_POST['junaeb_alumno'].", cursos_repetidos_alumno = ".$_POST['cursos_repetidos_alumno'].",
	opta_religion_alumno = ".$_POST['opta_religion_alumno']." WHERE id_alumno = ".$_GET['id'].""  ;
	//echo $query;
	/*if(isset($_POST['enviar'])){
		if(($result = $conn->query($query)) == TRUE){
			echo '<div class="alert alert-success" role="alert">Alumno Actualizado Exitosamente</div>';
		}
		else{
			echo '<div class="alert alert-danger" role="alert">Error al Actualizar Alumno</div>';
		}
	}*/
?>
<script>
var status = -1;
function toggle(){
	status++;
	if(status > 1) status = 0;
	var ficha = document.getElementById('ficha_alumno');
	var editar = document.getElementById('editar_ficha');
	console.log(ficha);
	console.log(editar);
	if(status == 0){
		ficha.style.display = "inline";
		editar.style.display = "none";
	}else{
		ficha.style.display = "none";
		editar.style.display = "inline";
	}
}
toggle();
</script>