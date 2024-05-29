<?php
class User
{
    private $usuario;
    private $senha;
    private $perfil;

    public function setUsuario($usu)
    {
        $this->usuario = $usu;
    }
    public function setSenha($sen)
    {
        $this->senha = $sen;
    }
    public function setPerfil($pe)
    {
        $this->perfil = $pe;
    }
    
    public function getUsuario()
    {
        return $this->usuario;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getPerfil()
    {
        return $this->perfil;
    }
}
