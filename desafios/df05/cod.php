<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <section>
        <h1>Analisador de número real</h1>
        <form>
            <?php

            $num = $_REQUEST["numero"] ?? 0;
            echo "<h3>Analisando o numero: " . number_format($num, 3, ".", ",") . "<h3>";

            $int = (int)$num;
            $frac = $num - $int;

            echo "<ul>
            <li>A parte inteira do numero: $int</li>
            <li>A parte fracional: " . number_format($frac, 3, ".", ",") . "</li>
            </ul><br>";

            ?>
            <a href="javascript:history.go(-1)">Voltar ao inicio</a>
        </form>

    </section>
</body>

</html>