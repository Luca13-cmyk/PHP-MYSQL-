<?php

require_once("config.php");
// session_start();
//session_unset(); // apaga a sessao, mas continua funcionando da mesma maneira.
echo $_SESSION['nome'];
//session_destroy(); // destroi o usuario, dandno um novo acesso.
echo session_id();


?>