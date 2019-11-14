<?php

session_start();

// depois de verificar login e senha, reinicie o id

session_destroy();

session_start();

session_regenerate_id();


echo session_id();



?>