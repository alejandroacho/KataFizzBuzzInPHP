<?php
use PHPUnit\Framework\TestCase;
use App\Fizzbuzz;

final class FizzbuzzTest extends TestCase
{
    public function testNoneCondition (){
        $conditionNone = 2;
        $numero = $conditionNone;

        $conversora = new Fizzbuzz();
        $resultado = $conversora->convertir($numero);


        $this->assertEquals($numero, $resultado);
    }

    public function testFizzCondition(){
        $conditionFizz = 3;
        $numero = $conditionFizz;

        $conversora = new Fizzbuzz();
        $resultado = $conversora->convertir($numero);


        $this->assertSame('Fizz', $resultado);
    }
    
    public function testBuzzCondition(){
        $conditionBuzz = 5;
        $numero = $conditionBuzz;

        $conversora = new Fizzbuzz();
        $resultado = $conversora->convertir($numero);


        $this->assertSame('Buzz', $resultado);
    }

    public function testFizzBuzzCondition (){
        $conditionFizzBuzz = 15;
        $numero = $conditionFizzBuzz;

        $conversora = new Fizzbuzz();
        $resultado = $conversora->convertir($numero);


        $this->assertSame('FizzBuzz', $resultado);
    }
}