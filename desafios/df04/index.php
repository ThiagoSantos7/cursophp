<pre>
<?php

$inicio = date("m-d-Y", strtotime("-7 days")); # Inicio será a data de hoje menos 7 dias sempre.
$fim = date("m-d-Y"); # O fim será a data de hoje

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);

var_dump($dados);

$cotacao = $dados["value"][0]["cotacaoCompra"];

?>
</pre>