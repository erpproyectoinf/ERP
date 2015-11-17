
	<!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>


<div class="col-lg-12" style="text-align:center;">
	<h3>Busque registros por fecha</h3>
	<form method='post'>
        <fieldset>
                <legend>Filtrar Búsqueda</legend>
                Fecha de Inicio: <input type = "date" name='Fecha1' id='Fecha1' placeholder='aaa-mm-dd' /> <br><br>
                Fecha de Fin: <input type='date' name='Fecha2' id='Fecha2' placeholder='aaa-mm-dd' /> <br /><br>

                <input type='submit' value='' class="search_button"/>
                <br><br>
        </fieldset>
	</form>

	<?php
		if($_POST){
			echo '
			<div class="Tabla">
				<table class="table table-striped">
					<thead>
						<tr>
						  	<th class="text-center">Nombre de Producto</th>
						  	<th class="text-center">Cantidad</th>
						  	<th class="text-center">Fecha</th>
						  	<th class="text-center">Monto Total</th>
						</tr>
				  	</thead>
				  	<tbody>
						<tr>
						  	<th scope="row" class="text-center">Producto1</th>
						  	<td class="text-center">4</td>
						  	<td class="text-center">20/12/2015</td>
						  	<td class="text-center">$xxxx</td>
						</tr>
						<tr>
						  	<th scope="row" class="text-center">Producto2</th>
						  	<td class="text-center">2</td>
						  	<td class="text-center">20/12/2015</td>
						  	<td class="text-center">$xxxx</td>
						</tr>
						<tr>
						  	<th scope="row" class="text-center">Producto3</th>
						  	<td class="text-center">6</td>
						  	<td class="text-center">20/12/2015</td>
						  	<td class="text-center">$xxxx</td>
						</tr>
				  	</tbody>
				</table>
			</div>
				<br><br>
			';
		}
	?>

<br><br>
	<a href="modulo.php?m=logistica" class="go_back"></a>
	
</div>

