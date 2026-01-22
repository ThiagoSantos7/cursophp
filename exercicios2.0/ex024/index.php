<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes em PHP</title>
</head>

<body>
    <pre>
        <?php
        $n = array(3, 5, 8, 2);
        $n[] = 7;
        print_r($n);

        print("<br><br>");

        $c = range(5, 20, 2);
        print_r($c);

        print("<br><br>");

        $d = range(5, 20, 2);
        foreach ($d as $valor) {
            echo "$valor ";
        }

        print("<br><br>");

        $v = array(
            3 => 5,
            1 => 9,
            0 => 8,
            7 => 7
        );
        unset($v[0]);
        print_r($v);

        print("<br><br>");

        $vetor = array(
            "nome" => "Ana",
            "idade" => 25,
            "peso" => 65.5
        );
        $vetor["fuma"] = true;
        print_r($vetor);

        foreach ($vetor as $campo => $valor) {
            echo "<strong>O campo $campo possui o conteúdo $valor</strong> <br><br>";
        }

        ?>
    </pre>
</body>

</html>