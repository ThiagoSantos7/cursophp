<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Raizes de um número</title>
</head>

<body>
    <?php

    $num = $_GET["num"] ?? 0;
    $rq = $num ** (1 / 2);
    $cb = $num ** (1 / 3);

    #Podemos fazer tambem $rq = sqrt($num); e $cb = pow($num, 1 / 3 );

    ?>
    <main>
        <section>
            <h1>Raízes de um número</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="num">Declare um número</label>
                <input type="number" name="num" value="<?= $num ?>">
                <input class="btn" type="submit" value="Calcular Raízes">
            </form>
        </section>
        <br>
        <section>
            <form>
                <?php

                echo "Analisando o numero escolhido <strong>$num</strong>";

                echo "<ul>
                        <li>A raiz quadrada é de: " . number_format($rq, 3, ",", ".") . "</li>
                        <li>A raiz cubica é de: " . number_format($cb, 3, ",", ".") . "</li>
                    </ul>";

                ?>
            </form>
        </section>
    </main>
</body>

</html>