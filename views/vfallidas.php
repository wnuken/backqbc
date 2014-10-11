<?php
// Include 
require_once '../classes.php';
?>
<h2>Reenviar peticion fallida</h2>
<form id="change_id" name="change_id" method='POST'>
	<input placeholder="Pedido a procesar" id="text" name="text" type="text" >
	<input class="btn btn-primary" id="summit" type='submit' value='Procesar'>
</form>
<div id="loader" style="display:none;"><img title="img/ajax-loaders/ajax-loader-7.gif" src="img/ajax-loaders/ajax-loader-7.gif"></div>
<div id="response"></div>

<script type="text/javascript">
	$('input#summit').on('click', function(e){
		e.preventDefault();
		var params = $('input#text').val();
		console.log(params);
		$().getProcess({'params':params, 'class':'vfallidas'});
	});

</script>