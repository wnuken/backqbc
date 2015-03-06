<?php
// Include 
require_once '../classes.php';
?>
<div>
<p>Escriba el NIT de aliado a consultar</p>
<form id="sendxmlsell" name="salesxml" method='POST' class="formsend">
	<input placeholder="NIT Aliado" id="idmerchant" name="idmerchant" value="900190044">
	<button class="btn btn-danger" id="submit" type="submit">Procesar</button>
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