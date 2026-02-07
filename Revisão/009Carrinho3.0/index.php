<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <title>Carrinho de compras</title>
</head>

<body>
    <header>
        <h1>THP Store<sup><small>®</small></sup></h1>
    </header>

    <main>

        <section class="sct-main">

            <?php

            $id_prod = $_POST['id_prod'] ?? null;

            function real($vl)
            {
                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
                return numfmt_format_currency($padrao, $vl, "BRL");
            }

            $produtos = array(
                array('id' => 1, 'nome' => 'Monitor', 'categoria' => 'Periférico', 'preco' => 599.99),
                array('id' => 2,  'nome' => 'Teclado', 'categoria' => 'Periférico', 'preco' => 499.99),
                array('id' => 3, 'nome' => 'Mouse', 'categoria' => 'Periférico', 'preco' => 299.99),
                array('id' => 4, 'nome' => 'Microfone', 'categoria' => 'Periférico', 'preco' => 199.99),
                array('id' => 5, 'nome' => 'Mouse pad', 'categoria' => 'Periférico', 'preco' => 99.99),
                array('id' => 6, 'nome' => 'HeadSet', 'categoria' => 'Periférico', 'preco' => 399.99),
            );


            echo "<section class='sct-two'>";
            echo "<h1 class='h1'>Conheça nosso Produtos</h1>";
            echo "<section class='list'>";
            foreach ($produtos as $valor) {
                echo "
                <form method='post' action='" . $_SERVER['PHP_SELF'] . "'>
                    <ul class='ul-sct'>
                        <li>
                            <h3>" . $valor['nome'] . "</h3>
                            <p>" . $valor['categoria'] . "</p>
                            <input type='hidden' name='id_prod' value='" . $valor['id'] . "'>
                            <input type='submit' class='btnA' value='" . real($valor['preco']) . "'>
                        </li>
                    </ul>
                </form>
                ";
            }
            echo "</section>";
            echo "</section>";

            echo "<br>";
            echo "<section class='carrinho'>";
            echo "<h1 class='h1'>Carrinho de compras</h1>";

            if (!isset($_SESSION['carrinho'])) {
                $_SESSION['carrinho'] = [];
            }

            if ($id_prod !== null) {
                foreach ($produtos as $item) {
                    if ($item['id'] == $id_prod) {
                        $_SESSION['carrinho'][] = $item;
                    }
                }
            }

            echo "<section class='cart'>";

            if (empty($_SESSION['carrinho'])) {
                echo "Carrinho vazio... :(";
            } else {
                $soma = 0;
                foreach ($_SESSION['carrinho'] as $itens) {
                    echo "
                    <ul class='ul-cart'>
                        <li>
                            <h3>" . $itens['nome'] . "</h3>
                            <p>" . $itens['categoria'] . "</p>
                            <h4>" . real($itens['preco']) . "</h4>
                        </li>
                        
                    </ul>
                    ";
                    $soma += $itens['preco'];
                }
                echo "</section>";
                echo "<h3>Valor total: " . real($soma) . "</h3>";
            }


            echo "
            <form method='post' action='" . $_SERVER['PHP_SELF'] . "'>
                <input type='hidden' name='limpar' value='1'>
                <input type='submit' class='btn' name='limpar' value='Limpar carrinho'>
            </form>
            ";

            if (isset($_POST['limpar'])) {
                unset($_SESSION['carrinho']);
            }

            echo "</section>";

            ?>

        </section>
    </main>
</body>

</html>