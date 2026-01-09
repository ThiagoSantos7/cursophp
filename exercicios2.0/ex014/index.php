<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For em PHP</title>
</head>

<body>
    <div>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="num">Escolha um número</label>
            <select name="num" id="idnum">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option>$i</option> <br>";
                }
                ?>
            </select>
            <input type="submit" value="Tabuada">
        </form>
    </div>
    <br>
    <div>
        <?php

        if ($num = isset($_GET["num"]) ? $_GET["num"] : 1) {
            echo "<h1>Essa é a tabuada do $num.</h1>";

            for ($c = 1; $c <= 10; $c++) {
                $resultado = $num * $c;
                echo "<h4>$num x $c = $resultado</h4>";
            }
        } else {
            echo "Operação inválida!";
        }


        ?>
    </div>
</body>

</html>