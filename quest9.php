<?php

function calcularLeds(int $numero): int {
    $ledsPorDigito = [
        0 => 6, 1 => 2, 2 => 5, 3 => 5, 4 => 4,
        5 => 5, 6 => 6, 7 => 3, 8 => 7, 9 => 6
    ];

    $totalLeds = 0;

    $digitos = str_split(strval($numero));

    foreach ($digitos as $digito) {
        $totalLeds += $ledsPorDigito[$digito];
    }

    return $totalLeds;
}

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    $numero = intval(trim(fgets(STDIN)));

    $quantidadeLeds = calcularLeds($numero);

    echo $quantidadeLeds . " leds\n";
}
?>