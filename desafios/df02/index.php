<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de numeros</title>
</head>

<body>
    <header>
        <h2>Gere numeros aleatorios de 0 a 100 agora!</h2>
    </header>
    <section>
        <form method="get">
            <?php
            $min = 0;
            $max = 100;
            $numero = mt_rand($min, $max);

            echo "O numero gerado foi: $numero";
            ?>
            <button type="submit" name="gerar">Gerar</button>
        </form>
    </section>
</body>

</html>