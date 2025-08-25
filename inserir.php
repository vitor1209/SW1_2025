<?php
    require 'conexao.php';

    $titulo = $_POST['titulo'];
    $generosArray = $_POST['genero'];
    $genero = implode(', ', $generosArray); 
    $autor = $_POST['autor'];
    $paginas = $_POST['paginas'];
    $ano = $_POST['ano'];
    $sql = "INSERT INTO livro (titulo, genero, autor, paginas, ano) VALUES (:titulo, :genero, :autor, :paginas, :ano)";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':paginas', $paginas);
    $stmt->bindParam(':ano', $ano);

    if ($stmt->execute()) {
        header('Location: listar.php');
    } else {
        echo "Erro ao inserir livro.";
    }
?>