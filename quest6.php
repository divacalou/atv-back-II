<?php

$x = intval(trim(fgets(STDIN)));
$y = intval(trim(fgets(STDIN)));

$soma = 0;

$menor = min($x, $y);
$maior = max($x, $y);

for ($i = $menor + 1; $i < $maior; $i++) {
    if ($i % 2 != 0) {
        $soma += $i;
    }
}

echo $soma . "\n";

?>
