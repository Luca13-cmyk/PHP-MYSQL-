<?php
/* 
**  METODOS PHP DE VARIAVEIS **

unset($anoNascimento); // limpa a variavel
isset($anoNascimento); // se a variavel existe isset()
var_dump($nome); // numero de caracters e tipo de dado

*/
// Exemplo 1

$nome = "Luca";

echo $nome;
echo "<br>";
var_dump($nome); // numero de caracters e tipo de dado

// Exemplo 2

$anoNascimento = 2001;
echo $anoNascimento;
unset($anoNascimento); // limpa a variavel
if (isset($anoNascimento)){ // se a variavel existe isset()
    echo $anoNascimento;
} else {
    echo "Nao existe";
}

$sobrenome = "Negrette";
$nomeCompleto = "<br />" . $nome . " " . $sobrenome; // concatenacao de variaveis
echo $nomeCompleto;

// Exemplo 3
//exit
$nome2 = "luca";
$site = "a fazer";
$ano = 2019;
$salario = 5500.99;
$bloqueado = false;
// ////////////////////////////////////

$frutas = array("abacaxi", 2, true, "manga"); // array
echo $frutas[3];

$nascimeto = new DateTime(); // instancia de um objeto
var_dump($nascimeto);
// tipo de dado resource
$arquivo = fopen("../inicio.php", "r");
var_dump($arquivo);

///////////////////////////////////////

$nulo = NULL; // N TEM VALOR NENHUM
$vazio = ""; // n tem informacao ainda

// EXEMPLO 4 -> codificacao da pagina

// https://www.youtube.com/watch?v=V1Pl8CzNzCw_____________
// ____________________________| |_________________________
// |       url da pagina|   QUERY STRING  |valor da variavel 'v'|


$status = (string) $_GET["v"]; // variavel super-global
$numerico = (int) $_GET["123"]; // FORCANDO A SER INTEIRO
var_dump($status);
echo $status;
var_dump($numerico);

// http://127.0.0.1/variaveis/variaveis.php?v=casa&123=45 // MAIS DE UMA VARIAVEL SEPARADO POR '&'

// URI -> TIPO DE ACESSO NA WEB EX: HTTP, HTTPS, .ORG, .COM, .BR [PARTES DA URL QUE IDENTIFICA ALGUMA COISA]

// descobrir o ip
$ip = $_SERVER["REMOTE_ADDR"]; // variavel  super-global & endereco ip ambiente do cliente
$pa = $_SERVER["SCRIPT_NAME"]; // caminho da url
echo $ip;
echo $pa;

// EXEMPLO 5 -> ESCOPO DE VARIAVEIS

$jade = "picon";

function diznome(){

        global $jade;
        echo $jade;
}
diznome();
function diznome2(){
    global $nome;
    echo $nome." agora no teste2";
}
diznome2();


















?>