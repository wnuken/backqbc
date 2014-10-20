<?php
// Include 
//require_once '../classes.php';
?>
<h2>Esta función Cambiará los Ids petición y elinará los registros de qbc_sci_sell_doc, por favor proceder con precaución.</h2>
<form id="change_id" name="change_id" method='POST'>
	<textarea placeholder="Cada id se debe separar por un salto de línea" id="text" name="text" rows="10" style="width: 100%;"></textarea>
	<input class="btn btn-primary" id="summit" type='submit' value='Procesar'>
</form>
<div id="response"></div>
<?php
$var = ',';
if(isset($_REQUEST['text']))
	$var = $_REQUEST['text'];
$var = explode(',', $var);

echo "<table id='table' class='table table-condensed table-hover'>";
if (isset($var[0]) && $var[0] != '') {
	echo "<tr><th>Anterior ID</th><th>Nuevo ID</th></tr>";
	foreach ($var as $key => $value) {
   	# code...

		$clasinfo = "";
		if($key%2 == 0){
			$clasinfo = "info";
		}


		$value = trim($value);

		$num = strlen($value);

		echo "<tr class='".$clasinfo."'><td>". $value ."</td><td>". substr(md5($value), 0, 24) ."</td></tr>";

	}

}
echo "</table>";


?>

<div><h3>Query Para reversar cambio</h3>
<p>insert into qbc_sci_sell_doc
values (NULL, 'cf1ee2f1f99e40e51fd817ac', 'aprobado',
'Estado: aprobado Detalle: Doc.1300179468 se contabilizó en sociedad ETCO',
'1300179468', 1, 49900, '25/07/2014'
);
</p><p>

update qbc_sci_sell s
join qbc_sci_sell_change_petition cp
on s.petition_id = cp.peticion_new
and s.petition_id = 'bd2498f38d6b15aefd9f99f2'
set s.petition_id = cp.peticion_old;</p>
</div>

<script type="text/javascript">
	$('input#summit').on('click', function(e){
		e.preventDefault();
		var params = $('textarea#text').val();
		console.log(params);
		$().getProcess({'params':params, 'class':'changeid'});
	});

</script>