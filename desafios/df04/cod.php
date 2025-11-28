<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <section>
        <h1>Resultado da conversão em dólar</h1>
        <form>
            <?php
            $real = $_GET["carteira"];
            $padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            #cotação vinda da api do banco central

            $inicio = date("m-d-Y", strtotime("-7 days")); # Inicio será a data de hoje menos 7 dias sempre.
            $fim = date("m-d-Y"); # O fim será a data de hoje

            #cotação vinda da api do banco central
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $conversao = $real / $cotacao;

            echo "<ul>
            <li>Seu saldo " . numfmt_format_currency($padrão, $real, "BRL") . "</li>
            <li>Equivale em dolar <strong>" . numfmt_format_currency($padrão, $conversao, "USD") . "</strong></li>
            </ul>";

            ?>
        </form>
        <a href="javascript:history.go(-1)">Voltar ao inicio</a>
    </section>
</body>

</html>