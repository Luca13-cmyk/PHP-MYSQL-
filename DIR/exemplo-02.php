<?php

$images = scandir("images");

$data = array();


// var_dump($images);


foreach ($images as $img) {
    if (!in_array($img, array(".", "..")))
    {
        $filename = "images" . DIRECTORY_SEPARATOR . $img;
        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://127.0.0.1/PHP%20MYSQL/DIR/".$filename;
        array_push($data, $info);
    }
}

echo json_encode($data);


?>