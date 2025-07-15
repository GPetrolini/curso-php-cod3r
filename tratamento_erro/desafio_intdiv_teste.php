<div class="titulo">Desafio Intdiv</div>
<?php

require_once 'desafio_intdiv.php';
use function \Aritimetica\intdiv;

try {
    echo intdiv(8,3) . '<br>';
} catch(\Aritimetica\NaoInteiroException $e) {
    echo 'Resultado n�o � um numero inteiro<br>';
}

try {
    echo intdiv(8,3) . '<br>';
} catch(DivisionByZeroError $e) {
    echo 'Divis�o por zero<br>';
}

echo \intdiv(8,2) . '<br>';
echo intdiv(8,2) . '<br>';