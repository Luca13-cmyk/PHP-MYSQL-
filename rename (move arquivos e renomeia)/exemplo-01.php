<?php

$dir = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir)) mkdir($dir);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

if (!file_exists($dir . DIRECTORY_SEPARATOR . $filename)) {
    $file = fopen($dir . DIRECTORY_SEPARATOR . $filename, "w+");

    fwrite($file, date("Y-m-d H:i:s"));
    fclose($file);

}

rename(
    $dir . DIRECTORY_SEPARATOR . $filename, // origem  
    $dir2 . DIRECTORY_SEPARATOR . $filename // destino
);
// moveu o arquivo para outro diretorio


echo "ok";



?>