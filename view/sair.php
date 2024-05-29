<?php
    include_once "../model/Sessao.php";
    
    $sessao = new Sessao();
    $sessao->destroySession();
    header("Location: ../index.php");