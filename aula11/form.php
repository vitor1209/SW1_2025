<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Produto</title>
</head>

<style>
        body {
          font-family: 'Segoe UI';
          background: #f0f4f8;
          display: flex;
          align-items: center;
          justify-content: center;
          height: 90vh;
        }
    
        .container {
          background: #ffffff;
          padding: 30px;
          border-radius: 15px;
          align-items: center;
          box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
          width: 30%;
        }
    
        h2 {
          text-align: center;
          color: #2c3e50;
        }
    
        .botao {
          width: 100%;
          padding: 15px;
          background: #4caf50;
          border: none;
          color: white;
          font-size: 16px;
          font-weight: bold;
          border-radius: 10px;
          cursor: pointer;
        }

        .campos{
            width: 92%;
            padding: 15px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .campos:focus {
        outline: none;
        border-color: #4caf50;
        }
    
      </style>
<body>
    <form action="exer01.php" method="POST">
        <h1>Cadastro de Produto</h1>
        <p>
            DIgite o nome do Produto <input class="campos" type="text" name="nome" required>
        </p>

        <p>
            Digite o Preço do Produto: <input class="campos" type="number" name="Preco" required>
        </p>

        <p>
            Digite a Quantidade do Produto: <input class="campos" type="number" name="Quantidade" required>
        </p>

        <input type="submit" value="ENVIAR" class="botao">
    </form>
</body>
</html>