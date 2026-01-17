<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>

<body>
    <div>
        <?php
        require "funcoes.php";
        media(5, 10);

        $res = soma(1100, 300000, 450, 10);
        echo "<br><br>A soma dos valores resultam em = $res";
        ?>
    </div>
</body>

</html>