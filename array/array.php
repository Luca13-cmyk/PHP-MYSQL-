<?php
// print_r() exibe arrays
$arr = [4, 7, 8, 9, 4];
echo end($arr); // mostra o ultimo item

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'joao', // chave: valor
    'idade'=>20 // chave: valor
));
array_push($pessoas, array(
    'nome'=>'luca',
    'idade'=>19
));
print_r($pessoas[0]['nome']);
print_r($pessoas[1]['nome']);

$arr = array(10, 50, 60);
echo count($arr); // conta a quantidade de itens no array

?>