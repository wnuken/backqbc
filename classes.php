<?php

//header('Content-Type: text/html; charset=UTF-8');

// Include 
require_once dirname(__FILE__) . '/vendor/propel/runtime/lib/Propel.php';

include_once dirname(__FILE__) . '/src/Epi.php';

include_once dirname(__FILE__) . '/controller/SettingsController.php';
include_once dirname(__FILE__) . '/controller/ViewsController.php';
include_once dirname(__FILE__) . '/controller/GeneralController.php';

include_once dirname(__FILE__) . '/controller/statics.php';

// Initialize Propel with the runtime configuration
Propel::init(dirname(__FILE__) . "/build/conf/atmadmin-conf.php");

// Add the generated 'classes' directory to the include path
set_include_path(dirname(__FILE__) . "/build/classes" . PATH_SEPARATOR . get_include_path());

 Epi::setPath('base', dirname(__FILE__) . '/src');
 Epi::setPath('config', dirname(__FILE__) . '/config');
// Epi::init('route','cache-apc');
 Epi::init('route');
 getRoute()->load('config.ini');

// getRoute()->get('/change', 'changeid');
?>