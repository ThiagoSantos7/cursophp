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
        require_once 'Produto.php';

        $p1 = new Produto('Teclado mecanico', 250, 10);

        $p1->vender(5);
        $p1->repor(20);
        $p1->mostrarDados();

        $p2 = new Produto('Mouse logitech', 230, 2);

        $p2->vender(2);
        $p2->repor(52);
        $p2->mostrarDados();
        ?>
    </pre>
</body>

</html>