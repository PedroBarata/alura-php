<?php

class MinhaExcecao extends RuntimeException
{
/*Na maioria dos casos, classes de exceção não possuem dados a mais*/
    function exibeTexto() {
        echo 'texto!';
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->exibeTexto();
}