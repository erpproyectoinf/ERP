<div class="col-lg-12" style="text-align:center;">
  <ol class="breadcrumb col-lg-12" style="text-align:left;">
    <li><a href="index.php">Modulos</a></li>
    <li><a href="modulo.php?m=logistica">Logística</a></li>
    <li class="active">Registro de Compras</li>
  </ol>
	<h3>Registro de Compras</h3>
  <div class="">
      <form class="" role="search" method='post'>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Búsqueda" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" name="search" type="submit" id="submit-search"><i class="glyphicon glyphicon-search"></i></button>
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
    
    $query = utf8_decode("SELECT * FROM sala");
    $result = $conn->query($query);

    if ($result->num_rows > 0) 
      while($row = $result->fetch_assoc()) {
        echo $row['id_sala'];
      }
    
    echo '
      <div class="Tabla">
        <table class="table table-striped">
          <thead>
            <tr>
                <th class="text-center">Producto Comprado</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Fecha</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row" class="text-center">Producto1</th>
                <td class="text-center">4</td>
                <td class="text-center">20/11/2015</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">Producto2</th>
                <td class="text-center">42</td>
                <td class="text-center">20/11/2015</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">Producto3</th>
                <td class="text-center">8</td>
                <td class="text-center">15/07/2015</td>
            </tr>
            </tbody>
        </table>
      </div>
        <br><br>
      ';
    //if((!empty($_POST["Fecha1"]) || !empty($_POST["Fecha2"])))
    //  echo "<br>Búsqueda realizada con éxito desde: ".$_POST["Fecha1"]." hasta:".$_POST["Fecha2"];
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
        webshims.setOptions('waitReady', false);
        webshims.setOptions('forms-ext', {types: 'date'});
        webshims.polyfill('forms forms-ext');
      }
      else{
        $('.Filtro').hide();
        $('input[name=AgregarFiltro]').val("Opciones para filtrar búsqueda");
      }
      count++;
    });

  $(document).ready(function () {
    //var a = $('.Tabla').is(":visible");
    //alert(a);
    if($('.Tabla').is(":visible") == false){
      $('#submit-search').click(); 
    } 


  });
</script>
<!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  
</script>

