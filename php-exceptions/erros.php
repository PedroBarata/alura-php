<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
   var_dump($errno, $errstr, $errfile, $errline);
   switch ($errno){
       case E_WARNING:
           echo 'teste';
           break;
       case E_ERROR:
           echo 'error!';
           break;

   }


   return true;
});

echo $variavel;

echo $array[12];