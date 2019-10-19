<?php

// Apagando dados no banco de dados


$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");


$id = 4;

$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Deletado OK";




?>