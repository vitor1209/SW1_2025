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
        menu("Listar")
    ?>


    <div class="container-fluid">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">TÍTULO</th>
                <th scope="col">AUTOR</th>
                <th scope="col">GENERO</th>
                <th scope="col">ANO</th>
                <th scope="col">PAGINAS</th>
                <th scope="col">OPÇÕES</th>
              </tr>
            </thead>
            <tbody>


                <?php
                  $sql = "SELECT * FROM livro";
                  $stmt = $pdo->query($sql);
                  $colum = 0;

              while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {   
                    $colum += 1;                    
                      echo "<tr scope 'row'></th>";
                          echo "<td>" . $livro['id'] . "</td>";
                          echo "<td>" . $livro['titulo'] . "</td>";
                          echo "<td>" . $livro['autor'] . "</td>";
                          echo "<td>" . $livro['genero'] . "</td>";
                          echo "<td>" . $livro['ano'] . "</td>";
                          echo "<td>" . $livro['paginas'] . "</td>";
                          echo
                          "<td>
                          <div class='btn-group' role='group'>
                         <a href='form_atualizar.php?id=" . $livro['id'] . "' type='button' class='btn btn-warning'>Editar</a>
                              <a class='btn btn-danger'>Apagar</a>
                          </div>                             
                          </td>";
                      echo "</tr>";
                  }
              ?>
              </tbody>
          </table>
    </div>

    <section class="hero text-center">
      <a href="form_cadastro.php" class="btn btn-success btn-lg">Cadastrar</a>
      <a href="index.php" class="btn btn-danger btn-lg">Voltar</a>
    </section>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>