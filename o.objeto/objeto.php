<?php
                                                    //objeto  |  classe    
// Objeto e uma variavel que representa uma classe ex: $sql = new Data();
// classe e uma conjunto de atributos e metodos dentro dela

class Pessoa {

    public  $nome; // encapsulamento (se e publico ou privado)    criando um atributo
    public  function falar() {  // criando um metodo
        return "O meu nome e ".$this->nome;
    }      


}

$glauciu = new Pessoa();
$glauciu->nome = "Glauciu Gabriel";

echo $glauciu->falar();





echo "<br>";

class Informa {
    public $ipServer;
    public $ipUser;
    public $self;
    public $URI;
    public function mostrar(){
        $ret = "ipServer: ".$this->ipServer."<br>";
        $ret .= "ipUser: ".$this->ipUser."<br>";
        $ret .= "self: ".$this->self."<br>";
        $ret .= "URI: ".$this->URI."<br>";
        return $ret;
    }
    
}
$DATA_PER = new Informa();
$DATA_PER->ipServer = $_SERVER['SERVER_ADDR'];
$DATA_PER->ipUser = $_SERVER['REMOTE_ADDR'];
$DATA_PER->self = $_SERVER['PHP_SELF'];
// $DATA_PER->URI = $_SERVER['SCRIPT_URI'];
echo $DATA_PER->mostrar();

// Utilizando GETERS e SETERS

class Sistema {
    private $ipServer;
    private $serverName;
    private $protocol;
    private $port;
    public function getIp(){
        return $this->ipServer;
    }
    public function setIp($value){
        if (gettype($value) !== 'string') return;
        $this->ipServer = $value;
    }
    public function setServerName($value){
        $this->serverName = $value;
    }
    public function getServerName(){
        return $this->serverName;
    }
    public function getProtocol(){
        return $this->protocol;
    }
    public function setProtocol($value){
        $this->protocol = $value;
    }
    public function getPort():int{
        return $this->port;
    }
    public function setPort($value){
        $this->port = $value;
    }
    public function exibir(){
        return array(
            'ipServer'=>$this->getIp(),
            'serverName'=>$this->getServerName(),
            'protocol'=>$this->getProtocol(),
            'port'=>$this->getPort()
        );
    }
}


$sys = new Sistema();
$sys->setIp($_SERVER['SERVER_ADDR']);
$sys->setServerName($_SERVER['SERVER_NAME']);
$sys->setProtocol($_SERVER['SERVER_PROTOCOL']);
$sys->setPort($_SERVER['SERVER_PORT']);
print_r($sys->exibir());
var_dump($sys->exibir());

// Metodos estaticos

class Documento {
    private $cpf;
    public function setCpf($cpf){
        if (Documento::CPF($cpf) === false) {
            echo "CPF INVALIDO";
            return;
        }
        $this->cpf = $cpf;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public static function CPF($cpf):bool{
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

var_dump(Documento::CPF("26943084062")); // chama a funcao sem precisar criar uma instancia
echo "<br>";
$cpf = new Documento();
$cpf->setCpf("2694308406.2");
echo $cpf->getCpf();

echo "<hr><br><br>";


// Metodos magicos (Modo construtor)

class Hotel {
    private $nome;
    private $quartos;
    private $diaria;
    public function getNome(){
        return $this->nome;
    }
    public function __construct($nome, $quartos, $diaria) {
        $this->nome = $nome;
        $this->quartos = $quartos;
        $this->diaria = $diaria;
        
    }
    public function __destruct(){
        var_dump("DESTRUIR");
    }
}

$privilege = new Hotel("Privilege", 3, 150); // usando o construct
var_dump($privilege);
// echo $privilege->nome;
echo "<br>";
echo $privilege->getNome();
echo "<br>";

unset($privilege); // usando o __destruct



// Encapsulamento

// public -> Qualquer um pode ver
// protected -> apenas a sua classe  a filha podem ver
// private -> Apenas a sua classe pode ver

class Login {
    public $usuario = "Hydena";
    protected $email = "hydena788@protonmail.com";
    private $senha = "toor";

    public function show(){
        echo $this->usuario."<br>";
        echo $this->email."<br>";
        echo $this->senha."<br>";
    }
}
echo "<br>";
$login = new Login();
// echo $login->usuario;
// echo $login->email;
// echo $login->senha;
$login->show();



class Verificar extends Login {
    public function check(){
        echo get_class($this)."<br>"; // verifica de qual classe a funcao esta sendo usada
        if ($this->email === 'hydena788@protonmail.com') echo "Ola, $this->email";
        if ($this->senha === 'toor') echo "Ola, $this->email";
        
    }
}

$check = new Verificar();

$check->check();



?>

