<?php
// Exemplo 1
$nome = "luca"; // atribuicao
$completo = $nome . " negrette"; //concatenacao
$nome .= " Negrette"; // abreviacao da concatenacao

// Exemplo 2

$valorTotal = 0;
$valorTotal += 50;
$valorTotal += 100;
$valorTotal -= 10;
$valorTotal *= .9; // 10 % de desconto
echo $valorTotal;
$frete = 250;
$frete *= .25; // 75 % de desconto
echo $frete;

// Exemplo 3

$a = 10;
$b = 15;
echo "<br />";
echo $a + $b;
echo 10 ** 2;

// Exemplo 4

var_dump($a < $b); // true
var_dump($a > $b); // false
var_dump($a == $b); // false
var_dump($a === $b); // false
var_dump($a != $b); // true
var_dump($a !== $b); // true

// Exemplo 5

if ((30 <=> 40) == -1){
    echo "40 maior";
}
if ((30 <=> 20) == 1){
    echo "30 maior";
}
if ((30 <=> 30) == 0){
    echo "numeros iguais";
}
// Exemplo 6

$a = NULL;
$b = NULL;
$c = 20;

echo $a ?? $b ?? $c; // verifica se esta null e, se estiver,  passa para o proximo, ate um ser valido.

// Exemplo 7
echo ++$c; // 21
$c++; // 22
echo $c; // 22






?>