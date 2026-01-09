<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <?php
    $v1 = isset($_GET["v1"]) ? $_GET["v1"] : 0;
    $v2 = isset($_GET["v2"]) ? $_GET["v2"] : 0;
    $increment = isset($_GET["incremento"]) ? $_GET["incremento"] : 0;

    ?>
    <div>
        <h2>Resultado</h2>
        <form>
            <?php

            if ($v1 === "" && $v2 === "") {
                echo "<h2>Digite valores para que possa obter o resultado!</h2>";
            } else {
                while ($v1 <= $v2) {
                    echo "$v1 ";
                    $v1 += $increment;
                }

                while ($v1 >= $v2) {
                    echo "$v1 ";
                    $v1 -= $increment;
                }
            }

            echo "<br><br> <a href='javascript:history.go(-1)'>Voltar</a>";
            ?>
        </form>
    </div>
</body>

</html>