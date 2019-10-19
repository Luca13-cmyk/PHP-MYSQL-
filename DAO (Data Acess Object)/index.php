<?php


require_once("config.php");


// // $sql = new Sql("mysql", "localhost", "dbphp7", "root", "");
// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// // var_dump($usuarios);

// foreach ($usuarios as $row) {
//     foreach ($row as $key => $value) {
//         echo "<b>$key: </b>";
//         echo "<i>$value: </i><br />";
//     }
// }

// // echo json_encode($usuarios);


// $root = new Usuario();
// $root->loadById(2);
// $root->loadLogin("hydena");


// Lista de usuarios


$lista =  Usuario::getList("tb_usuarios");

echo json_encode($lista);


// carrega uma lista de usarios buscando pelo login

// $search = Usuario::search("a");

// echo json_encode($search);

// carrega um usuario usando o login e a senha

// $usuario = new Usuario();
// $usuario->login("hydena", "caracas");
// echo $usuario;






// echo $root;



?>