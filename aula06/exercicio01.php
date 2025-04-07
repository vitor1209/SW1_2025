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
        for ($i=1; $i <= 8; $i++) { 
            if ($i % 2 == 0) {
                echo "<tr>";
                } else {
                    echo "<tr class='mudarCor'>";
                }
            
            for ($t=1; $t <= 4; $t++) {
                echo "<td>linha $i coluna $t</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>