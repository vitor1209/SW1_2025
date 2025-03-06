<?php
    $user = $_POST['user'];

    $senha = $_POST['senha'];

    $logado = false;

    if ($user == "etec" && $senha == "informática"){
        $logado = true;
        echo"muito obrigado pela mensagem!!";
    } else{
        $logado = false;
        echo"email ou senha invalido";
    }    

    ?>


