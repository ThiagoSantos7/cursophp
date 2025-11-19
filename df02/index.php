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
            if (isset($_GET['gerar'])) {
                $num = rand(0, 100);
                echo "<h3>O numero gerado é: <strong>$num</strong></h3>";
            }
            ?>
            <button type="submit" name="gerar">Gerar</button>
        </form>
    </section>
</body>

</html>