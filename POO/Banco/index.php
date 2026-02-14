<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco central</title>
</head>

<body>
    <pre>
        <h2>Bem vindo a sua conta!</h2>
        <?php
        require_once 'ContaBancaria.php';

        $c = new ContaBancaria("Thiago");
        $c->abrirConta("CP");
        $c->depositar(100);
        $c->depositar(950);
        $c->sacar(285);
        $c->VerSaldo();
        print_r($c);

        echo "<br><br>"; 
        
        $c1 = new ContaBancaria("Alberto");
        $c1->abrirConta("CC");
        $c1->depositar(1900);
        $c1->verSaldo();
        $c1->sacar(1200);
        $c1->sacar(700);
        $c1->verSaldo();
        $c1->fecharConta();
        print_r($c1);
        ?>
    </pre>
</body>

</html>