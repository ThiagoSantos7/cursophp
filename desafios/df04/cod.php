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

            $inicio = date("m-d-Y", strtotime("-7 days")); #O inicio da cotação será a data de hoje menos 7 dias
            $fim = date("m-d-Y"); #O final será a data de hoje

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            $cotacaoD = $dados["value"][0]["cotacaoCompra"];
            $conversao = $real / $cotacaoD;

            echo "<ul>
                <li>Cotação dólar: " . number_format($cotacaoD, 2, '.', ',') . "</li>
                <li>Saldo em carteira: " . numfmt_format_currency($padrão, $real, "BRL") . " </li>
                <li>Conversão para dólar: " . number_format($conversao, 2, '.', ',') . "</li>
                </ul>"

            ?>
        </form>
        <a href="javascript:history.go(-1)">Voltar ao inicio</a>
    </section>
</body>

</html>