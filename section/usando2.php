<?php

require_once("config.php");
session_regenerate_id();// gera um novo id de sessao
echo session_id();
var_dump($_SESSION);
echo session_save_path();
echo session_status();


?>