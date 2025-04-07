<?php 

$produtos = [
    [
        "Nome" => "Camisa Polo",
        "Preço" => 79.90,
        "Categoria" => "Vestimenta"
    ],
    [
        "Nome" => "Fone de Ouvido Bluetooth",
        "Preço" => 129.99,
        "Categoria" => "Eletrônicos"
    ],
    [
        "Nome" => "Cafeteira Elétrica",
        "Preço" => 249.50,
        "Categoria" => "Eletrônicos"
    ],
    [
        "Nome" => "Livro: Aprendendo PHP",
        "Preço" => 45.00,
        "Categoria" => "Livros"
    ],
    [
        "Nome" => "Tênis Esportivo",
        "Preço" => 199.90,
        "Categoria" => "Vestimenta"
    ]
];?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio03</title>
</head>
<style>
        table {
            width: 50%;
            margin-left: 25%;
            margin-top: 10%;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
        }
        .vestimenta {
            background-color: #d1ecf1;
        }
        .eletronicos {
            background-color: #d4edda;
        }
        .livros {
            background-color: #f8d7da;
        }
</style>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>
        <?php          
            $listCategoria = ['Eletrônicos', 'Livros', 'Vestimenta']; 
            foreach ($produtos as $produto) {
                if (in_array($produto['Categoria'], $listCategoria)) {
                    if ($produto['Categoria'] == "Eletrônicos") {
                        echo "<tr class='eletronicos'>";
                        echo "<td>{$produto['Nome']}</td>";
                        echo "<td>R$ {$produto['Preço']}</td>";
                        echo "<td>{$produto['Categoria']}</td>";
                    } elseif ($produto['Categoria'] == "Livros") {
                        echo "<tr class='livros'>";
                        echo "<td>{$produto['Nome']}</td>";
                        echo "<td>R$ {$produto['Preço']}</td>";
                        echo "<td>{$produto['Categoria']}</td>";
                    } elseif ($produto['Categoria'] == "Vestimenta") {
                        echo "<tr class='vestimenta'>";
                        echo "<td>{$produto['Nome']}</td>";
                        echo "<td>R$ {$produto['Preço']}</td>";
                        echo "<td>{$produto['Categoria']}</td>";
                    } else {
                        echo "<tr>";
                        echo "<td>{$produto['Nome']}</td>";
                        echo "<td>R$ {$produto['Preço']}</td>";
                        echo "<td>{$produto['Categoria']}</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>