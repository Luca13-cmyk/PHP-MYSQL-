<?php

// Usando transacoes


$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();


$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");


$id = 1;


$stmt->execute(array($id));

// $conn->rollback(); // cancela o DELETE
$conn->commit(); // confirma o DELETE




echo "Deletado OK";




?>