<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <h1>Tipos primitivos PHP</h1>
    <?php
    // 0x = hexadecimal 0b = binário 0 = Octal
    //$num = 010;
    //echo "O valor da variavel é $num"

    //$var = "Gustavo";
    //var_dump($var);

    //$num = 3e2; // 3 X 10 elevado a 2
    //echo "O valor é $num";

    //$num = (integer) 3e2;
    //var_dump($num);

    //$num = (float) "950";
    //var_dump($num);

    //$casado = true;
    //var_dump($casado);
    //echo "O valor para casado é $casado."

    //$vet = [6, 2.5, "maria", 3, false];
    //var_dump($vet);

    class pessoa
    {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);

    ?>
</body>

</html>