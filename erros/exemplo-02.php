<?php
// evitando o warning e o notice



error_reporting(E_ALL & ~E_NOTICE); // mostra as excecoes (E_ALL), mas evita as noticias (~E_NOTICE);


$nome = $_GET["nome"];

echo $nome


?>