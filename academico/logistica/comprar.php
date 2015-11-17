<div class="col-lg-12" style="text-align:center;">
	<ol class="breadcrumb col-lg-12" style="text-align:left;">
	  <li><a href="index.php">Modulos</a></li>
	  <li><a href="modulo.php?m=logistica">Logística</a></li>
	  <li class="active">Ingresar Compra</li>
	</ol>
	<h3>Ingresar una nueva compra</h3>
  <div class="">
      <form class="" role="search" method='post'>             
        <fieldset>
                <legend>Filtrar Búsqueda</legend>
                <select class="form-control" name="Categoria_Disponibilidad">
                  <option value="default">Sin Filtro (Elección de disponibilidad de sala)</option>     
                  <option value="tan">Horarios de salas ocupadas</option>
                  <option value="fun">Horarios de salas desocupadas</option>
                </select><br>
                <select class="form-control" name="Categoria_Sala">
                  <option value="default">Sin Filtro (Elección de sala específica)</option>     
                  <option value="1a">1° A</option>
                  <option value="1b">1° B</option>
                  <option value="2a">2° A</option>
                  <option value="2b">2° B</option>
                  <option value="3a">3° A</option>
                  <option value="3b">3° B</option>
                  <option value="4a">4° A</option>
                  <option value="4b">4° B</option>
                  <option value="Casino">Casino</option>
                  <option value="Gimnasio">Gimnasio</option>
                  <option value="Hall">Hall</option>
                </select><br>
                <p class="text-center">Seleccione fecha si lo desea</p>
                Fecha de Inicio: <input type = "date" name='Fecha1' id='Fecha1' placeholder='aaa-mm-dd' /> <br><br>
                Fecha de Fin: <input type='date' name='Fecha2' id='Fecha2' placeholder='aaa-mm-dd' /> <br /><br>
                <br><br>
                <button class="search_button" name="search" type="submit" id="submit-search"></button>

        </fieldset>
   
      </form>
  </div>