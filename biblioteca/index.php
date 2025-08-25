<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo/index.css">
    <title>Biblioteca</title>
</head>
<body>
    <?php  
        require 'conexao.php';
        include 'componentes\menu.php';
        menu("Home")
    ?>

    <section class="hero text-center">
    <div class="container">
      <h1 class="display-4">Bem-vindo à Biblioteca Central</h1>
      <p class="lead">Conhecimento ao seu alcance, onde e quando você precisar.</p>
      <a href="listar.php" class="btn btn-success btn-lg">Explorar acervo</a>
    </div>
  </section>


  <!-- Destaques -->
  <section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Livros em Destaque</h2>
    
    <?php
    $sql = "SELECT * FROM livro";
    $stmt = $pdo->query($sql);
    $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $totalLivros = count($livros);
    $livrosPorLinha = 3;

    for ($i = 0; $i < $totalLivros; $i += $livrosPorLinha) {
        echo '<div class="row justify-content-center mb-4">'; // centraliza cada linha
        for ($j = $i; $j < $i + $livrosPorLinha && $j < $totalLivros; $j++) {
            $livro = $livros[$j];
            echo '<div class="col-md-4 d-flex">';
              echo '<div class="card mb-3 flex-fill">';
                echo '<div class="card-body">';
                  echo '<h5 class="card-title mb-4">' . htmlspecialchars($livro['titulo']) . '</h5>';
                  echo '<p class="card-text mb-1"><strong>Autor:</strong> ' . htmlspecialchars($livro['autor']) . '</p>';
                  echo '<p class="card-text mb-1"><strong>Gênero:</strong> ' . htmlspecialchars($livro['genero']) . '</p>';
                  echo '<p class="card-text mb-1"><strong>Ano:</strong> ' . htmlspecialchars($livro['ano']) . '</p>';
                  echo '<p class="card-text mb-0"><strong>Páginas:</strong> ' . htmlspecialchars($livro['paginas']) . '</p>';                  
                echo '</div>';
              echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }
    ?>
    
  </div>
</section>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>