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
	<div class="col-lg-12" style="margin-top:20px;">
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
</div>