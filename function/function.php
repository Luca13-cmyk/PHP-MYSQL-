<?php

function exibe($nome, $idade, $genero=false){
    if ($genero == true){
        return "nome: $nome <br> idade: $idade <br> genero: masculino";

    }
    return "nome: $nome <br> idade: $idade";
}

echo exibe("Luca", 18, true);
echo "<br>".exibe("Jade", 18);


function ola(){
    $argumentos = func_get_args(); // mostra os argumentos dados 
    return $argumentos;

}
var_dump(ola("a", 2, "b"));

$a = 10;
function trocaValor(&$b){ // passagem de parametro por referencia, muda o valor global da variavel
    $b += 50;
    return $b; 

}
echo trocaValor($a); // 60
echo "<br>";
echo $a; // se torna 60 agora por causa do &


$pessoa = array(
    'nome'=>'Luca',
    'idade'=>19
);

foreach ($pessoa as $value) {
    echo gettype($value);
    if (gettype($value) === 'integer') $value += 10;
    if (gettype($value) === 'string') $value = $value." Negrette";
    echo $value."<br>";
}

print_r($pessoa); // Luca 19

foreach ($pessoa as &$value) {
    echo gettype($value);
    if (gettype($value) === 'integer') $value += 10;
    if (gettype($value) === 'string') $value = $value." Negrette";
    echo $value."<br>";
}
print_r($pessoa); // Luca Negrette 29 (atualizou por causa do &)

// PHP 7

function soma(int ...$valores){ // quantidade ilimitada da parametros e argumentos dados.
    return array_sum($valores);
}

echo soma(50, 20, 30, 10);

function soma2(int ...$valores):string{ // converte o retorno da funcao para string
    return array_sum($valores);
}
echo soma2(10, 20);
var_dump(soma2(10, 20));

function soma3(int ...$valores):float{
    return array_sum($valores);
}

var_dump(soma3(10, 50));

// funcao recursiva


define("DATA_LONELY", array(

        array(
            'nome_cargo'=>'CEO',
            'subordinados'=> array(
            // inicio: Diretor
            array(
                'nome_cargo'=>'Diretor',
                'subordinados'=>array(
                    array(
                        'nome_cargo'=>'Executivo'
                    )
                )
            ),
            // fim: Diretor
            array(
                'nome_cargo'=> 'Vice CEO'

            )

        )
    )
    
));

function recursiva($data){
    $html = '<ul>';
        foreach ($data as $value) {
            $html .= "<li>";
            $html .= $value['nome_cargo'];
            $html .= "</li>";
            if (isset($value['subordinados']) && count($value['subordinados']) > 0) $html .= recursiva($value['subordinados']);

        }
    $html .= '</ul>';

    return $html;
}

echo recursiva(DATA_LONELY);


function anonima($callback){
    $callback();
}

anonima(function(){
    echo "sacac";
});





?>