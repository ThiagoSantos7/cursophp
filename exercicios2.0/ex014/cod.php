<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado tabuada</title>
</head>

<body>
    <div>
        <?php

        if ($num = isset($_GET["num"]) ? $_GET["num"] : 1) {
            echo "<h1>Esta  a tabuada do $num.<h1><br>";
            for ($c = 1; $c <= 10; $c++) {
                $resultado = $num * $c;
                echo "<h3>$num x $c = $resultado<h3>";
            }
        } else {
            echo "<h1>Operação inválida</h1>";
        }

        ?>
    </div>
</body>

</html>