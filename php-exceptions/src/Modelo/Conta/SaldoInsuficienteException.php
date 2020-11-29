<?php


namespace Alura\Banco\Modelo\Conta;


use DomainException;

class SaldoInsuficienteException extends DomainException
{

    public function __construct(float $valorASacar, float $saldo)
    {
        $mensagem = "O seu saldo atual é de $saldo, logo não foi possível efetuar o saque de $valorASacar" . PHP_EOL;
        parent::__construct($mensagem);
    }
}