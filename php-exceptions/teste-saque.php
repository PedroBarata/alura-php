<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, DepositoInvalidoException, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
try {
    $conta->deposita(-500);
}catch (InvalidArgumentException $exception) {
    echo "Nao foi possivel depositar" . PHP_EOL;
    echo $exception->getMessage();
}


/**
 * usamos um try/catch e podemos fazer o que quisermos com a exception
 * Parsear para JSON, html, etc...
 */
try {
    $conta->saca(600);
} catch (SaldoInsuficienteException $exception) {
    echo "Nao foi possivel sacar" . PHP_EOL;
    echo $exception->getMessage();
}

echo $conta->recuperaSaldo();
