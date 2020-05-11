<?php
	
        $controllername = $_POST['controller'] . 'Controller';
         require($_SERVER['DOCUMENT_ROOT'] . "/cv/templates/controller/".$controllername.".php");
       
        $controllername::delete();

    
?>
