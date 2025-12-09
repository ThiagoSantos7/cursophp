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
    $total_seg = $_GET["seg"] ?? 0;
    $semanas = intdiv($total_seg, 604800);
    $dias = intdiv($total_seg, 86400);
    $horas = intdiv($total_seg, 3600);
    $minutos = intdiv($total_seg, 60);
    $resto_seg = $total_seg % 60;
    ?>
    <main>
        <section>
            <h1>Calculadora de tempo</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="seg">Qual o total de segundos</label>
                <input type="number" name="seg" id="idseg">
                <input type="submit" value="Calcular" class="btn">
            </form>
        </section>
        <br>
        <section>
            <?php
            print "<p>Analisando os segundos digitados por você, <strong>$total_seg segundos</strong> equivalem a: 
            </p>
            <ul>
                <li>$semanas semanas</li>
                <li>$dias dias</li>
                <li>$horas horas</li>
                <li>$minutos minutos</li>
                <li>$resto_seg segundos</li>
            </ul> 
            ";
            ?>
        </section>
    </main>
</body>

</html>