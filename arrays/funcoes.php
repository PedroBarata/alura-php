<?php

function exibeMensagem(string $mensagem): void
{
    echo $mensagem . PHP_EOL;
}

/* Manipulações de dados e funções */
function saca(array $conta, float $valor): float
{
    if ($conta['saldo'] > $valor) {
        return $conta['saldo'] -= $valor;
    }
    echo exibeMensagem("Você não pode sacar este valor!");
    return $conta['saldo'];
}


function deposita(array $conta, float $valor): float
{
    if ($valor > 0) {
        return $conta['saldo'] += $valor;
    }
    echo exibeMensagem("Só são aceitos depósitos maiores que 0.");
    return $conta['saldo'];
}