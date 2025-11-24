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
            $numero = $_GET["numero"];
            $inteiro = floor($numero);
            $fracional = $numero - $inteiro;
            $fracional_format = number_format($fracional, 3, ",", ".");

            echo "<p>Analisando o numero <strong>$numero</strong> informado pleo usuario:</p>
            <ul>
            <li>A parte inteira do numero é <strong>$inteiro</strong></li>
            <li>A parte fracionária do numero é <strong>$fracional_format</strong></li>
            </ul>
            "
            ?>
            <a href="javascript:history.go(-1)">Voltar ao inicio</a>
        </form>

    </section>
</body>

</html>