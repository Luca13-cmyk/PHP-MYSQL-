<?php

$email = $_POST['inputEmail'];

// var_dump($email);
//var_dump($_POST); // pega todos os POST enviados ( o email e o recaptcha do google)


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6LeEZL8UAAAAAO2v8Yn-HcMmM7oX1BWrC9cPUF3l",
    "response"=>$_POST["g-recaptcha-response"],
    "remoteip"=>$_SERVER["REMOTE_ADDR"]
)));


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);
// var_dump($recaptcha);

if ($recaptcha["success"] === true) //se for true, insira no banco os dados do usuario
{
    echo "ok: ".$_POST["inputEmail"];
} else {
    header("Location: exemplo-04.php");
    //  var_dump($recaptcha);

}

?>