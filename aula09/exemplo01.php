<?php 
    include_once 'Pessoa.class.php';

    // CRIAR UM OBJETO - INSTANCIA DA CLASSE PESSOA
    $fulano = new Pessoa();
    $ciclano = new Pessoa();

    // var_dump($fulano);

    // ATRIBUIR VALORES
    $fulano->Nome = "CABEÇA DA SILVA";
    $fulano->Peso = 90;
    $fulano->Altura = 1.82;

    $ciclano->Nome = "CICLANO DA SILVA";
    $ciclano->Peso = 120;
    $ciclano->Altura = 1.48;

    // CHAMANDO UM METODO DA CLASSE PESSOA
    $fulano->MostrarDados();
    $ciclano->MostrarDados();
    $ciclano->Apresentar();
?>