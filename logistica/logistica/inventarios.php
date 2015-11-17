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
	<h3>Busque elementos del inventario</h3>
  <div class="">
      <form class="" role="search" method='post'>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" name="search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                <!--<input type='submit' value='' ><i class="glyphicon glyphicon-search"></i></input>-->
            </div>
        </div>
         <div id="Divfiltro">
              <input type="button" value="Opciones para filtrar búsqueda" id="OpcionesFiltro" name="AgregarFiltro"/>
            </div>
            <div class="Filtro">              
              <fieldset>
                      <legend>Filtrar Búsqueda</legend>
                      <select class="form-control" name="Categoria">
                        <option value="default">Sin Filtro</option>     
                        <option value="tan">Tangibles</option>
                        <option value="fun">Fungibles</option>
                      </select><br>
                      Fecha de Inicio: <input type = "date" name='Fecha1' id='Fecha1' placeholder='aaa-mm-dd' /> <br><br>
                      Fecha de Fin: <input type='date' name='Fecha2' id='Fecha2' placeholder='aaa-mm-dd' /> <br /><br>
                      <!--<input type='submit' value='Filtrar' />-->
                      <br><br>
              </fieldset>
            </div>
      </form>
  </div>
  <br>
  
  <?php
  if(isset($_POST['search'])){ 
    if(empty($_POST["Fecha1"]))
      $_POST["Fecha1"] = "0000-00-00";
    if(empty($_POST["Fecha2"]))
      $_POST["Fecha2"] = "9999-01-01";
    
    echo '
      <div class="Tabla">
        <table class="table table-striped">
          <thead>
            <tr>
                <th class="text-center">Nombre de Sala</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Tipo</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row" class="text-center">Sala1</th>
                <td class="text-center">4</td>
                <td class="text-center">Tangible</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">Sala2</th>
                <td class="text-center">42</td>
                <td class="text-center">Tangible</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">Sala3</th>
                <td class="text-center">8</td>
                <td class="text-center">Tangible</td>
            </tr>
            </tbody>
        </table>
      </div>
        <br><br>
      ';
    //if((!empty($_POST["Fecha1"]) || !empty($_POST["Fecha2"])))
      //echo "<br>Búsqueda realizada con éxito desde: ".$_POST["Fecha1"]." hasta:".$_POST["Fecha2"];
  }

?>
<br><br>
          <a href="modulo.php?m=logistica" class="go_back"></a>
</div>

<script type="text/javascript">
 // $(document).ready(function () {

    $('.Filtro').hide();
    var count=2;
    $('#Divfiltro').on('click', '#OpcionesFiltro', function () {
      if(count%2 == 0){
        $('.Filtro').show();
        $('input[name=AgregarFiltro]').val("Realizar búsqueda sin Filtro");
      }
      else{
        $('.Filtro').hide();
        $('input[name=AgregarFiltro]').val("Opciones para filtrar búsqueda");
      }
      count++;
    });
</script>

