<div class="titulo">Erros Personalizados</div>

<?php
class FaixaEtariaException extends Exception {
    public function __construct($message, $code = 0, $previous = null) {
        echo "Erro personalizdo: $message <br>";
        parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentadoria($idade) {
    if($idade < 18) {
        throw new FaixaEtariaException(' Ainda esta muito longe');
    }
    if($idade > 70) {
        throw new FaixaEtariaException('Ja deveria estar aposentado');
    }
    return 70 - $idade;
}

$idadeAvaliadas = [15, 30, 60, 80];
foreach($idadeAvaliadas as $idade) {
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restante <br>";
    }catch (FaixaEtariaException $e) {
        echo "Não foi possivel calcular para $idade anos.<br>";
        echo "Motivo: {$e->getMessage()}<br>}";
    }
}