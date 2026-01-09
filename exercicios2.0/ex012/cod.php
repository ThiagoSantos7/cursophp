<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabuada</title>
</head>

<body>
    <div>
        <?php
        $num = isset($_GET["num"]) ? $_GET["num"] : 0;
        echo "Está é a Tabuada do $num. <br><br>";
        $c = 1;

        do {
            $resultado = $num * $c;
            echo "<h4>$num x $c = $resultado</h4> <br>";
            $c++;
        } while ($c <= 10);
        ?> <br>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </div>
</body>

</html>