<?php

class Usuario
{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario()
    {
        return $this->idusuario;
    }
    public function setIdusuario($value)
    {
        $this->idusuario = $value;
    }
    public function getDeslogin()
    {
        return $this->deslogin;
    }
    public function setDeslogin($value)
    {
        $this->deslogin = $value;
    }
    public function getDessenha()
    {
        return $this->dessenha;
    }
    public function setDessenha($value)
    {
        $this->dessenha = $value;
    }
    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }
    public function setDtcadastro($value)
    {
        $this->dtcadastro = $value;
    }

    public function loadById($id)
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        )); // pegou no banco de dados
        // var_dump($results);
        if (count($results) > 0)
        {
            $row = $results[0];
            
            $this->setData($row);

        }
    }
    public function loadLogin($name)
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN", array(
            ":LOGIN"=>$name
        ));

        if (count($results) > 0)
        {
            $row = $results[0];
            
            $this->setData($row);

        }

    }

    public static function getList($table)
    {
        $sql = new Sql();
        return $sql->select("SELECT * FROM $table ORDER BY deslogin");

    }

    public static function search($login) // Busca usuarios com deslogin que possui caracters no nome igual nos especificados no parametro
    {   
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE  :SEARCH ORDER BY deslogin", array(
            ":SEARCH"=>"%".$login."%"
        ));
    }

    public function login($login, $password)
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        )); // pegou no banco de dados
        // var_dump($results);
        if (count($results) > 0)
        {
            $row = $results[0];
            
            $this->setData($row);

        } else 
        {
            throw new Exception("Login ou senha invalidos" );
            
        }
    }

    public function setData($data)
    {
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    public function insert()
    {
        $sql = new Sql();
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ":LOGIN"=>$this->getDeslogin(),
            ":PASSWORD"=>$this->getDessenha()
        ));

        if (count($results) > 0)
        {
            $row = $results[0];            
            $this->setData($row);
        }
    }
    public function __toString()
    {
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }
}

?>