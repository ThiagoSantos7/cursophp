<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <title>Tabuada</title>
</head>

<body>
    <?php

    $opn = isset($_POST["opn"]) ? $_POST["opn"] : 1;

    ?>
    <main>
        <section>
            <h1>Qual tabuada você quer estudar? <small><i class="bi bi-emoji-sunglasses-fill"></i></small>
            </h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <label for="opn">Escolha o número:</label>
                <select name="opn" id="idopn">
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
                <input type="submit" value="Ver Tabuada">
            </form>
        </section>
        <br>
        <section>
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $contador = 10;
                echo "<ul>";
                echo "<h2>Está é a tabuada do $opn</h2>";
                for ($i = 1; $i <= $contador; $i++) {
                    $r = $opn * $i;
                    echo "
                    <li><strong>$opn x $i = $r</strong><li>";
                }
                echo "</ul>";
            }
            ?>
        </section>
    </main>
</body>

</html>