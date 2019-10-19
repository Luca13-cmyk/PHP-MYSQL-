<?php

//  Cadastro
$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
    echo "Error: ".$conn->connect_error;
}

// $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");
// $stmt->bind_param("ss", $login, $pass);

// $login = "luca";
// $pass = "toor";

// $stmt->execute();

// $login = "hydena";
// $pass = "caracas";

// $stmt->execute();


// Consulta

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
$data = array();

while ($row = $result->fetch_assoc()){
    array_push($data, $row);
    
}

echo json_encode($data);




?>