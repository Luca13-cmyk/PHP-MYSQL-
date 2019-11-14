<!DOCTYPE html>
<html dark="<?php if (isset($_COOKIE['NOME_COOKIE'])) { 

    $obj = json_decode($_COOKIE["NOME_COOKIE"]);

    echo $obj->thema;

  } ?>" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
    
<?php

$data =  array(

    "thema"=>"Dark"
);


setcookie("NOME_COOKIE", json_encode($data), time() + 3600*24);

echo "OK";





?>


<script>

var body = document.getElementsByTagName("body")[0];


</script>

</body>
</html>