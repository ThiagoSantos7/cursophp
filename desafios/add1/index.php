<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Conversor de horas </title>
</head>

<body>

    <?php
    $v1 = $_GET["v1"] ?? 1;
    $hora = intdiv($v1, 60);
    $minutosRes = $v1 % 60;
    ?>
    <main>
        <section>
            <h1>Conversor de horas</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="v1">Digite a quantidade de minutos</label>
                <input type="number" name="v1" value="<?= $v1 ?>">
                <input class=" btn" type="submit" value="Calcular">
            </form>
        </section>
        <br>
        <section>
            <?php
            echo "Analisando o valor digitado de <strong>$v1 minutos</strong>, corresponde a: <br><br>";
            echo "<strong>$hora horas e $minutosRes minutos</strong>"
            ?>
        </section>
    </main>
</body>

</html>