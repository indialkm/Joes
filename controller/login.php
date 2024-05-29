<html>
<?php
    include_once "../model/Sessao.php";
    include_once "../model/User.php";
    
    session_start();
    $usuarioLogin = $_POST["user"];
    $usuarioSenha = $_POST["senha"];

    $i = isset($_SESSION['contador'])? $_SESSION['contador']: 0; // VARIAVEL CONTADOR PARA GERAR AS TRêS ITINERAÇ~OES DE ERROS
    
    $user = new User(); // USUARIO CRIADO PARA FAZER O LOGIN, TODO ENCAPSULADO
     
    $user->setUsuario("Anselmo");  
    $user->setSenha("mario");
    $user->setPerfil("prof");

    $usuario = $user->getUsuario();
    $senha = $user->getSenha();
    $perfil = $user->getPerfil();


    if($usuarioLogin == $usuario && $usuarioSenha == $senha)
    {
        $sessao = new Sessao();
        $sessao->User($usuario);
        $sessao->PerfilAcesso("$perfil");
        header("Location:../view/TelaDeLogin.php");


    } 
    else{

        $i++;
        $_SESSION['contador'] = $i; 
        echo $_SESSION['contador'];
        echo "<h2>$i</h2>";
        if($i >= 3){
            unset($_SESSION['contador']);
            header("Location: ../view/errado.html");
            exit();
        }else{
            header("Location: ../index.php?error=login_failed");
       
        exit();
        }
    }
   ?>
   

   

    

   

