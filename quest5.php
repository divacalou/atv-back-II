<?php

function nivelLesma($velocidades) {
    $mais_veloz = max($velocidades);
    
    if ($mais_veloz < 10) {
        return 1;
    } elseif ($mais_veloz < 20) {
        return 2;
    } else {
        return 3;
    }
}

while (true) {
    $linha1 = fgets(STDIN);
    if ($linha1 === false) break;
    
    $n = intval(trim($linha1));
    $velocidades = array_map('intval', explode(' ', trim(fgets(STDIN))));
    
    echo nivelLesma($velocidades) . "\n";
}

?>
