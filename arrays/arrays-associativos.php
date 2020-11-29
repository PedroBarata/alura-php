<?php

require_once 'funcoes.php';

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

unset($contasCorrentes['121.384.433-00']);
converteTitularParaMaiusculo($contasCorrentes['110.384.444-40']);
foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $nome, 'saldo' => $valor] = $conta;

    exibeMensagem("$cpf: $nome $valor");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <dt>
            <?php foreach ($contasCorrentes as $cpf => $conta) {?>
            <h3>
            <?="Nome: $conta[titular] - $cpf"?>
            </h3>
        </dt>
        <dd>
            <?="Saldo: {$conta['saldo']}"?>
        </dd>
            <?php }?>
    </dl>
</body>
</html>
