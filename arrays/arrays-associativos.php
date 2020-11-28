<?php

/**
 * Exemplo de arrays associativos
 */
$contasCorrentes = [
    '121.384.444-00' => [
        'titular' => 'Teste1',
        'saldo' => 12345,
    ],
    '121.384.433-00' => [
        'titular' => 'Teste2',
        'saldo' => 12345,
    ],
    '110.384.444-34' => [
        'titular' => 'Teste3',
        'saldo' => 12345,
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

$contasCorrentes['110.384.444-40']['saldo'] -= 200;

foreach ($contasCorrentes as $cpf => $conta) {
    echo "$cpf : " . $conta['titular'] . "  " .  $conta['saldo'] . PHP_EOL;
}