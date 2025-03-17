<?php
    $email = $_POST['cxEmail'];
    $senha = $_POST['cxSenha'];

    if($email == 'aluno@email.com' && $senha == '1234'){
        $nome = 'Aluno';
        header('Location: privada.php?nome='.$nome);
    }else{
        header('Location: erro.php');
    }

?>