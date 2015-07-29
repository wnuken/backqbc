<?php

// Escoja el servidor a conectar por SOAP
 $serverDefine = "http://helios.eltiempo.com.co:8085/Mediador/Servicio.svc?wsdl"; // Pruebas
// $serverDefine = "http://libis.eltiempo.com.co:8085/Mediador/Servicio.svc?wsdl";
// $serverDefine = "http://neftis.eltiempo.com.co:81/Mediador/Servicio.svc?wsdl"; // Producción
// $serverDefine = "http://neftis:81/Mediador/Servicio.svc?wsdl"; // Fake

$qbcroute = "/data02/www/quebuenacompradocs/qa/qbc/shell/abstract.php";
// $qbcroute = "/data01/www/quebuenacompradocs/qbc/shell/abstract.php";

define("QBC_SOAP_SERVER", $serverDefine);

define("QBC_ROUTE", $qbcroute);

define("SERVER_DB_QBC_MASTER", "localhost");
define("USER_DB_QBC_MASTER", "magento");
define("PASS_DB_QBC_MASTER", "m4g3nt0CEET");
define("DB_QBC_MASTER", 'qa.qbc.com');

define("SERVER_DB_QBC_SLAVE", "localhost");
define("USER_DB_QBC_SLAVE", "magento");
define("PASS_DB_QBC_SLAVE", "m4g3nt0CEET");
define("DB_QBC_SLAVE", 'qa.qbc.com');

?>