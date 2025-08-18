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
  <!-- <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Livros em Destaque</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Livro 1">
            <div class="card-body">
              <h5 class="card-title">Título do Livro 1</h5>
              <p class="card-text">Breve descrição do livro em destaque.</p>
              <a href="#" class="btn btn-outline-primary">Saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Livro 2">
            <div class="card-body">
              <h5 class="card-title">Título do Livro 2</h5>
              <p class="card-text">Breve descrição do livro em destaque.</p>
              <a href="#" class="btn btn-outline-primary">Saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Livro 3">
            <div class="card-body">
              <h5 class="card-title">Título do Livro 3</h5>
              <p class="card-text">Breve descrição do livro em destaque.</p>
              <a href="#" class="btn btn-outline-primary">Saiba mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->



    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>