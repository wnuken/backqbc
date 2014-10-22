<?php
// Include 
// require_once '../classes.php';
/*
$params['tipo'] = "REGO";
$params['xml'] = file_get_contents(dirname(__FILE__) . '/pago.xml');
$params['urlWsdl'] =  QBC_SOAP_SERVER;
 $params['options'] = array(
    // 'soap_version'=> SOAP_1_2,
    // 'exceptions'=> true,
    // 'trace'=> 1,
    // 'encoding'=> 'utf-8',
    'cache_wsdl'=> WSDL_CACHE_NONE
    );


*/

// $resultVenta = PagoAliado($params);

?>

<h2>Envia pago aliado de las peticiones redimidas pendientes.</h2>
<form id="sendpay" name="sendpay">
	<input placeholder="Escribir id Campaña" class="text" id="idcampaign" type='text' value=''>
	<input placeholder="Porcentaje Campaña" class="pcam" id="pcam" type='text' value='16'>
	<input placeholder="Enviar" class="send" id="send" type='text' value='0'>
	<input class="btn btn-primary" id="summit" type='submit' value='Procesar'>
</form>
<div id="response"></div>

