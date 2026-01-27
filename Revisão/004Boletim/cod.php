<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <title>Reusltado médias</title>
</head>

<body>
    <?php
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "";
    ?>
    <main>
        <section>
            <h1>Calculo de médias</h1>
            <p>lembrando que para aprovação, válido a partir de <strong>7.00</strong></p>
            <form>
                <h2><?= $nome ?>, Suas notas são as seguintes:</h2>
                <?php

                $notas = array(5, 7, 10, 6, 7);
                echo "<ul>";
                foreach ($notas as $value) {
                    echo "<li>Nota: <strong>$value</strong></li>";
                }
                echo "</ul>";

                $som = 0;
                foreach ($notas as $valor) {
                    $som += $valor;
                }

                $media = $som / count($notas);

                if ($media < 7) {
                    echo "<h4>A média das suas notas é igual a: $media</h4>";
                    echo "<h3>Você está reprovado!</h3>";
                } else {
                    echo "<h4>A média das suas notas é igual a: $media</h4>";
                    echo "<h3 class='h3AP'>Você está aprovado!</h3>";
                }

                echo "<a href='javascript:history.go(-1)'>Voltar<a>";

                ?>
            </form>
        </section>
    </main>
</body>

</html>