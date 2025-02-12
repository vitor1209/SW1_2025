<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo03</title>
</head>
<body>

    <?php 
        $nome = "afonso";
    ?>

    <p>oi meu nome e :  <?php echo $nome; ?> </p>
    <p>oi meu nome e :  <?php echo" $nome"; ?> </p>
    <?php echo "<p>oi meu nome e : $nome </p>"; ?> 
    <?php echo "<p>oi meu nome e :" .$nome. "</p>"; ?>
</body>
</html>