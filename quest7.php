<?php

while (true) {
    fscanf(STDIN, "%d %d %d %d\n", $hora_atual, $minuto_atual, $hora_alarme, $minuto_alarme);

    if ($hora_atual == 0 && $minuto_atual == 0 && $hora_alarme == 0 && $minuto_alarme == 0) {
        break;
    }

    $minutos_atual = $hora_atual * 60 + $minuto_atual;
    $minutos_alarme = $hora_alarme * 60 + $minuto_alarme;

    if ($minutos_alarme <= $minutos_atual) {
        $minutos_alarme += 24 * 60;
    }

    $minutos_restantes = $minutos_alarme - $minutos_atual;

    echo $minutos_restantes . "\n";
}

?>
