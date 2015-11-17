<div class="col-lg-12" style="text-align:center;">
	<?php 
	if(!isset($_GET['t'])){
	?>
	<ol class="breadcrumb col-lg-12" style="text-align:left;">
	  <li><a href="index.php">Modulos</a></li>
	  <li class="active">Academico</li>
	</ol>
	<h3>Seleccione Opcion</h3>
	<div class="academic_icon col-lg-12">
		<a href="modulo.php?m=academico&t=lista_asignatura">
			<div class="col-lg-3"><img src="img/academico/asignatura.png"><span>Asignatura</span></div>
		</a>
		<a href="#">
			<div class="col-lg-3"><img src="img/academico/calificaciones.png"><span>Calificaciones</span></div>
		</a>
		<a href="modulo.php?m=academico&t=clases">
			<div class="col-lg-3"><img src="img/academico/clases.png"><span>Clases</span></div>
		</a>
		<a href="modulo.php?m=academico&t=ingresar_alumno">
			<div class="col-lg-3"><img src="img/academico/clases.png"><span>Ingresar Alumno</span></div>
		</a>
		<a href="modulo.php?m=academico&t=buscar_alumno">
			<div class="col-lg-3"><img src="img/academico/clases.png"><span>Buscar Alumno</span></div>
		</a>
	</div>
	<?php
	}
	else{
		include($_GET['m']."/".$_GET['t'].".php");
	}
	?>
</div>