<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas e funções em PHP</title>
</head>

<body>
    <div>
        <?php
        function soma($a, $b){
            return $a + $b;
        }

        $x = 15;
        $y = 10;
        $r = soma($x, $y);

        echo "A soma entre $x e $y = $r";
        ?>
    </div>
</body>

</html>