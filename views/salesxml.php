<?php
// Include 
require_once '../classes.php';
?>
<div>
<p>Escriba el NIT de aliado a consultar</p>
<form id="salesxml" name="salesxml" method='POST'>
	<input placeholder="NIT Aliado" id="idmerchant" name="idmerchant" value="900190044">
	<input class="btn btn-primary" id="summit" type='submit' value='Procesar'>
</form>
<div id="response"></div>
</div>


<script type="text/javascript">
	$('input#summit').on('click', function(e){
		e.preventDefault();
		var params = $('input#idmerchant').val();
		console.log(params);
		$().getProcess({'params':params, 'class':'getsalesxml'});
	});

</script>