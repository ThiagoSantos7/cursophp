<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <title>Tabuada 2.0</title>
</head>

<body>
    <main>
        <section>
            <h1>Aqui estão suas tabuadas!</h1>
            <div class="containers">
                <?php
                $contador = 10;
                for ($i = 1; $i <= $contador; $i++) {
                    echo "<div class='container'>";
                    echo "<h3>Tabuada do $i </h3>";

                    for ($c = 1; $c <= $contador; $c++) {
                        $result = $i * $c;
                        echo "$i x $c = $result<br>";
                    }
                    echo "</div>";
                }

                ?>
            </div>
        </section>
    </main>
</body>

</html>