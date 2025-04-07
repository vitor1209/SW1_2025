<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio01</title>
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
        .mudarCor{
            background-color: #007BFF;
        }

    </style>
<body>
    <table>
    <?php

        $linhas = $_POST['linhas'];
        $colunas = $_POST['colunas'];
        $contLinhas = 1;
        $contColum = 1;
        while($linhas != 0 ){
            if ($contLinhas % 2 == 0) {
                echo "<tr>";
                } else {
                    echo "<tr class='mudarCor'>";
            }
            while($contColum <= $colunas ){
                echo "<td>linha $contLinhas coluna $contColum</td>";
                $contColum++;
            }
            $contColum = 1;
            $contLinhas++;
            $linhas--;
        }
        ?>
    </table>
</body>
</html>