<?php
error_reporting(1);
 require_once '../classes.php';

if(!isset($_REQUEST['class'])){
	$result = 'error: No hay clase seleccionada';
	//printf ("<pre>%s</pre>", $result);
	die($result);
}

$params = array();
$params['params'] = $_REQUEST['params'];
$params['class'] = $_REQUEST['class'];

if(isset($params['class']) && $params['class'] == 'changeid'){
	$General = new General();
	$result = $General->changeId($params);
	//printf ("<pre>%s</pre>", $result);
	print $result;
}

if(isset($params['class']) && $params['class'] == 'vfallidas'){
	$General = new General();
	$result = $General->vfallidas($params);
	//printf ("<pre>%s</pre>", $result);
	print $result;
}

if(isset($params['class']) && $params['class'] == 'getsalesxml'){
	$General = new General();
	$result = $General->getSalesXML($params);
	 printf ("<pre>%s</pre>", $result);
	// print $result;
}

if(isset($params['class']) && $params['class'] == 'PagoAliado'){
	$General = new General();
	$result = $General->PagoAliado($params);

	//var_dump($result);
	// printf ("<pre>%s</pre>", $result);
	print '<textarea>' . ($result['XML']) . '</textarea>';
	 print '<pre>'; print_r($result); print '</pre>';
	// print $result;
}

