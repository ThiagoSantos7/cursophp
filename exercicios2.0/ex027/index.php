<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de elementos</title>
</head>

<body>
    <div>
        <pre>
            <?php
            $v = array("A", "B", "C", "D", "E", "T");
            print_r($v);
            array_shift($v);
            print_r($v);

            #colocando vetores em ordem
            $n = array(0 => 5, 4 => 7, 2 => 2, 1 => 1);
            krsort($n);
            print_r($n);

            ?>
        </pre>
    </div>
</body>

</html>