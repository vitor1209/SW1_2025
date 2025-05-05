<?php 
    include_once 'Carro.class.php';

    $lamp1 = new Carro();

    $lamp1->Marca = "BMW";
    $lamp1->Modelo = "X4";
    $lamp1->Combustivel = 'Gasolina';
    $lamp1->Portas = 4;
    $lamp1->Capacidade_Tanque = 65;

    $lamp1->MostrarDados();
?> 