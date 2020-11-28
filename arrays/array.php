<?php

/**
 * Exemplo de arrays associativos
 */
$contasCorrentes = [
    12138444400 => [
        'titular' => 'Teste',
        'saldo' => 12345,
    ],
    12138443300 => [
        'titular' => 'Teste',
        'saldo' => 12345,
    ],
    11038444434 => [
        'titular' => 'Teste',
        'saldo' => 12345,
    ],
];

foreach($contasCorrentes AS $cpf => $conta ) {
    echo "$cpf" . PHP_EOL;
}
