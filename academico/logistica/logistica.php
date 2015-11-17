<div class="col-lg-12" style="text-align:center;">
	<?php 
	if(!isset($_GET['t'])){
	?>
	<ol class="breadcrumb col-lg-12" style="text-align:left;">
	  <li><a href="index.php">Modulos</a></li>
	  <li class="active">Logística</li>
	</ol>
	<h3>Seleccione Opción</h3>
	<div class="academic_icon col-lg-12">
		<a href="modulo.php?m=logistica&t=salas">
			<div class="col-lg-3 container"><img class="icon" src="img/logistica/registro.png"><span>Salas</span></div>
		</a>
		<a href="modulo.php?m=logistica&t=inventarios">
			<div class="col-lg-3 container"><img class="icon" src="img/logistica/inventario.png"><span>Inventarios</span></div>
		</a>
		<a href="modulo.php?m=logistica&t=compras">
			<div class="col-lg-3 container"><img class="icon" src="img/logistica/compras.jpg"><span>Compras</span></div>
		</a>
	</div>
	<div class="academic_icon col-lg-12">
		<a href="modulo.php?m=logistica&t=comprar">
			<div class="col-lg-3 container"><img class="icon" src="img/logistica/tangibles.png"><span>Ingresar Compra</span></div>
		</a>
		<a href="#">
			<div class="col-lg-3 container"><img class="icon" src="img/logistica/cotizacion.png"><span>Cotización</span></div>
		</a>
		<a href="modulo.php?m=academico&t=clases">
			<div class="col-lg-3 container"><img class="icon" src="img/logistica/infraestructura.jpg"><span>Infraestructura</span></div>
		</a>
	</div>
	<?php
	}
	else{
		error_reporting(E_ERROR | E_PARSE);
		include($_GET['m']."/".$_GET['t'].".php");
	}
	?>
</div>