<?php

spl_autoload_register(function($nameClass){

    var_dump($nameClass);
    
    $dirClass = "class";
    //$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; // o path do arquivo (windows)
    $filename = str_replace("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"); // (Posix)
    //          vai trocar \\ por / no alvo ->
    if (file_exists($filename))
    {
        require_once($filename);
    }
});

?>