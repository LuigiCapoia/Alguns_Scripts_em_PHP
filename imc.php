<?php

$peso = 100;
$altura = 1.63;
$IMC = $peso / $altura ** 2;

echo "O seu IMC é de $IMC\n";

if ($IMC <= 18.4) {
    echo "Voce está abaixo do peso\n";
} else if ($IMC >= 18.5 && $IMC <= 24.9) {
    echo "Voce está com o peso normal\n";
} else {
    echo "voce esta acima do peso ideal.\n";
}
