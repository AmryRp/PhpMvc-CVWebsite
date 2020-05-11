
<?php

define('WEBROOT',str_replace("dashboard/index.php","",$_SERVER["SCRIPT_NAME"]));
define('ROOT',str_replace("dashboard/index.php","",$_SERVER["SCRIPT_FILENAME"]));

require($_SERVER['DOCUMENT_ROOT']. '/cv/templates/config/core.php');
require($_SERVER['DOCUMENT_ROOT']. '/cv/router.php');
require($_SERVER['DOCUMENT_ROOT']. '/cv/request.php' ) ;
require($_SERVER['DOCUMENT_ROOT']. '/cv/dispatcher.php') ;
$dispatch = new Dispatcher();
$dispatch->dispatch();

?>