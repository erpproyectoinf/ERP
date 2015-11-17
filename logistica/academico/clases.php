<div class="col-lg-12" style="text-align:center;">
	<h3>Seleccione Clases</h3>
	<select class="form-control" id="colorselector">
		<option value="1a">1° A</option>
		<option value="1b">1° B</option>
		<option value="2a">2° A</option>
		<option value="2b">2° B</option>
		<option value="3a">3° A</option>
		<option value="3b">3° B</option>
		<option value="4a">4° A</option>
		<option value="4b">4° B</option>
	</select>
	<div id="red" class="colors" style="display:none"> red... </div>
</div>
<script>
	$(function() {
        $('#colorselector').change(function(){
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>