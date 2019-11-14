<?php


require_once("config.php");





function importDataPer($filename){

    $sql = new Sql();

    if (file_exists($filename)) 
    {
        $file = fopen($filename, "r");

        $headers = explode(",", fgets($file)); 
        // var_dump($headers);

        $data = array();

        while ($row = fgets($file)) {
            echo fgets($file);
            
            
            $rowData = explode(",", $row);

            $linha = array();
            
            for ($i = 0; $i < count($headers); $i++)
            {
                $linha[$headers[$i]] = $rowData[$i];

            }
            array_push($data, $linha);
        }


        fclose($file);

        // print_r($data);
        // echo "<br>";
        // echo json_encode($data);

    }
}

importDataPer("usuarios.csv");



?>