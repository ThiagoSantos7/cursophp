<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    $ds = isset($_GET["ds"]) ? $_GET["ds"] : 0;
    switch ($ds) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Vai estudar ja!";
            break;
        case 7:
        case 8:
            echo "Descanse pequeno gafanhoto.";
            break;
        default:
            echo "Dia da semana invalido!";
    }
    ?>
    <main>
        <section>
            <form>

            </form>
        </section>
        <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>

</html>