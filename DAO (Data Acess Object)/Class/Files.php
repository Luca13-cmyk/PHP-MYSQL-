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
    
    public static function Download($addr, $name)
    {
        $link = $addr;

        $content = file_get_contents($link); // pega em binario

        $parse = parse_url($link); // conteudo do arquivo

        $basename =  basename($parse['path']); // pega o nome do arquivo original

        $file = fopen($name, "w+"); // nome do arquivo
        
        fwrite($file, $content);

        fclose($file);

        return $name;
    }

    public static function Base64($name, $autoGenerator=true)
    {


        if ($_GET && $autoGenerator === false)
            {
            $filename = (string) $_GET["$name"];

            $base64 = base64_encode(file_get_contents($filename)); // converte binario em base 64 para transportar de um lugar para outro


            $fileinfo = new finfo(FILEINFO_MIME_TYPE); // mostra o MIME do arquivo;

            $mimeType = $fileinfo->file($filename);


            $base64Encode =  "data:" . $mimeType . ";base64," . $base64;

            echo "<a href='$base64Encode'>LINK</a>";
            return;
            }

            // ----------------------------------------
            
            $filename = $name;

            $base64 = base64_encode(file_get_contents($filename)); // converte binario em base 64 para transportar de um lugar para outro


            $fileinfo = new finfo(FILEINFO_MIME_TYPE); // mostra o MIME do arquivo;

            $mimeType = $fileinfo->file($filename); // salva o MIME do arquivo


            $base64Encode =  "data:" . $mimeType . ";base64," . $base64; // codificacao do arquivo em base64

            return $base64Encode;
        
    }
}

?>