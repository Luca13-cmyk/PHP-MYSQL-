<?php
// Exemplo 1
// aspas duplas pode-ser usar variavel dentro delas
// aspas simples puro texto

$nome = "luca Antonio";
echo "NOME: $nome";
$completo = "<br /> $nome Negrette";
echo $completo;

// Exemplo 2

// Funcoes strings

$br = "<br />";
$nome = strtoupper($nome); // tudo maiusculo
echo $nome;
$nome = strtolower($nome); // tudo minusculo
echo "<br> $nome";
$nome = ucfirst($nome); // Converte a primeira palavra em maiuscula
echo "$br $nome";
$nome = ucwords($nome); // Primeiro de cada palavra em maiscula
echo  "<br> $nome";

// Exemplo 3

$nome = str_replace("L", "K", $nome); // Troca uma certa parte da string por outra coisa
echo "$br $nome";

// Exemplo 4

$frase = "A repeticao e a mae da retencao";
$q = strpos($frase, "mae"); // retorna o indice da ocorrencia
var_dump($q);
$texto = substr($frase, 0, $q); // retorna ate a parte selecionada da string
// |___________alvo__inicio__fim|
echo $texto;
$texto = substr($frase, $q + strlen("mae"), strlen($frase)); // salva a frase depois do mae
echo $texto;

echo md5("barcelona13"); // calculo o hash da string

$arr = str_split($frase, 3);
print_r($arr);





?>
