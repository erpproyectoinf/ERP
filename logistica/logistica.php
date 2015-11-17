<div class="col-lg-12" style="text-align:center;">
	<?php 
	if(!isset($_GET['t'])){
	?>
	<h3>Seleccione Opción</h3>
	<div class="academic_icon col-lg-12">
		<a href="modulo.php?m=logistica&t=logistica/salas">
			<div class="col-lg-3 container"><img class="icon" src="img/logistica/registro.png"><span>Salas</span></div>
		</a>
		<a href="modulo.php?m=logistica&t=logistica/inventarios">
			<div class="col-lg-3 container"><img class="icon" src="img/logistica/inventario.png"><span>Inventarios</span></div>
		</a>
		<a href="modulo.php?m=logistica&t=logistica/compras">
			<div class="col-lg-3 container"><img class="icon" src="img/logistica/compras.jpg"><span>Compras</span></div>
		</a>
	</div>
	<div class="academic_icon col-lg-12">
		<a href="modulo.php?m=logistica&t=logistica/comprar">
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
		if((include($_GET['t'].".php"))==TRUE){
		}
		else{
			echo "Error, archivo no encontrado";
		}
	}
	?>
</div>