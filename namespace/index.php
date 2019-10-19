<?php

require_once("config.php");


use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Luca");
$cad->setEmail("Lucanegrette@hotmail.com");
$cad->setSenha("toor");
$cad->registrarVenda();
// echo $cad;
?>