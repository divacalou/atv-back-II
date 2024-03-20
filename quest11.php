<?php

function ordenarParesImpares(array $valores): array {
    $pares = [];
    $impares = [];

    foreach ($valores as $valor) {
        if ($valor % 2 === 0) {
            $pares[] = $valor;
        } else {
            $impares[] = $valor;
        }
    }

    sort($pares);

    rsort($impares);

    return array_merge($pares, $impares);
}

$linhas = intval(trim(fgets(STDIN)));
$valores = [];
for ($i = 0; $i < $linhas; $i++) {
    $valores[] = intval(trim(fgets(STDIN)));
}

$valoresOrdenados = ordenarParesImpares($valores);

foreach ($valoresOrdenados as $valor) {
    echo $valor . "\n";
}
?>