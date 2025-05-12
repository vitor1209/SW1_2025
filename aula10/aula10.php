<?php  

    include_once 'Conta.class.php';

    $cliente1 = new Conta();

    $cliente1->Nome = "Augustinho";
    $cliente1->Cpf = "400.289.220-77";

    // $cliente1->Saldo = 202020202020;
 
    $cliente1->MostarSaldo();
    echo "<hr>";

    echo $cliente1->Depositar(500);

    echo $cliente1->Sacar(1100);
    
    echo $cliente1->Sacar(200);

    echo "<hr>";

    $cliente1->MostarSaldo();

?>