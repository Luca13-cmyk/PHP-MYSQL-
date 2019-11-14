<?php

function trataNome($name)
{
    if (!$name)
    {
        throw new Exception("Nenhum nome foi informado", 1);
        
    }

    echo ucfirst($name). "<br>";
}


try {
 
trataNome("sdasdad");
trataNome("");

} catch (Exception $e) {
       
   echo $e->getMEssage();
     
} finally { // pode ser um enviar email ao administrador.
    echo "Executou o Try";
}

?>