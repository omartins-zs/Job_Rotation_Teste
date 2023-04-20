<?php

$path = "../Auxiliares/dados.json";

$json_data = file_get_contents($path);

$data = json_decode($json_data);

$min_valor = PHP_FLOAT_MAX;
$max_valor = PHP_FLOAT_MIN;
$total_valor = 0;
$num_dias_acima_da_media = 0;

foreach ($data as $item) {
    $valor = $item->valor;
    $total_valor += $valor;

    if ($valor < $min_valor) {
        $min_valor = $valor;
    }

    if ($valor > $max_valor) {
        $max_valor = $valor;
    }
}

$media_mensal = $total_valor / count($data);

foreach ($data as $item) {
    if ($item->valor > $media_mensal) {
        $num_dias_acima_da_media++;
    }
}

echo "O menor valor de faturamento ocorrido em um dia do mês: " . $min_valor . "<br><br>";
echo "O maior valor de faturamento ocorrido em um dia do mês: " . $max_valor . "<br><br>";
echo "Faturamento maior que a média em " . $num_dias_acima_da_media . " dias <br><br>";
