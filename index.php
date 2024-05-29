<?php session_Start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/index.css">

    <?php 
        include_once "model/Sessao.php";
        include_once "model/User.php";

        if(session_status() != PHP_SESSION_NONE ) //Aqui é a para saber se uma sessão já estáa contecendo porque, pra ir direto pra tela de login
        {
            $session = new Sessao();
            if($session->getUserId() !== NULL ){
            header("Location:view/TelaDeLogin.php"); 
            }
        }
    ?>
</head>
<body>

<main>
<section class="joe"> 
   <h1>JOE's</h1>
<img id="joeOlho" src="view/image/Joe/joeTadeOlho.png" alt="">
<img id="joeOlhoS" src="view/image/Joe/joeEntendedeSegurasnca.png" alt="">

</section>
<section class="login">
<form action="controller/login.php" method="post">
    <label for="nome">Usuário:
        <input type="text" name="user">
    </label>

    <label for="nome">Senha:
        <input type="password" name="senha" id="senhaInput">
    </label>

    <div>
    <button>Entrar</button>
    <a href="#" onclick="mostrarOlho()"><img id="olhoaberto" style="width: 7%;" src="view/image/Joe/olhinSenha.png" alt=""></a>
    <a href="#" onclick="mostrarOlho()"><img id="olhofechado" style="width: 7%; display:none" src="view/image/Joe/olhinSenhaFechado.png" alt=""></a>
    </div>

   </form>

   <?php
   if (isset($_GET["error"])) {
    $error = $_GET["error"];
    $i = 0;
   
    if ($error == "login_failed") {
        echo "<h3><p>Nome de usuário ou senha incorretos. Por favor, tente novamente.</p> </ h3>";
    }
}
   ?>
</section>
</main>

<script>

function mostrarOlho() {
  var senhaInput = document.getElementById("senhaInput");
  var olhoAberto = document.getElementById("olhoaberto");
  var olhoFechado = document.getElementById("olhofechado");
  var JoeSeguro = document.getElementById("joeOlhoS");
  var JoeDeOlho = document.getElementById("joeOlho");

  if (senhaInput.type === "password") {
    senhaInput.type = "text";
    olhoAberto.style.display = "none";
    olhoFechado.style.display = "inline";
    JoeSeguro.style.display ="flex";
    JoeDeOlho.style.display = "none";
  } else {
    senhaInput.type = "password";
    olhoAberto.style.display = "inline";
    olhoFechado.style.display = "none";
    JoeSeguro.style.display ="none";
    JoeDeOlho.style.display = "inline";
  }
}
</script>
</body>
</html>