<?php
    $nomeUser = $_POST['CxNome'];
    $mensagemUser = $_POST['mensagem'];
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
       echo" $nomeUser sua mensagem é : ";
?>
    </p>
    <p>
    <?php 
    echo "$mensagemUser"
?>
    </p>
  
</body>
</html>