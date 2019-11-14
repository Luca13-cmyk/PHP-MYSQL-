<?php

class Files
{
    public static function Upload($nameDir, $inputName)
    {
            if ($_SERVER["REQUEST_METHOD"] === "POST")
        {
            $file = $_FILES["$inputName"];

            if ($file["error"])
            {
                throw new Exception("Error: ".$file["error"]);
                
            }

            $dirUploads = $nameDir;
            if (!is_dir($dirUploads))
            {
                mkdir($dirUploads);
            }

            if ( move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"]) )
            {   
                echo "Upload realizado com sucesso";
            } else 
            {
                throw new Exception("Error, nao foi possivel");
                
            }
        }
    } 
}

?>