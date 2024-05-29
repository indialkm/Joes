<?php

class Sessao
{
    public function __construct() // VAI INICIAR NO ASSIM QUE GENSESSION FOR CHAMADA
    {
        if (session_status() == PHP_SESSION_NONE) // A SESSÃO NÃO ESTA INICIADA?
            session_start(); // ENTÃO INICIA
    }

    public function getIdSession() // FUNÇÃO ENCAPSULADA QUE RETORNA O ID DA SESSÃO
    {
        return session_id(); // RETORNA SESSION ID
    }

    public function User($user){
        $_SESSION['user'] = $user; //O MÉTODO VAI RECEBER O USER 
    }

    public function PerfilAcesso($userPerfil)
    {
        $_SESSION['perfil_acesso'] = $userPerfil;
    }

    public function getPerfilAcesso()
    {
        return $_SESSION['perfil_acesso'];
    }

    public function getUser()
    {
        return $_SESSION['user'];
    }

    public function getUserId()
    {
        return isset($_SESSION['user_id']) ? $_SESSION['user_id']:null; //MÉTODO PARA PEGAR O USER ID QUE ESTÁ CONECTADO A ESSA SESSÃO
    }

    public function destroySession()
    {
        session_destroy();
        //DESTRUIR A SESSÃO
    }
}
