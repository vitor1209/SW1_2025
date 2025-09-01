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
        menu("Listar");
        $id = $_GET['id'];
    ?>

    <section class="container-xl"> 
        <h2 class= "mb-3">Cadastrar Livro</h2>
            <form class="row g-3" action="atualizar.php?id=<?php echo $id;?>" method = "POST">


            <?php
                require 'conexao.php';
                $sql = "SELECT * FROM livro WHERE id = $id ";
                $stmt = $pdo->query($sql);
                $livro = $stmt->fetch (PDO:: FETCH_ASSOC);
                  
                $titulo = $livro['titulo'];
                $autor = $livro['autor'];
                $genero = $livro['genero']; 
                $genero = $livro['genero'];
                $listGenero = explode(',', $genero);
                $listGenero = array_map('trim', explode(',', $genero));

                                $ano = $livro['ano'];
                $paginas = $livro['paginas'];
                
            ?>

                <div class="mb-3">
                    <input class="form-control" type="text" name="novoTitulo" value="<?php echo"$titulo";?>" required >
                </div>   
                
                <!-- <div class="mb-3">
                    <input class="form-control" type="text" name="novoGenero" value="<?php echo"$genero";?>" required >
                </div>    -->
                
                <div class="mb-3">
                <label class="form-label">Gênero do livro:</label>

                <div class="accordion" id="accordionGenero">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingGenero">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGenero" aria-expanded="false" aria-controls="collapseGenero">
                                Selecionar Gêneros
                            </button>
                        </h2>
                        <div id="collapseGenero" class="accordion-collapse collapse" aria-labelledby="headingGenero" data-bs-parent="#accordionGenero">
                            <div class="accordion-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="genero[]" value="Romance" id="genero-romance"
                                <?php if (in_array('Romance', $listGenero)) echo 'checked'; ?>>
                                <label class="form-check-label" for="genero-romance">Romance</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="genero[]" value="Ficção Científica" id="genero-ficcao"
                                <?php if (in_array('Ficção Científica', $listGenero)) echo 'checked'; ?>>
                                <label class="form-check-label" for="genero-ficcao">Ficção Científica</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="genero[]" value="Fantasia" id="genero-fantasia"
                                <?php if (in_array('Fantasia', $listGenero)) echo 'checked'; ?>>
                                <label class="form-check-label" for="genero-fantasia">Fantasia</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="genero[]" value="Terror" id="genero-terror"
                                <?php if (in_array('Terror', $listGenero)) echo 'checked'; ?>>
                                <label class="form-check-label" for="genero-terror">Terror</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="genero[]" value="Biografia" id="genero-biografia"
                                <?php if (in_array('Biografia', $listGenero)) echo 'checked'; ?>>
                                <label class="form-check-label" for="genero-biografia">Biografia</label>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="novoAutor" required value="<?php echo"$autor";?>">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="number" name="novoAno" required value="<?php echo"$ano";?>">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="number" name="novoPaginas" required value="<?php echo"$paginas";?>">
                </div>

                <div class= "mb-3 d-flex justify-content-between">
                    <button type="submit" class="btn btn-success mb-3">Confirmar</button>
                    <a href="index.php" class="btn btn-danger mb-3">Voltar</a>
                </div>
            </form>
    </section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>