<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Leitor de idade</title>
</head>

<body>
    <header>
        <h1>Desafio PHP: Calculo de médias</h1>
    </header>

    <main>
        <?php
        $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
        $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;
        $media = ($n1 + $n2) / 2;

        echo "A média entre $n1 e $n2 é igual a " . number_format($media, 2, ".", ",") . "<br><br>";

        if ($media >= 7) {
            $situacao = "APROVADO";
        } else if ($media >= 5 && $media < 7) {
            $situacao = "RECUPERAÇÃO";
        } else {
            $situacao = "REPROVADO";
        }

        echo "Situação do aluno: $situacao <br><br>"

        ?>

        <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>

</html>