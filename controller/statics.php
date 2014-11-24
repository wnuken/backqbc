<?php

// Escoja el servidor a conectar por SOAP
 $serverDefine = "http://helios.eltiempo.com.co:8085/Mediador/Servicio.svc?wsdl"; // Pruebas
// $serverDefine = "http://neftis.eltiempo.com.co:81/Mediador/Servicio.svc?wsdl"; // Producción
// $serverDefine = "http://neftis:81/Mediador/Servicio.svc?wsdl"; // Fake

//$qbcroute = "/data02/www/quebuenacompradocs/qa/qbc/shell/abstract.php";
$qbcroute = "/data02/www/quebuenacompradocs/qa/qbc/shell/abstract.php";

define("QBC_SOAP_SERVER", $serverDefine);

define("QBC_ROUTE", $qbcroute);

?>