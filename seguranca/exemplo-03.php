<?php
// permissoes de pastas

/*

0 -> Nao existe permissao

1 -> permissao de execucao

2 -> permissao de gravacao

3 -> juncao do 1 e do 2

4 -> somente leitura

5 -> leitura e execucao

6 -> leitura e gravacao, mas sem execucao

7 -> leitura, execucao, gravacao (permissao total);

UNIX

0775 -> 7 = own ou dono do arquivo, 7 = grupo, 5 = outros (convidados ou usuarios visitantes)



*/

$pasta = "arquivos";
$permissao = "0775";
if (!is_dir($pasta)) mkdir($pasta, $permissao); // chmod() pode mudar a permissao da pasta
// mkdir("teste", 0777);
// mkdir("teste2", "0775");
//  mkdir("teste3", "0775");
//  mkdir("teste5", "0777");
// mkdir("teste7", "0775");


echo "Diretorio criado";




?>