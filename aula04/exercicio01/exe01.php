<?php
    $nomeUser = $_GET['CxNome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];

    $media = (($nota1 + $nota2 + $nota3) / 3)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>obrigado</title>
</head>
<body  style="margin: 20%; ">
    <h1>muito obrigado pela mensagem!!</h1>
    <p>
    <?php 
       echo" $nomeUser sua media final é : $media";
?>
    </p>
  
</body>
</html>