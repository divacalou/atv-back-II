<?php

function mdc(int $a, int $b): int {
    while ($b != 0) {
        $r = $a % $b;
        $a = $b;
        $b = $r;
    }
    return $a;
}

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    list($f1, $f2) = explode(" ", trim(fgets(STDIN)));
    
    $tamanhoMaxPilha = mdc($f1, $f2);

    echo $tamanhoMaxPilha . "\n";
}
?>