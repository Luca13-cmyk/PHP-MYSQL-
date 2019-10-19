<?php

// function __autoload($nome)
// {
//     var_dump($nome);
//     require_once("$nome.php");
// }


// $morango = new Morango();


// Exemplo 2


function incluirClasses($nome) // local
{
    if (file_exists($nome.".php") === true)
    {
        require_once($nome.".php");
    }
}

spl_autoload_register("incluirClasses");

// ---------------------------------------------------------------
spl_autoload_register(function($nome){ // diretorio abstrato
    if (file_exists("abstratas" . DIRECTORY_SEPARATOR . $nome.".php") === true)
    {
        require_once("abstratas" . DIRECTORY_SEPARATOR . $nome.".php");
    }
});
// ----------------------------------------------------------------
$morango = new Morango();

?>