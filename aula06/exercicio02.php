<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio01</title>
</head>
<style>
    form {
        margin-left: 38%;
         margin-top: 18%;
        border-radius: 10px;
    }
    input, button {
        margin: 10px;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

</style>
<body>
    <form method="POST" action="processa02.php">
            <label for="linhas">Número de Linhas:</label>
            <input type="number" name="linhas" min="1" required> <br>
            <label for="colunas">Número de Colunas:</label>
            <input type="number" name="colunas" min="1" required><br>
            <input type="submit" value="ENVIAR">
        </form>
</body>
</html>