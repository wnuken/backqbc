<?php

// Escoja el servidor a conectar por SOAP
 $serverDefine = "http://helios.eltiempo.com.co:8085/Mediador/Servicio.svc?wsdl"; // Pruebas
// $serverDefine = "http://neftis.eltiempo.com.co:81/Mediador/Servicio.svc?wsdl"; // Producción
// $serverDefine = "http://neftis:81/Mediador/Servicio.svc?wsdl"; // Fake

define("QBC_SOAP_SERVER", $serverDefine);

?>