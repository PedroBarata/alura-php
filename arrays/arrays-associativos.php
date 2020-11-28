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

/**
 * Exemplo de arrays associativos
 */
$contasCorrentes = [
    '121.384.444-00' => [
        'titular' => 'Teste1',
        'saldo' => 200,
    ],
    '121.384.433-00' => [
        'titular' => 'Teste2',
        'saldo' => 400,
    ],
    '110.384.444-34' => [
        'titular' => 'Teste3',
        'saldo' => 100,
    ],
];

/* Podemos adicionar novos itens no array
passando a chave que queremos adicionar
e os valores associados à ela */
$contasCorrentes['110.384.444-40'] = [
    'titular' => 'Teste4',
    'saldo' => 12000,
];

/* Para manipular dados, fazemos o seguinte: */

$contasCorrentes['110.384.444-40']['saldo'] = saca($contasCorrentes['110.384.444-40'], 2000);
$contasCorrentes['110.384.444-34']['saldo'] = saca($contasCorrentes['110.384.444-34'], 2000);
$contasCorrentes['121.384.433-00']['saldo'] = deposita($contasCorrentes['121.384.433-00'], 2000);
$contasCorrentes['121.384.433-00']['saldo'] = deposita($contasCorrentes['121.384.433-00'], 0);

foreach ($contasCorrentes as $cpf => $conta) {
    echo "$cpf : " . $conta['titular'] . "  " . $conta['saldo'] . PHP_EOL;
}
