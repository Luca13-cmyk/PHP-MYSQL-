<?php

$name = "images";

if (!is_dir($name))
{
    mkdir($name);
    echo "Diretorio $name Criado com sucesso";
} else 
{
    echo "Ja existe o diretorio: $name";
    rmdir($name);
    echo "Diretorio: $name removido!";

}



?>