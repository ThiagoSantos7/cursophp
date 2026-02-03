<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>
</head>

<body>
    <header>
        <h1>THP Store<sup><small>®</small></sup></h1>
    </header>

    <main>
        <h1>Conheça nossos produtos</h1>
        <section>

            <?php

            $idProd = $_POST['id_prod'] ?? null;

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

            echo "<section class='prod'>";

            foreach ($produtos as $valor) {
                echo "<form method='post' action='" . $_SERVER['PHP_SELF'] . "'>
                <ul>
                    <li>
                        <h3>" . $valor['nome'] . "</h3>
                        <p>" . $valor['categoria'] . "</p>
                        <h4>" . $valor['preco'] . "</h4>
                        <input type='hidden' name='id_prod' value='" . $valor['id'] . "' >
                        <input type='submit' value='Adicionar'>
                    </li>
                </ul>
                </form>";
            }

            echo "</section>";
            echo "<br>";

            echo "<section class='carrinho'>";

            if (!isset($_SESSION['carrinho'])) {
                $_SESSION['carrinho'] = [];
            }

            if ($idProd !== null) {
                foreach ($produtos as $itens) {
                    if ($itens['id'] == $idProd) {
                        $_SESSION['carrinho'][] = $itens;
                    }
                }
            }

            if (!empty($_SESSION['carrinho'])) {

                $soma = 0;
                foreach ($_SESSION['carrinho'] as $item) {
                    $soma += $item['preco'];

                    echo $item['nome'] . " - " . $item['preco'] . " " . $item['categoria'];
                }
                echo "<p>Total: " . $soma . "</p>";
            } else {
                echo "<p>Carrinho vazio</p>";
            }

            echo "</section>";
            ?>

        </section>
    </main>
</body>

</html>