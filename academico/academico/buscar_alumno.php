<div class="col-lg-12">
	<ol class="breadcrumb col-lg-12" style="text-align:left;">
	  <li><a href="index.php">Modulos</a></li>
	  <li><a href="modulo.php?m=academico">Academico</a></li>
	  <li class="active">Buscar Alumno</li>
	</ol>
	<h3>Buscar Alumno</h3>
	<br>
	<form class="" role="search" method='post'>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Búsqueda" name="alumno_search" id="alumno_search">
            <div class="input-group-btn">
                <button class="btn btn-default" name="search" type="submit" id="submit-search"><i class="glyphicon glyphicon-search"></i></button>
                <!--<input type='submit' value='' ><i class="glyphicon glyphicon-search"></i></input>-->
            </div>
        </div>
    </form>
	<div id="results">
	</div>
</div>
<script type="text/javascript">
$(function(){
      $('#submit-search').click(function(event) {
        event.preventDefault();
        $name = document.getElementById('alumno_search').value;
        $.ajax({
           type: "POST",
           url: "academico/getNext.php",
           data: "nombres_alumno="+$name,
           success: function(results){
			 $('#results').empty();
             $('#results').append(results);
           }
         });

      });

});
</script>
