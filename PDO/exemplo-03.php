<?php

// Alterando dados no banco de dados


$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN,  dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Jade Picon";
$password = "QTFgrs";
$id = 2;
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "AlTERADOS OK";




?>