<?php

$contenido = file_get_contents('http://qa.quebuenacompra.com/atmadmin/loe/');

 $file = fopen("archivo.php", "w");

fwrite($file, $contenido . PHP_EOL);

fclose($file);


print($contenido);