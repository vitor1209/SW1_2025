<?php
    include_once 'livro.class.php';

    $diario = new Livro("Diario 3","Stanford Pines", true);
    $diario->Trocar();
    $diario->exibirStatus();
?>