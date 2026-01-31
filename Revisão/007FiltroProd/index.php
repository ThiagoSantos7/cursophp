<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Filtragem de Produtos</title>
</head>

<body>
    <?php

    $opcao = $_POST["op"] ?? 1;

    $produtos = array(
        array('nome' => 'Teclado', 'desc' => 'Logitech - MX Key Mini ', 'categoria' => 'Periféricos', 'preco' => 456),
        array('nome' => 'Mouse Bluetooth', 'desc' => 'Eletro cd - Mini', 'categoria' => 'Periféricos', 'preco' => 250),
        array('nome' => 'Monitor', 'desc' => 'Samsung - 45 polegadas ', 'categoria' => 'Periféricos', 'preco' => 700),
        array('nome' => 'Placa Mãe', 'desc' => 'ASUS - TUF X670E ', 'categoria' => 'Internos', 'preco' => 2718.23),
        array('nome' => 'Placa de Vídeo', 'desc' => 'Gigabite RTX - 5090 MASTER ', 'categoria' => 'Internos', 'preco' => 26599.99),
        array('nome' => 'Processador', 'desc' => 'AMD - Ryzen 7 ', 'categoria' => 'Internos', 'preco' => 3408.92),
        array('nome' => 'Fonte Gamer', 'desc' => 'Rise Mode - Zeus 1000W ', 'categoria' => 'Internos', 'preco' => 699.99),
        array('nome' => 'SSD', 'desc' => 'WD Green - M-2', 'categoria' => 'Internos', 'preco' => 1063.91),
    );

    ?>
    <header>
        <h1>THP Store <sup><small>®</small></sup></h1>
    </header>
    <main>
        <section class="sct-main">
            <h1>Conheça nossos Produtos <i class="bi bi-bag-check-fill"></i></h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <label for="op">Filtrar</label>
                <select name="op" id="idop">
                    <option value="" selected></option>
                    <option value="1">Ver tudo</option>
                    <option value="2">Acima da média</option>
                    <option value="3">Periféricos</option>
                    <option value="4">Internos</option>
                    <option value="5">Resumo de produtos</option>
                </select>
                <input type="submit" class="btn" value="Filtrar">
            </form>
        </section>
        <br>
        <section class="sct-base">
            <h1>Nossos Produtos</h1>
            <section class="sct-prod">
                <?php

                function formatar($valor)
                {
                    return number_format($valor, 2, ',', '.');
                }

                switch ($opcao) {
                    case 1:
                        foreach ($produtos as $item) {
                            echo "
                            <ul>
                                <li>
                                    <h3>" . $item['nome'] . "</h3>
                                    <p><strong>" . $item['desc'] . "</strong></p>
                                    <p><strong>" . $item['categoria'] . "</strong></p>
                                    <h4>R$ " . formatar($item['preco']) . "</h4>
                                </li>
                            </ul>
                            ";
                        }
                        break;
                    case 2:

                        $soma = 0;
                        foreach ($produtos as $prod) {
                            $soma += $prod['preco'];
                        }
                        $result = $soma / count($produtos);

                        foreach ($produtos as $vl) {
                            if ($vl['preco'] > $result) {
                                echo "
                                <ul class='ul-ed'>
                                    <li>
                                        <h3>Preço médio dos valores dos produtos:<h3>
                                        <h4>" . $vl['nome'] . "</h4>
                                        <h4>R$ " . formatar($vl['preco']) . "</h4>
                                        <h3>Reusultado preço médio: R$" . formatar($result) . "</h3>
                                    </li>
                                </ul>
                                ";
                            }
                        }
                        break;
                    case 3:

                        foreach ($produtos as $per) {
                            if ($per['categoria'] == 'Periféricos') {
                                echo "
                            <ul>
                                <li>
                                    <h4>" . $per['nome'] . "</h4>
                                    <p><strong>" . $per['desc'] . "</strong></p>
                                    <h5>" . $per['categoria'] . "</h5>
                                    <h4>" . formatar($per['preco']) . "</h4>
                                </li>
                            </ul>
                            ";
                            }
                        }
                        break;
                    case 4:

                        foreach ($produtos as $inter) {
                            if ($inter['categoria'] == 'Internos') {
                                echo "
                                <ul>
                                    <li>
                                        <h4>" . $inter['nome'] . "</h4>
                                        <p><strong>" . $inter['desc'] . "</strong></p>
                                        <h5>" . $inter['categoria'] . "</h5>
                                        <h4>" . formatar($inter['preco']) . "</h4>
                                    </li>
                                </ul>
                            ";
                            }
                        }
                        break;
                    case 5:
                        echo "<h2>Resumo dos Produtos:</h2>";

                        # Valor total em soma, valor medio em media.

                        $soma = 0;
                        foreach ($produtos as $sum) {
                            $soma += $sum['preco'];
                        }
                        $media = $soma / count($produtos);

                        # Valor mais barato e Valor mais caro.

                        $maior = $produtos[0]['preco'];
                        $nomeMaior = $produtos[0]['nome'];

                        $menor = $produtos[0]['preco'];
                        $nomeMenor = $produtos[0]['nome'];

                        foreach ($produtos as $valor) {
                            if ($valor['preco'] > $maior) {
                                $maior = $valor['preco'];
                                $nomeMaior = $valor['nome'];
                            } elseif ($valor['preco'] < $menor) {
                                $menor = $valor['preco'];
                                $nomeMenor = $valor['nome'];
                            }
                        }

                        echo "
                        <ul>
                            <li>
                                <h4>Total dos Preços: " . formatar($soma) . "</h4>
                                <h4>Média entre Preços: " . formatar($media) . "</h4>
                                <h4>Produto mais caro: " . $nomeMaior . " | Valor: " . formatar($maior) . "</h4>
                                <h4>Produto mais barato: " . $nomeMenor . " | Valor: " . formatar($menor) . "</h4>
                            </li>
                        </ul>
                    ";
                        break;
                    default:
                        echo "<h1>Conheça nosso produtos acessando os filtros... :)</h1>";
                }

                ?>
            </section>
        </section>
    </main>
</body>

</html>