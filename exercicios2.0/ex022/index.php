<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções e manipulações com String</title>
</head>

<body>
    <?php
    #strlen() trim() ltrim() e rtrim().
    $t = "   Thiago Roberto Araujo Santos   ";
    echo (strlen($t));
    $novo = rtrim($t);
    echo ($novo);
    (strlen($novo));

    echo "<br><br>";

    # str_word_count
    $frase = "Eu vou estudar PHP";
    $cont = str_word_count($frase, 2);
    print_r($cont);

    echo "<br><br>";

    # explode()
    $site = "Curso em video";
    $vetor = explode(" ", $site);
    print_r($vetor);

    echo "<br><br>";

    #str_split()
    $vetor = str_split($site);
    print_r($vetor);

    echo "<br><br>";

    # implode()
    $vet[0] = "Thiago";
    $vet[1] = "Roberto";
    $vet[2] = "Araujo";
    $vet[3] = "Santos";

    $txt = implode("$", $vet);
    echo "$txt";

    echo "<br><br>";

    #chr()
    $letra = chr(77);
    echo "A letra de codigo 67 é $letra";

    echo "<br><br>";

    # ord()
    $letra = "T";
    $cod = ord($letra);
    echo "A letra $letra corresponde ao codigo $cod."
    ?>
</body>

</html>