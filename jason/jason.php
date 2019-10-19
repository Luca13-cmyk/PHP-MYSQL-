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

echo json_encode($pessoas);// transforma array em json
$json = '[{"nome":"joao","idade":20},{"nome":"luca","idade":19}]';
$data = json_decode($json, true); // transforma json em array
echo "<br>";
var_dump($data);
?>