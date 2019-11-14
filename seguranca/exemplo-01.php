<?php

// codigo com falha de seguranca

// if ($_SERVER["REQUEST_METHOD"] === "POST")
// {
//     $cmd = $_POST["cmd"];
//     echo "<pre>";
    
//     $comando = system($cmd, $retorno);
    
    
//     echo "</pre>";
    
    
// }

if ($_SERVER["REQUEST_METHOD"] === "POST") // seguro
{
    $cmd = escapeshellcmd($_POST["cmd"]);
    var_dump($cmd);
    echo "<pre>";
    
    $comando = system($cmd, $retorno);
    
    
    echo "</pre>";
    
}






?>

<form method="POST" >


<input type="text" name="cmd" id="">
<button type="submit">Enviar</button>

</form>