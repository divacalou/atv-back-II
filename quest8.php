<?php

function criptografar($linha) {
    $resultado = "";

    for ($i = 0; $i < strlen($linha); $i++) {
        $char = $linha[$i];
        if (ctype_alpha($char)) {
            $codigo = ord($char) + 3;
            if (ctype_upper($char) && $codigo > ord('Z')) {
                $codigo -= 26;
            } elseif (ctype_lower($char) && $codigo > ord('z')) {
                $codigo -= 26;
            }
            $char = chr($codigo);
        }
        $resultado .= $char;
    }

    $resultado = strrev($resultado);

    $tamanho = strlen($resultado);
    $metade = $tamanho / 2;
    for ($i = $metade; $i < $tamanho; $i++) {
        $char = $resultado[$i];
        if (ctype_alpha($char)) {
            $codigo = ord($char) - 1;
            if (ctype_upper($char) && $codigo < ord('A')) {
                $codigo += 26;
            } elseif (ctype_lower($char) && $codigo < ord('a')) {
                $codigo += 26;
            }
            $char = chr($codigo);
        }
        $resultado[$i] = $char;
    }

    return $resultado;
}

while (true) {
    fscanf(STDIN, "%d\n", $n);
    if ($n == 0) break;
    
    for ($i = 0; $i < $n; $i++) {
        $linha = trim(fgets(STDIN));
        echo criptografar($linha) . "\n";
    }
}

?>
