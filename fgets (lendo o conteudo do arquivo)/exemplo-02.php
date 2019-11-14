<?php

$filename = "Firefox_wallpaper.png";
// $filename = "css.css";


$base64 = base64_encode(file_get_contents($filename)); // converte binario em base 64 para transportar de um lugar para outro


$fileinfo = new finfo(FILEINFO_MIME_TYPE); // mostra o MIME do arquivo;

$mimeType = $fileinfo->file($filename);


$base64Encode =  "data:" . $mimeType . ";base64," . $base64;




?>

<a href="<?=$base64Encode?>" >LINK</a>
<img src="<?=$base64Encode?>" alt="">
