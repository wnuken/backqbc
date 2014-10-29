
<?php

$mysqli = new mysqli("localhost", "magento", "m4g3nt0CEET", "qa.qbc.com");
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


/*$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
]);
$client->set('foo', 'bar');
$value = $client->get('foo');

/*
$pipeline = $client->pipeline();
  $pipeline->flushall();
$responses = $pipeline->execute();
*/
/*$responses = $client->flushall();
print '<pre>';
print_r($responses);
print '</pre>';*/

?>
<div class="row">
    <div class="col-md-4">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Servidor Base de datos</h3>
            </div>
            <div class="panel-body">
<?php 
print $mysqli->host_info . '<br />';
?>
            </div>
        </div>    
    </div>

    <div class="col-md-4">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Generar ID Petición</h3>
            </div>
            <div class="panel-body">
<?php 
$actualTime = strtotime('now');
$md5 = md5($actualTime);
print $actualTime . '<br />';
print substr($md5, 0 ,24);
?>
            </div>
        </div>    
    </div>
</div>




