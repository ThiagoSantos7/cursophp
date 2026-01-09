<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <div>
        <?php
        $num = isset($_GET["num"]) ? $_GET["num"] : 0;

        $primo = true;

        if ($num <= 1) {
            $primo = false;
        } else {
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i  == 0) {
                    $primo = false;
                    break;
                }
            }
        }

        if ($primo) {
            echo "Valores multiplos: $i";
        } else {
            echo "Não é primo";
        }
        ?>
    </div>
</body>

</html>