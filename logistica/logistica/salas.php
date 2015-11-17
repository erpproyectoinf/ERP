<div class="col-lg-12" style="text-align:center;">
	<h3>Registro de Salas</h3>
  <div class="">
      <form class="" role="search" method='post'>
         <div id="Divfiltro">
              <input type="button" value="Opciones para filtrar búsqueda" id="OpcionesFiltro" name="AgregarFiltro"/>
            </div>
            <div class="Filtro">              
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
                <th class="text-center">Sala</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Horario</th>
                <th class="text-center">Disponibilidad</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row" class="text-center">Sala 1A</th>
                <td class="text-center">20/11/2015 - 30/12/2015</td>
                <td class="text-center"> 08:00-12:00 <br> 14:00-15:00</td>
                <td class="text-center">Reservado</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">Casino</th>
                <td class="text-center">20/11/2015 - 30/12/2015</td>
                <td class="text-center"> 12:00-14:00</td>
                <td class="text-center">Reservado</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">Gimnasio</th>
                <td class="text-center">15/07/2015 - 30/12/2015</td>
                <td class="text-center">13:00</td>
                <td class="text-center">Reservado</td>
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
<!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
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