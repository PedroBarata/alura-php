<?php

$numeros = [1,2,3,4,5];

/* Para adicionarmos um novo valor ao array, podemos fazer de duas formas: */

$numeros[count($numeros)] = 6; //Numero no indice do tamanho do array, recebe 6;

$numeros[] = 7; //O PHP já adiciona no ultimo indice;

foreach($numeros as $numero) {
    echo $numero . PHP_EOL;
}