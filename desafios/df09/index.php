<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculo de médias</title>
</head>

<body>
    <?php
    $v1 = $_GET["v1"] ?? 0;
    $p1 = $_GET["p1"] ?? 0;
    $v2 = $_GET["v2"] ?? 0;
    $p2 = $_GET["p2"] ?? 0;

    $mediaS = ($v1 + $v2) / 2;
    #meida ponderada consiste em somar os pesos, multiplicar valor1 por peso1 + valor2 por peso2 e dividir a soma pelo resultado da multiplicaçaõ entre valores e pesos.
    $somaPesos = $p1 + $p2;
    $somaPonderada = ($v1 * $p1) + ($v2 * $p2);
    $mediaPonderada =  $somaPonderada / $somaPesos;
    ?>
    <main>
        <section>
            <h2>Calcule as médias</h2>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="v1'">1º Valor</label>
                <input type="number" name="v1" id="idv1" step="0.01">
                <label for="p1">1º Peso</label>
                <input type="number" name="p1" id="idp1" step="0.01">
                <label for="v2">2º Valor</label>
                <input type="number" name="v2" id="idv2" step="0.01">
                <label for="p2">2º Peso</label>
                <input type="number" name="p2" id="idp2" step="0.01">
                <input class="btn" type="submit" value="calcular">
            </form>
        </section><br>

        <section>
            <h2>Calculo das médias</h2>

            <form>
                <?php
                echo "<p>Analisando os valores $v1 e $v2:<br> A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($mediaS, 2, ",", ".") . "<br><br
                A <strong>Média Aritmética Ponderada</strong> com pesos $p1 e $p2 é igual a " . number_format($mediaPonderada, 2, ",", ".") . "</p>"
                ?>
            </form>

        </section>
    </main>
</body>

</html>