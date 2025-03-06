<?php
    $user = $_POST['user'];
    $email = $_POST['email'];
    $nascimento = $_POST['nascimento'];
    $cartao = $_POST['cartao'];

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
       echo" $user seu email é :  $email";
?>
    </p>

    <p>
    <?php 
       echo" $user seu nascimento é :  $nascimento";
?>
    </p>

    <p>
    <?php 
       echo" $user seu cartao é :  $cartao";
?>
    </p>
  
</body>
</html>