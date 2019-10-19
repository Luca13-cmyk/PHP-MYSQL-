<?php

// stmt = comando

// EXIBINDO A TABELA DO BANCO DE DADOS

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin"); // como se estivesse conversando com banco de dados

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);
echo "<br>";
foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<b>$key: </b>";
        echo "<i>$value: </i><br />";
        
    }
    echo "===============================================<br>";
}

?>