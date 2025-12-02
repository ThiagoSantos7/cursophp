<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Raizes de um número</title>
</head>

<body>
    <?php
    $numero = $_GET["num"] ?? 0;
    $raiz_qua = sqrt($numero);
    $raiz_cub = pow($numero, 1 / 3);
    ?>
    <main>
        <section>
            <h1>Raizes de um número</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="num">Declare um número</label>
                <input type="number" name="num" id="idNum" step="0.001">
                <input class="btn" type="submit" value="calcular">
            </form>
        </section>
        <br>
        <section>
            <h2>Resultado do calculo de raizes</h2>
            <form>
                <?php
                echo "<ul>
                        <li>Número escolhido: <strong>$numero</strong></li>
                        <li>Raiz quadrada: <strong>" . number_format($raiz_qua, 3, ".", ",") . "</strong></li>
                        <li>Raiz cubica: <strong>" . number_format($raiz_cub, 3, ".", ",") . "</strong></li>
                    </ul>";
                ?>
            </form>
        </section>
    </main>
</body>

</html>