<?php
namespace App;

final class Fizzbuzz{
    function convertir ($numero){
        $condicionParaFizz= 3;
        $condicionParaBuzz= 5;
        $condicionParaFizzBuzz= 15;

        if ($condicionParaFizz % $numero !=0 AND $condicionParaBuzz % $numero !=0 AND $condicionParaFizzBuzz % $numero !=0){
            return $numero;
        }

        if ($condicionParaFizz % $numero==0){
            return 'Fizz';
        } 
        if ($condicionParaBuzz % $numero==0){
            return 'Buzz';
        } 

        if ($condicionParaFizzBuzz % $numero==0){
            return 'FizzBuzz';
        } 
    }
}

