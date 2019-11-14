<?php

// $id = (isset($_GET["id"]))?$_GET["id"]:3; // nao seguro

// $conn = mysqli_connect("localhost", "root", "", "dbphp7");

// $sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

// $exec = mysqli_query($conn, $sql);

// while ($resultado = mysqli_fetch_object($exec))
// {
//     echo $resultado->deslogin . "<br>";
// }



$id = (isset($_GET["id"]))?$_GET["id"]:3; // mais seguro

if (!is_numeric($id) || strlen($id) > 5){
    exit("Pegamos voce");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec))
{
    echo $resultado->deslogin . "<br>";
}
?>