<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Resultado produtos</title>
</head>

<body>
    <?php
    $nome = $_GET["nome"] ?? "";
    ?>
    <header>
        <h1>THP <span>Store</span><sup><small>®</small></sup></h1>
    </header>
    <main class="main">
        <h2 class="h2">Olá, <?= $nome ?>!</h2>
        <h1>Conheça nossos produtos e suas funcionalidades!</h1>
        <section class="container">
            <?php

            #Criação dos produtos

            $produtos = array(
                array('nome' => 'Microfone Fifine', 'desc' => 'Conhecidos pelo excelente custo-benefício, oferecendo áudio de alta qualidade com construção robusta, iluminação RGB e funcionalidades práticas como "Plug & Play" via USB, botões de mudo rápido e monitoramento de fone de ouvido.', 'preco' => 250),
                array('nome' => 'Monitor Samsung', 'desc' => 'oferecem uma experiência versátil com resolução 4K UHD. Focados em produtividade e entretenimento, incluem plataforma Tizen, Wi-Fi, Bluetooth, 3x HDMI e suporte a jogos via nuvem. Apresentam design slim, opções VA ou Neo QLED, e taxas de atualização de 60Hz a 144Hz. ', 'preco' => 590),
                array('nome' => 'Mouse Logitech', 'desc' => 'É um mouse ergonômico de alto desempenho, ideal para produtividade, com sensor óptico de 8.000 DPI que funciona em vidro. Destaca-se por cliques 90% mais silenciosos que o modelo anterior, rolagem magnética MagSpeed (capaz de percorrer 1000 linhas em 1 segundo) e bateria com até 70 dias de autonomia. ', 'preco' => 120),
                array('nome' => 'Teclado Logitech', 'desc' => 'É um teclado sem fio compacto (65% do tamanho padrão) projetado para produtividade, com design minimalista, teclas côncavas de baixo perfil (tipo tesoura) para digitação silenciosa e precisa, e retroiluminação inteligente que acende com a aproximação das mãos. Oferece conectividade Bluetooth, carregamento USB-C e suporte para até 3 dispositivos via Easy-Switch. ', 'preco' => 445),
                array('nome' => 'Notebook Dell', 'desc' => 'é uma estação de trabalho ultracompacta voltada para alta produtividade, oferecendo alto desempenho em espaço reduzido. Geralmente equipado com processadores i5 de 12ª ou 13ª geração (ex: 12500T), possui 8GB a 16GB RAM DDR4/DDR5, SSD NVMe rápido e múltiplas conexões (HDMI, DisplayPort, USB-C). ', 'preco' => 3950)
            );

            #Mostrar produtos na tela
            echo "<section class='containers'>";
            foreach ($produtos as $item) {
                echo "
                <ul class='ulMain'>
                    <li>
                        <h2>" . $item['nome'] . "</h2>
                        <p>" . $item['desc'] . "</p>
                        <h4>R$ " . number_format($item['preco'], 2, ",", ".") . "</h4>
                    </li>
                </ul>
                ";
            }
            echo "</section>";
            #Calcular -Valor total dos produtos -Calcular preço medio

            $soma = 0;
            foreach ($produtos as $tot) {
                $soma += $tot['preco'];
            }
            $pMedio = $soma / count($produtos);

            #Verificar produto mais caro e o mais barato 

            $maior = $produtos[0]["preco"];
            $maiorNome = $produtos[0]["nome"];

            $menor = $produtos[0]["preco"];
            $menorNome = $produtos[0]["nome"];

            foreach ($produtos as $precos) {
                if ($precos["preco"] > $maior) {
                    $maior = $precos["preco"];
                    $maiorNome = $precos["nome"];
                }

                if ($precos["preco"] < $menor) {
                    $menor = $precos["preco"];
                    $menorNome = $precos["nome"];
                }
            }

            #Exibir Resumo final

            echo "
            <h1>Resumo dos produtos</h1>
            <ul class='resumo'>
                <li>Total em estoque: <strong>R$ " . number_format($soma, 2, ",", ".") . "</strong></li>
                <li>Preço médio dos valores: <strong>R$ " . number_format($pMedio, 2, ",", ".") . "</strong></li>
                <li>Produto mais caro: <strong>$maiorNome | R$ " . number_format($maior, 2, ",", ".") . "</strong></li>
                <li>Produto mais barato: <strong>$menorNome | R$ " . number_format($menor, 2, ",", ".") . "</strong></li>
            </ul>
            ";

            ?>
            <a href="javascript:history.go(-1)">Voltar</a>
        </section>
    </main>
</body>

</html>