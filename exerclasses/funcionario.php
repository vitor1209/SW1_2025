<?php
    include_once 'Funcionario.class.php';

    // $fulano = new Funcionario("jair",-6);
    // $fulano->exibirInfo();

    $ciclano = new Funcionario("ciclano",1000);
    $ciclano->exibirInfo();
    echo"<hr>";
    $ciclano->aumentaSalario(50);
    $ciclano->exibirInfo();
?>