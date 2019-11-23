<?php
//require_once 'Calculadora';

require_once '.vendor/phpunit/phpunit/tests/unit/Framework/TestCaseTest.php';
require_once 'Calculadora.php';
use PHPUnit\Framework\TestCase;


class CalculadoraTest extends TestCase
{
    public function testSomar(){   //assertEquals(4,$resultadoSoma,'Erro na Soma');

        $operacoes = new Calculadora();
        $resultadoSoma = somar(1,3);
        $this->assertEquals(4,$resultadoSoma,'Erri na soma');
    }
 

}



?>