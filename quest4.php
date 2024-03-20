<?php

function somaConsecutivos($menor, $maior) {
    $soma = 0;
    for ($i = $menor; $i <= $maior; $i++) {
        $soma += $i;
    }
    return $soma;
}

while (true) {
    fscanf(STDIN, "%d %d\n", $m, $n);

    if ($m <= 0 || $n <= 0) {
        break;
    }

    $menor = min($m, $n);
    $maior = max($m, $n);

    for ($i = $menor; $i <= $maior; $i++) {
        echo $i . " ";
    }
    echo "Sum=" . somaConsecutivos($menor, $maior) . "\n";
}

?>
