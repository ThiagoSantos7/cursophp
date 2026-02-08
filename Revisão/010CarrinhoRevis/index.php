<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Carrinho de compras</title>
</head>

<body>

    <header>
        <h1>THP Store - By ThDev <sup><small>Tech</small></sup></h1>
    </header>

    <?php
    session_start();
    $id_prod = $_POST['id_prod'] ?? null;
    $limparCart = $_POST['limpar'] ?? null;

    if ($limparCart !== null) {
        $_SESSION['carrinho'] = [];
    }
    ?>
    <main>
        <h1>Nossos produtos</h1>
        <section class="main-sct">
            <?php

            function convert($valor)
            {
                $convert = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
                return numfmt_format_currency($convert, $valor, "BRL");
            }

            echo "<section class='itens'>";

            $produtos = array(
                array('id' => 1, 'nome' => 'Teclado', 'categoria' => 'Periféricos', 'preco' => 299.99),
                array('id' => 2, 'nome' => 'CPU', 'categoria' => 'Internos', 'preco' => 599.99),
                array('id' => 3, 'nome' => 'Mouse', 'categoria' => 'Periféricos', 'preco' => 99.99),
                array('id' => 4, 'nome' => 'Placa Mãe', 'categoria' => 'Internos', 'preco' => 199.99),
                array('id' => 5, 'nome' => 'HeadSet', 'categoria' => 'Periféricos', 'preco' => 499.99),
                array('id' => 6, 'nome' => 'SSD', 'categoria' => 'Internos', 'preco' => 689.99),
                array('id' => 7, 'nome' => 'Placa de vídeo', 'categoria' => 'Internos', 'preco' => 2899.99),
                array('id' => 8, 'nome' => 'Monitor', 'categoria' => 'Periféricos', 'preco' => 779.99),
            );

            foreach ($produtos as $item) {
                echo "
                <form method='post' action='" . $_SERVER['PHP_SELF'] . "'>
                <ul>
                    <li>
                        <h3>" . $item['nome'] . "</h3>
                        <p>" . $item['categoria'] . "</p>
                        <input type='hidden' name='id_prod' value='" . $item['id'] . "'>
                        <input type='submit' value='" . convert($item['preco']) . "'>
                    </li>
                </ul>
                </form>
                ";
            }

            echo "</section>";
            echo "<br>";
            echo "<section class='sct-cart'>";

            echo "<h1>Carrinho</h1>";

            if (!isset($_SESSION['carrinho'])) {
                $_SESSION['carrinho'] = [];
            }

            if ($id_prod !== null) {
                foreach ($produtos as $itens) {
                    if ($itens['id'] == $id_prod) {
                        $_SESSION['carrinho'][] = $itens;
                    }
                }
            }

            echo "<section class='sct-grid'>";

            if (empty($_SESSION['carrinho'])) {
                echo "<p>Carrinho vazio... :(</p>";
            } else {
                $soma = 0;
                foreach ($_SESSION['carrinho'] as $vl) {
                    echo "
                    <ul>
                        <li>
                            <p><strong>" . $vl['nome'] . "</strong>: " . convert($vl['preco']) . "</p><br>
                        </li>
                    </ul>
                    ";
                    $soma += $vl['preco'];
                }
                echo "</section>";
                echo "<h4>Valor total: " . convert($soma) . "</h4>";
            }


            echo "<form method='post' action='" . $_SERVER['PHP_SELF'] . "'>
                <input type='hidden' name='limpar' value='1'>
                <input type='submit' value='Limpar' name='limpar'>
            ";


            echo "</section>"
            ?>
        </section>
    </main>
</body>

</html>