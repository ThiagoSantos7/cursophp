<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    <pre>
        <?php
        require_once 'Microfone.php';

        $m1 = new Microfone;

        $m1->modelo = 'Fifine';
        $m1->ativar();
        $m1->corled = 'Roxo';
        $m1->volume = 50;

        $m1->ligar();

        echo "<br><br>";

        print_r($m1);

        echo "<br><br>";

        $m2 = new Microfone;

        $m2->modelo = 'Logitech';
        $m2->desativar();
        $m2->corled = 'Verde água';
        $m2->volume = 100;

        $m2->ligar();

        echo "<br><br>";

        print_r($m2);
        ?>
    </pre>
</body>

</html>