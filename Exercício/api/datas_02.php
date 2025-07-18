<div class="titulo">Datas #02</div>

<?php
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%a, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();

print_r($agora);
echo '<br>';

echo $agora->format($formatoData1) . '<br>';

setlocale(LC_TIME, 'pt_BR');
echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';

$amanha  = new DateTime('-2 day');
echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';

$dataFixa = new DateTime('1975-01-25 15:20:50');
echo strftime($formatoData2, $dataFixa->getTimestamp()) . '<br>';

$amanha->modify('+1 day');
strftime($formatoData2, $amanha->getTimestamp()) . '<br>';

$amanha->setDate(2000, 5, 20);
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

$dataPassada = new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-09-23');
$outraData = new DateTime('2030-02-04');
echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';
echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
echo $outraData === $dataFutura ? 'Igual' : 'Diferente' . '<br>';

echo '<br>';

$tz = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime(null, $tz);
echo $agora->format('d/m/Y H:i:s') . '<br>';