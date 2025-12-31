<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>

<body>
    <div>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <?php
            $r = 1;
            while ($r <= 5) {
                echo "<label for='v$r'>Valor $r:</label>
                <input type='number' name='v1' min='0' max='100' value='0'><br><br>";
                $r++;
            }
            ?>
            <input type="submit" class="botao">
        </form>
    </div>
    <div>
        <?php
        $i = 1;
        while ($i <= 5) {
            $v = "num" . $i;
            $rr = "v" . $i;
            $$v = isset($_GET["url"]) ? $_GET["url"] : 0;
            $i++;
        }
        
        echo "$num1 $num2 $num3 $num4 $num5";



        /* $i = 1;
        while ($i <= 5) {
            $v = "num" . $i;
            echo "Valor $i : " . $$v . "<br>";
            $i++;
        }*/

        ?>
    </div>
</body>

</html>