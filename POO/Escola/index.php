<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>

<body>
    <pre>
        <h2>Central das notas <sup><small>Escola municipal</small></sup></h2>
        <?php
        require_once 'Aluno.php';

        $al = array();

        $al[0] = new Aluno("Thiago", 10, 8);
        $al[0]->mostrarDados();
        $al[1] = new Aluno("Lucas", 3, 10);
        $al[1]->mostrarDados();
        $al[2] = new Aluno("Cauã", 7, 5);
        $al[2]->mostrarDados();
        $al[3] = new Aluno("Arthur", 5, 8);
        $al[3]->mostrarDados();
        $al[4] = new Aluno("Pablo", 10, 7);
        $al[4]->mostrarDados();

        echo "<br><br>";
        print_r($al);
        ?>
    </pre>
</body>

</html>