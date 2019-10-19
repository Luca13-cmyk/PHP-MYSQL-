<?php
// variavel constant (nunca muda o valor)  UTILIZE LETRAS MAIUSCULAS
define("SERVIDOR", "127.0.0.1"); // CONSTANT 
//Nome da variavel|valor da variavel|
echo SERVIDOR;

define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
]);
print_r(BANCO_DE_DADOS);
echo PHP_VERSION;
echo DIRECTORY_SEPARATOR;



?>