<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/telaLogin.css">
    <?php 
        include_once "../model/Sessao.php";
    
        $sessao = new Sessao();

    if($sessao->getPerfilAcesso() != "prof"){
           echo"<script>alert('Você não tem acesso')<script>";
    }

   
    ?>
</head>
<body>
<header>
  <a href="sair.php">Sair</a>
</header>
<main>
    <section class="apresentacao">
        <div>
        <h1>Olá, <?php $nome = $sessao->getUser();  echo $nome; ?></h1>
        <p>Você está no sistema do Joe's</p>
        </div>

        <p id="danca">Preste Atenção no Joe dançarino. <br> Enquanto construímos o restante do site</p>
    </section>
    <section class="image">
    <img id="joeBailarino" src="../view/image/Joe/JOEBALE.gif" alt="">
    <div class="chao"></div>
    </section>
</main>

</body>
</html>