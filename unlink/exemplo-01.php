<?php

$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt"); // deleta o arquivo teste.txt

echo "arquivo removido";






?>