<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Base64</title>
</head>
<body>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <button type="submit">Send</button>
</form>

        <?php

            if ($_SERVER["REQUEST_METHOD"] === "POST")
            {
                $file = $_FILES["fileUpload"];

                if ($file["error"])
                {
                    throw new Exception("Error: ".$file["error"]);
                    
                }

                $dirUploads = "uploads";
                if (!is_dir($dirUploads))
                {
                    mkdir($dirUploads);
                }

                if ( move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"]) )
                {   
                    echo "Upload realizado com sucesso: ".$dirUploads.DIRECTORY_SEPARATOR.$file["name"];
                } else 
                {
                    throw new Exception("Error, nao foi possivel");
                    
                }
            } 


            echo "<form>";
            echo "<input type'text' name='arquivo'></input>";
            echo "<input type='submit'>";
            echo "</form>";
            if ($_GET)
            {
                $filename = (string) $_GET["arquivo"];

            $base64 = base64_encode(file_get_contents($filename)); // converte binario em base 64 para transportar de um lugar para outro


            $fileinfo = new finfo(FILEINFO_MIME_TYPE); // mostra o MIME do arquivo;

            $mimeType = $fileinfo->file($filename);


            $base64Encode =  "data:" . $mimeType . ";base64," . $base64;

            echo "<a href='$base64Encode'>LINK</a>";
            }
        ?>


</body>
</html>