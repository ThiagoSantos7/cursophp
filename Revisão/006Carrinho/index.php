<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <title>Carrinho</title>
</head>

<body>
    <header>
        <h1>THP Store<sup><small>®</small></sup></h1>
    </header>
    <main>
        <section class="sct-main">
            <h1>Produtos THP Store<sup><small>®</small></sup></h1>

            <section class="sct-sub">
                <h1>Produtos</h1><br>
                <?php
                # Criação dos Produtos
                echo "<section class='sct'>";
                $produtos = array(
                    array('nome' => 'Cadeira Gamer', 'categoria' => 'Mobiliário', 'preco' => 790),
                    array('nome' => 'Monitor Logitech', 'categoria' => 'Monitor', 'preco' => 1380),
                    array('nome' => 'Teclado Mecânico', 'categoria' => 'Periférico', 'preco' => 295.50),
                    array('nome' => 'Fone HeadSet', 'categoria' => 'Periférico', 'preco' => 280.95),
                    array('nome' => 'Mouse Logitech', 'categoria' => 'Periférico', 'preco' => 150),
                    array('nome' => 'Mouse Pad', 'categoria' => 'Mouse Pad', 'preco' => 160)
                );

                # Mostrar todos produtos na tela

                foreach ($produtos as $item) {
                    echo "
                    <ul>
                        <li>
                            <h3>" . $item['nome'] . "</h3>
                            <h4>" . $item['categoria'] . "</h4>
                            <p>R$ " . number_format($item['preco'], 2, ",", ".") . "</p>
                        </li>
                    </ul>
                    ";
                }

                echo "</section>";
                # Calcular valor total e media dos produtos

                $soma = 0;
                foreach ($produtos as $calc) {
                    $soma += $calc['preco'];
                }

                $media = $soma / count($produtos);

                # Filtrar produtos acima da média

                echo "<h1>Produtos Em Destaque</h1>";
                echo "<section class='sct'>";

                foreach ($produtos as $acima) {
                    if ($acima['preco'] > $media) {
                        echo "
                        <ul>
                            <li>
                                <h3>" . $acima['nome'] . "</h3>
                                <h4>" . $acima['categoria'] . "</h4>
                                <p>R$ <strong>" . number_format($acima['preco'], 2, ",", ".") . "</strong></p>
                            </li>
                        </ul>";
                    }
                }

                echo "</section>";

                # Filtrar por categoria
                echo "<h1>Seção Periféricos</h1>";
                echo "<section class='sct'>";

                foreach ($produtos as $categoria) {
                    if ($categoria['categoria'] == 'Periférico') {
                        echo "
                        <ul>
                            <li>
                                <h3>" . $categoria['nome'] . "</h3>
                                <h4>" . $categoria['categoria'] . "</h4>
                                <p> R$ <strong>" . number_format($categoria['preco'], 2, ",", ".") . "</strong></p>
                            </li>
                        </ul>
                        ";
                    }
                }

                echo "</section>";

                # Mostrar produto mais caro e mais barato
                echo "<h1>Produto mais caro e Produto mais barato</h1>";
                echo "<section class='sct'>";

                $maior = $produtos[0]['preco'];
                $nomeMaior = $produtos[0]['nome'];
                $menor = $produtos[0]['preco'];
                $nomeMenor = $produtos[0]['nome'];

                foreach ($produtos as $valor) {
                    if ($valor['preco'] > $maior) {
                        $maior = $valor['preco'];
                        $nomeMaior = $valor['nome'];
                    } else if ($valor['preco'] < $menor) {
                        $menor = $valor['preco'];
                        $nomeMenor = $valor['nome'];
                    }
                }

                echo "
                <ul>
                    <li>
                        <h3>$nomeMaior</h3>
                        <p>R$ " . number_format($maior, 2, ",", ".") . "</p>
                    </li>
                </ul>    
                <ul>
                    <li>
                        <h3>$nomeMenor</h3>
                        <p>R$ " . number_format($menor, 2, ",", ".") . "</p>
                    </li>
                </ul>
                ";

                echo "</section>";

                ?>
            </section>
        </section>
    </main>
</body>

</html>