<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de tempo</title>
</head>

<body>
    <?php
    $total = $_GET["total_seg"] ?? 0;
    $sobra = $total;
    # Calculo de semanas
    $semanas = (int)($sobra / 604800);
    $sobra = $sobra % 604800;
    # Calculo de dias
    $dias = (int)($sobra / 86400);
    $sobra = $sobra % 86400;
    # Calculo de horas
    $horas = (int)($sobra / 3600);
    $sobra = $sobra % 3600;
    # Calculo minutos
    $minutos = (int)($sobra / 60);
    # Calculo segundos
    $segundo = $sobra;
    ?>
    <main>
        <section>
            <h1>Calculadora do tempo</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="total_seg">Digite o total de segundos</label>
                <input type="number" name="total_seg">
                <input class="btn" type="submit" value="Calcular">
            </form>
        </section>
        <br>
        <section>
            <h2>Resultado</h2>
            <h4>Analisando o numero escolhido de <?= number_format($total, 0, ",", ".") ?></h4>
            <ul>
                <li> <?= $semanas ?> Semana(s)</li>
                <li> <?= $dias ?> Dia(s)</li>
                <li> <?= $horas ?> Hora(s)</li>
                <li> <?= $minutos ?> Minuto(s)</li>
                <li> <?= $segundo ?> Segundo(s)</li>
            </ul>
        </section>
    </main>
</body>

</html>