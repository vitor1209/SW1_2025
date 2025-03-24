<?php
    $email = $_POST['cxEmail'];
    $senha = $_POST['cxSenha'];
    $nome = $_POST['cxUser'];

    if($email == 'aluno@email.com' && $senha == '1234'){
        header('Location: privada.php?nome='.$nome);
    }else{
        header('Location: erro.php');
    }

?>