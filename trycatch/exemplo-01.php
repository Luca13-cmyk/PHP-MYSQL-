<?php

try {
    

    throw new Exception("Error Processing Request", 1);
    

} catch (Exception $e) {
    echo json_encode(array(
        "msg"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));
}

?>