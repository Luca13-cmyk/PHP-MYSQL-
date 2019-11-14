<?php


$cep = "01310100";

$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // retorna os dados 1 = true
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // nao emite o certificado ssl  0 = false

$response = curl_exec($ch); // aqui que executa o curl

curl_close($ch);

// echo $response;

$data = json_decode($response, true); // transforma o json retornado em array

print_r($data['localidade']);





?>