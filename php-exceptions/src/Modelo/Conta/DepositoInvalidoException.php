<?php


namespace Alura\Banco\Modelo\Conta;


use DomainException;

class DepositoInvalidoException extends DomainException
{

    public function __construct(float $valorDepositado)
    {
        $mensagem = "Você não pode depositar o valor: $valorDepositado" . PHP_EOL;
        parent::__construct($mensagem);
    }
}