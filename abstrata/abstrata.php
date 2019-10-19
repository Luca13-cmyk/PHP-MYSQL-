<?php

    abstract class Servidor {
        public function getIp() {
            return $_SERVER['SERVER_ADDR'];
        }
        public function getAdmin() {
            return $_SERVER['SERVER_ADMIN'];
        }
        abstract public function data();

    }

    class SelfPer extends Servidor {
            public $name;
            public function data(){
              return array(
                  "IP_SERVER"=>$this->getIp(),
                  "NAME"=>$this->name,
                  "ADMIN"=>$this->getAdmin() 
              );
          }  
    }

    $privilege = new SelfPer();
    $privilege->name = "PIVILEGE";
    print_r($privilege->data());




?>