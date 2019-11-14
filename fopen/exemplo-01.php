<?php

    // $file = fopen('log.txt', 'a+'); // resource

    // fwrite($file, date("Y-m-d H:i:s") . "\r\n");

    // fclose($file);

    // echo "arquivo criado";


    $ip = $_SERVER["REMOTE_ADDR"];
				echo "IP: <i>".$ip."<i/>";
				
				if (!file_exists("log.txt")){
					$file = fopen("log.txt", "w+");
					fwrite($file, "IP: $ip; " . date("Y-m-d H:i:s") . "\r\n");
				} else {
					$file = fopen("log.txt", "a+");
					fwrite($file, "IP: $ip; " . date("Y-m-d H:i:s") . "\r\n");
				
				}

?>