<?php

    abstract class Animal
    {
        public function falar()
        {
            return "falar";
        }
        public function andar()
        {
            return "andar";
        }
    }

    class Cachorro extends Animal
    {
        public function falar() // polimorfismo (atualizando o metodo da classe pai)
        {
            return "latir";
        }
    }
    class Gato extends Animal
    {
        public function falar() // polimorfismo
        {
            return "Miar";
        }
    }
    class Passaro extends Animal
    {
        public function andar()
        {
            return "voar e " . parent::andar();
        }
    }

$garfield = new Gato();
$sol = new Cachorro();
$br = "<br />";

echo $garfield->falar();
echo $br;
echo $garfield->andar();
echo $br;

echo $sol->falar();
echo $br;
echo $sol->andar();

echo $br;

$tucklittle = new Passaro();
echo $tucklittle->andar();


?>