<?php

    $filename = "usuarios.csv";
// fgets() le a linha do alvo se ela existir.
    if (file_exists($filename)) 
    {
        $file = fopen($filename, "r");

        $headers = explode(",", fgets($file)); 
        // var_dump($headers);

        $data = array();

        while ($row = fgets($file)) {
            //   echo $row;
            
            $rowData = explode(",", $row);

            $linha = array();
            
            for ($i = 0; $i < count($headers); $i++)
            {
                $linha[$headers[$i]] = $rowData[$i];

            }
            array_push($data, $linha);
        }


        fclose($file);

        print_r($data);
        // echo "<br>";

        // foreach ($data as $row) {
        //     foreach ($row as $key => $value) {
        //         echo $value;
        //     }
        // }
        // echo json_encode($data);

    }

    
    
    // $arr = array();
    // $frase = "luca e jade";
    // array_push($arr, explode(" ", $frase)); 
    // print_r($arr);


?>