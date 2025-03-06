<?php
    $nomeUser = $_GET['CxNome'];
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $n3 = $_GET['n3'];

    $maior = 0;

   if ($n1 > $n2 && $n1 > $n3) {
    $maior = $n1;
   } elseif ($n2 > $n3 && $n2 > $n1) {
    $maior = $n2;
   }elseif ($n3 > $n2 && $n3 > $n1) {
    $maior = $n3;
   } else {
   }

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
       echo" $nomeUser sua maior numero é :  $maior";
?>
    </p>
  
</body>
</html>