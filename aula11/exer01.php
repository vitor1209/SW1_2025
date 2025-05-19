<?php 

include_once 'Produto.class.php';

$nome = $_POST['nome'];
$Preco = $_POST['Preco'];
$Quantidade = $_POST['Quantidade'];

$produto = new Produto($nome, $Preco , $Quantidade);
$produto->adicionarEstoque(5);
$produto->removerEstoque(3);
$produto->mostrarDetalhes();

?>