<?php

$idade = 6;

echo "voce pode entrar se estiver 18 anos ou mais " . PHP_EOL;

if ($idade > 18) {
    echo 'Voce esta apto a entrar';
} else {
    echo 'Você não tem idade para entrar!';
}

// ou || , or
// e and, &&