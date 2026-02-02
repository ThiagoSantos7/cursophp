<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <title>Carrinho de compras </title>
</head>

<body>
    <header>
        <h1>THP Store <sup><small>®</small></sup></h1>
    </header>

    <main>
        <h1>Conheça nosso Produtos</h1>
        <section class="sct-main">
            <?php
            echo "<section class='sct-list'>";

            $idProd = $_POST['id_produto'] ?? null;

            function formatar($vl)
            {
                return number_format($vl, 2, ',', '.');
            }

            $produtos = array(
                array('id' => 1, 'nome' => 'Teclado Mecânico', 'preco' => 299.99),
                array('id' => 2, 'nome' => 'Mouse', 'preco' => 159.99),
                array('id' => 3, 'nome' => 'Monitor', 'preco' => 585.80),
                array('id' => 4, 'nome' => 'Microfone', 'preco' => 280),
                array('id' => 5, 'nome' => 'Notebook', 'preco' => 4999.99),
                array('id' => 6, 'nome' => 'Mouse Pad', 'preco' => 155.90)
            );



            foreach ($produtos as $valor) {
                echo "
                    <form method='post' action='" . $_SERVER["PHP_SELF"] . "'>
                        <ul>
                            <li>
                                <h3>" . $valor['nome'] . "</h3>
                                <h5>R$ " . formatar($valor['preco']) . "</h5>
                                <input type='hidden' name='id_produto' value='" . $valor['id'] . "'>
                                <input type='submit' class='btn' value='Adicionar'>
                            </li>
                        </ul>
                    </form>
                ";
            }

            echo "</section>";
            echo "<br>";
            echo "<section class='sct-cart'>";

            $carrinho = [];

            if ($idProd !== null) {
                foreach ($produtos  as $item) {
                    if ($item['id'] == $idProd) {
                        $carrinho[] = $item;
                    }
                }

                $soma = 0;

                foreach ($carrinho as $itens) {
                    $soma += $itens['preco'];
                    echo "
                        <h2>Carrinho</h2>
                        <ul>
                            <li>
                                <h3>" . $itens['nome'] . "</h3>
                                <h4>Valor item: R$ " . formatar($itens['preco']) . "</h4>
                            </li>
                            <li>
                                <h3>Valor total: </h3>
                                <h4>R$ " . formatar($soma) . "</h4>
                            </li>
                        </ul>
                        <input type='button' class='btn-2' value='Comprar'>
                    ";
                }
            }

            echo "</section>";

            ?>
        </section>
    </main>
</body>

</html>