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
        menu("Cadastrar")
    ?>

    <section class="container-xl"> 
        <h2 class= "mb-3">Cadastrar Livro</h2>
            <form class="row g-3">
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Digite o nome do livro">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Digite o título do livro">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Digite o gênero do livro">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Digite o autor do livro">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="number" placeholder="Digite o ano do livro">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="number" placeholder="Digite o número de páginas do livro">
                </div>

                <div class= "mb-3">
                    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                </div>
            </form>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>