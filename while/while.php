<?php
// $num = 20;
// while ($num < 50){
//     echo $num;
//     $num++;
// }

$condicao = true;

while ($condicao){
    $num = rand(0, 10);
    echo $num;
    if ($num === 3){
        echo "TRES!!";
        break;
    }
}

$valor = 1005;
if ($valor > 1000){
    $preco = $valor * 0.05; // desconto de 5%
    echo $preco;
}

?>