<ol class="breadcrumb col-lg-12" style="text-align:left;">
  <li><a href="index.php">Modulos</a></li>
  <li><a href="modulo.php?m=academico">Academico</a></li>
  <li class="active">Lista Asignaturas</li>
</ol>
<div class="col-lg-12" style="text-align:center;">
	<div class="col-lg-6 col-lg-offset-3">
		<h3>Lista Asignaturas</h3>
	<?php
		$query = "SELECT * FROM asignatura ORDER BY nombre_asignatura ASC;";
		$result = $conn->query($query);
	?>
		<select class="form-control" id="asignaturaID" onchange="findAsign();">
			<option value=""></option>
		<?php 
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					echo '<option value="'.$row['id_asignatura'].'">'.$row['nombre_asignatura'].'</option>';
				}
			}
		?>
		</select>
		<div id="showAsignatura">
		</div>
	</div>
</div>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>  -->
<script type="text/javascript">
	function findAsign(){
		event.preventDefault();
		var selectBox = document.getElementById("asignaturaID");
		var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        $.ajax({
           type: "POST",
           url: "academico/getAsignatura.php",
           data: "asignatura="+$selectedValue,
           success: function(results){
			   alert(results);
             $('#showAsignatura').append(results);
           },
		  error: function(XMLHttpRequest, textStatus, errorThrown) {
			 alert("some error");
		  }
         });
    }
</script>
