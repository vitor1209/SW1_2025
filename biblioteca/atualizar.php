<?php
    require 'conexao.php';

    $id = $_GET['id'];
    $novoTitulo = $_POST['novoTitulo'];
    $novoAutor = $_POST['novoAutor'];
    $generosArray = $_POST['genero'];
    $novoGenero = implode(', ', $generosArray); 
    $novoAno = $_POST['novoAno'];
    $novoPaginas = $_POST['novoPaginas'];
    


    $sql = "UPDATE livro SET 
    titulo = :novoTitulo,
    autor = :novoAutor,
    paginas = :novoPaginas,
    genero = :novoGenero,
    ano = :novoAno
    WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':novoTitulo', $novoTitulo);
    $stmt->bindParam(':novoAutor', $novoAutor);
    $stmt->bindParam(':novoPaginas', $novoPaginas);
    $stmt->bindParam(':novoGenero', $novoGenero);
    $stmt->bindParam(':novoAno', $novoAno);
    if ($stmt->execute()) {
        echo "livro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar livro.";
    }
?>