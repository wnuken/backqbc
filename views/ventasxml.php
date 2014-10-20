<?php
// Include 
// require_once '../classes.php';
?>
<h2>Ventas XML</h2>
<form id="sendxmlsell" name="sendxmlsell" method='POST'>
	<textarea placeholder="Pedido a procesar" id="xmltext" class="xmltext" name="xmltext"></textarea>
	<input class="btn btn-primary" id="summit" type='submit' value='Procesar'>
</form>
<div id="loader" style="display:none;"><img title="img/ajax-loaders/ajax-loader-7.gif" src="img/ajax-loaders/ajax-loader-7.gif"></div>
<div id="response"></div>

<script type="text/javascript">

	var editor = CodeMirror.fromTextArea(document.getElementById("xmltext"), {
      lineNumbers: true,
      mode: "application/xml",
      matchBrackets: true,
      styleActiveLine: true,
      lineWrapping: true
    });

	$('input#summit').on('click', function(e){
		e.preventDefault();
		editor.save();
		var params = $('textarea#xmltext').val();
		$().getFuntions({'params':params, 'class':'sendxmlsell'});
	});

</script>
