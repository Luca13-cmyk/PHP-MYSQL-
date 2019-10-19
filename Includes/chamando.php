<?php
// include "includes.php"; // chamando o arquivo includes.php
// (Tenta funcionar mesmo que o arquivo nao exista e mais completo)
//require "includes.php"; // chamando o arquivo includes.php 
// (Obriga que o arquivo exista e que esteja funcionando corretamente)

require_once "includes.php"; // chama somente 1 vez o arquivo, evitando erros caso chame 2 vezes


$res = somar(10, 20);

echo $res;

?>