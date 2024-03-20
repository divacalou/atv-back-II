<?php

class CifraDeCesar {
    private const TAMANHO_ALFABETO = 26;

    public static function decifrar(string $textoCifrado, int $deslocamento): string {
        $textoDecifrado = '';

        foreach (str_split($textoCifrado) as $caractere) {
            if (ctype_upper($caractere)) {
                $novoIndice = ((ord($caractere) - ord('A') - $deslocamento) + self::TAMANHO_ALFABETO) % self::TAMANHO_ALFABETO;
                $textoDecifrado .= chr(($novoIndice < 0 ? $novoIndice + self::TAMANHO_ALFABETO : $novoIndice) + ord('A'));
            } else {
                $textoDecifrado .= $caractere;
            }
        }

        return $textoDecifrado;
    }
}

$casosTeste = [
    ["VQREQFGT", 2],
    ["ABCDEFGHIJKLMNOPQRSTUVWXYZ", 10],
    ["TOPCODER", 0],
    ["ZWBGLZ", 25],
    ["DBNPCBQ", 1],
    ["LIPPSASVPH", 4]
];

foreach ($casosTeste as $indice => $caso) {
    $textoDecifrado = CifraDeCesar::decifrar($caso[0], $caso[1]);
    if ($textoDecifrado === "HELLOWORLD") {
        echo "Diferença encontrada no caso de teste $indice!\n";
    }
    echo $textoDecifrado . "\n";
}
