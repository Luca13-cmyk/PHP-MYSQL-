<?php

spl_autoload_register(function($nameClass){

    
    if (file_exists("Class" . DIRECTORY_SEPARATOR . $nameClass.".php"))
    {
        require_once("Class" . DIRECTORY_SEPARATOR . $nameClass.".php");
    }
});

?>