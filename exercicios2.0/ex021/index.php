<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de maniupulação de strings</title>
</head>

<body>
    <?php
    # Printf
    $prod = "Leite";
    $preco = 4.5;
    printf("O %s está custando R$ %.2f<br><br>", $prod, $preco);

    # Print_r
    $v[0] = 4;
    $v[1] = 8;
    $v[2] = 3;
    print_r($v);

    echo "<br><br>";

    # var_dump e var_export
    $v2 = array(3, 7, 8, 9, 10, 12, 8);
    var_export($v2);

    # WordWrap
    $t = "<br><br>Texto criado pelo php para mostra funcionamento da função wordwrap";
    $r = wordwrap($t, 5, "<br>\n", false);
    echo "$r"


    ?>
</body>

</html>