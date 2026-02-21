<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste revisão</title>
</head>

<body>
    <?php

    $nome = $_GET["nome"] ?? null;
    $saldo = $_GET["saldo"] ?? 0;
    $dec = $_GET["dec"] ?? 0;
    $vl = $_GET["vl"] ?? 0;
    $dec2 = $_GET["decisao"] ?? null;

    ?>
    <main>
        <pre>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="nome">Digite seu nome: </label>
                <input type="text" name="nome" placeholder="nome">
                <label for="saldo">Digite seu saldo atual:</label>
                <input type="number" name="saldo" step="0.01" min='0'>
                <label for="dec">Quer depositar ou sacar?</label>
                <select name="dec" id="idec">
                    <option value="1">Depositar</option>
                    <option value="2">Sacar</option>
                </select>
                <label for="vl">Qual valor?</label>
                <input type="number" name="vl" step="0.01" min="0">
                <input type="submit" value="Enviar">
            </form>
        </pre>
        <br>
        <pre>
            <div>
                <?php
                switch ($dec) {
                    case 1:
                        $res = $saldo += $vl;
                        echo "<p>Deposito de $vl feito com sucesso!</p>";
                        echo "<h4>Saldo atual em: $res</h4>";
                        echo "<p>Obrigado pela preferencia $nome!</p>";
                        break;
                    case 2:
                        $res = $saldo -= $vl;
                        if ($vl > $saldo) {
                            echo "<p>Impossivel sacar, saldo insuficiente!</p>";
                        } else {
                            echo "<p>Saque de $vl efetuado com sucesso!</p>";
                            echo "<h4>Saldo atual em: $res</h4>";
                            echo "<p>Obrigado pela preferencia $nome!</p>";
                        }
                        break;
                    default:
                        echo "<p>Ops! algo deu errado...</p>";
                }
                ?>
            </div>
        </pre>
    </main>
</body>

</html>