<?php

// metodo 1 (desuso no php 7.2)

// $data = [

//     "nome"=>"Luca"

// ];


// define("SECRET", pack("a16", 'senha')); // aqui e a senha para descriptografar o conteudo de $data. (joga na constant SECRET e converte em 16 bits);

// $mcrypt = mcrypt_encrypt(
//     MCRYPT_RIJNDAEL_128, // algoritmo que vai ser usado
//     SECRET, // senha para descriptografar
//     json_encode($data), // string que vai ser encryptada (usa o json_encode para transformar o array $data em string)
//     MCRYPT_MODE_ECB // modo de criptografia
// ); 

// $final = base64_encode($mcrypt);

// var_dump($final);

// // modo reverso (descriptografar)

// $string = mcrypt_decrypt(
//     MCRYPT_RIJNDAEL_128,
//     SECRET,
//     base64_decode($final),
//     MCRYPT_MODE_ECB
// );

// var_dump(json_decode($string, true)); // converte os dados descriptografados para um array


// metodo 2 (atual)

define("SECRET_IV", pack("a16", "senha")); // chave 1 para descriptografar o conteudo de $data
define("SECRET", pack("a16", "senha")); // chave 2 para descriptografar o conteudo de $data


$data = [

    "nome"=>"Luca"
];

$openssl = openssl_encrypt(
    json_encode($data), // dados que vai ser encryptado (tem que ser string)
    "AES-128-CBC", // algoritmo que vai ser usado (n tem a constante pre-definida)
    SECRET, // chave 1
    0, // nao precisa retornar nada alem da criptografia
    SECRET_IV // chave 2 (segunda senha)
);

echo $openssl;

$string = openssl_decrypt(
    $openssl,
    "AES-128-CBC",
    SECRET,
    0,
    SECRET_IV
);

var_dump(json_decode($string, true));





?>