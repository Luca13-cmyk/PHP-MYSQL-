<?php

interface Residencia {
    public function CEP();
    public function estado();
    public function rua();
}

class Privilege implements Residencia {
    public function CEP(){
        return "445791644";
    }
    public function estado(){
        return "Bahia";
    }
    public function rua(){
        return "Pontal";
    }
}
$privilege = new Privilege();
echo $privilege->CEP();


?>