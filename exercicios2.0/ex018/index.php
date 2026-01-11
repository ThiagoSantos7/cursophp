<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Funções em PHP</title>
</head>

<body>
    <header>
        <h1>ThCalc | By ThDev <sup><small>tech</small></sup></h1>
    </header>
    <main>
        <fieldset>
            <legend>Calculadora de soma</legend>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="num">Escolha 5 números:</label><br><br>
                <?php
                for ($c = 1; $c <= 5; $c++) {
                    echo "<input type='number' name='num[]' min='1' max='100' required><br><br>";
                }
                ?>
                <input class="btn" type="submit" value="Calcular">
            </form>
        </fieldset>
        <br>
        <fieldset>
            <legend>Resultado de soma</legend>
            <?php
            $num = $_GET["num"] ?? [];

            function soma()
            {
                $p = func_get_args();
                $tot = func_num_args();

                $s = 0;

                for ($i = 0; $i < $tot; $i++) {
                    $s += $p[$i];
                }
                return $s;
            }

            $res = soma(...$num);

            echo "A soma dos valores dados resultam em: $res";

            ?>
        </fieldset>
    </main>
</body>

</html>