<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    $num = isset($_GET["num"]) ? $_GET["num"] : 0;
    $oper = isset($_GET["oper"]) ? $_GET["oper"] : 1;

    switch ($oper) {
        case 1:
            $result = $num * 2;
            break;
        case 2:
            $result = $num ^ 3;
            break;
        case 3:
            $result = sqrt($num);
            break;
        default:
            $result = "Tente novamente.";
    }


    ?>
    <main>
        <section>
            <form>
                <p>O resultado da operação solicitada foi <strong><?= $result ?></strong></p>
            </form>
        </section>
        <a href="index.html">Voltar</a>
    </main>
</body>

</html>