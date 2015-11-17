<div class="col-lg-12" style="text-align:center;">
	<?php 
	if(!isset($_GET['t'])){
	?>
	<h3>Seleccione Opcion</h3>
	<div class="academic_icon col-lg-12">
		<a href="#">
			<div class="col-lg-3"><img src="img/academico/asignatura.png"><span>Asignatura</span></div>
		</a>
		<a href="#">
			<div class="col-lg-3"><img src="img/academico/calificaciones.png"><span>Calificaciones</span></div>
		</a>
		<a href="modulo.php?m=academico&t=academico/clases">
			<div class="col-lg-3"><img src="img/academico/clases.png"><span>Clases</span></div>
		</a>
	</div>
	<?php
	}
	else{
		include($_GET['t'].".php");
	}
	?>
</div>