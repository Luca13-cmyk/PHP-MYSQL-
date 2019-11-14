<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?></title>
</head>
<body>
    
    <h1>Ola mundo <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
    <h1> <?php echo htmlspecialchars( $filename, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
    <h1><?php echo teste(); ?></h1>
</body>
</html>