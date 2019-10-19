<?php

    class Documento {

        private $numero;
        private $senha;

        public function getNum(){
            return $this->numero;
        }
        public function setNum($value){
            $this->numero = $value;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($value){
            $this->senha = $value;
        }

    }

    class CPF extends Documento {

        public function checkCPF():bool{
            $cpf = $this->getNum();
            if(empty($cpf)) {
                return false;
            }
         
            $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
        
            $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
             
            
            if (strlen($cpf) != 11) {
                echo "length";
                return false;
            }
            
            else if ($cpf == '00000000000' || 
                $cpf == '11111111111' || 
                $cpf == '22222222222' || 
                $cpf == '33333333333' || 
                $cpf == '44444444444' || 
                $cpf == '55555555555' || 
                $cpf == '66666666666' || 
                $cpf == '77777777777' || 
                $cpf == '88888888888' || 
                $cpf == '99999999999') {
                return false;
        
             } else {   
                 
                for ($t = 9; $t < 11; $t++) {
                     
                    for ($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $cpf{$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf{$c} != $d) {
                        return false;
                    }
                }
         
                return true;
            }
            
        }
    }
    
    class Senha extends Documento {
        public function verify():bool 
        {
            $senha = $this->getSenha();

            if (empty($senha)) return false;

            if (strlen($senha) <= 7) return false;

            return true;
        }
    }

$cpf = new CPF();           
$cpf->setNum(49952713096);
$senha = new Senha();
$senha->setSenha("12345678");

// var_dump($jorge->checkCPF());
if ($cpf->checkCPF() === true && $senha->verify() === true) {
    echo "Bem vindo";
} else {
    echo "CPF ou senha invalido";
}




?>