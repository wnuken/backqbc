<?php

// Escoja el servidor a conectar por SOAP
// $serverDefine = "http://helios.eltiempo.com.co:8085/Mediador/Servicio.svc?wsdl"; // Pruebas
 $serverDefine = "http://libis.eltiempo.com.co:8085/Mediador/Servicio.svc?wsdl";
// $serverDefine = "http://neftis.eltiempo.com.co:81/Mediador/Servicio.svc?wsdl"; // Producción
// $serverDefine = "http://neftis:81/Mediador/Servicio.svc?wsdl"; // Fake

$qbcroute = "/data02/www/quebuenacompradocs/qa/qbc/shell/abstract.php";
// $qbcroute = "/data01/www/quebuenacompradocs/qbc/shell/abstract.php";

define("QBC_SOAP_SERVER", $serverDefine);

define("QBC_ROUTE", $qbcroute);

define("SERVER_DB_QBC_MASTER", "localhost");
define("USER_DB_QBC_MASTER", "developer");
define("PASS_DB_QBC_MASTER", "developer");
define("DB_QBC_MASTER", 'qbcproduccion');

define("SERVER_DB_QBC_SLAVE", "localhost");
define("USER_DB_QBC_SLAVE", "developer");
define("PASS_DB_QBC_SLAVE", "developer");
define("DB_QBC_SLAVE", 'qbcproduccion');

?>