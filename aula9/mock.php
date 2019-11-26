<?php


//use PHPUnit\Framework\TestCase;

class AlgumaClasse
{

    public function fazAlgo()
    {
        //FUNCAO A IMPLEMENTAR
    }

    public function retornaNumero()
    {
        //FUNCAO A IMPLEMENTAR
    }
}

class Mock extends TestCase
{
    public function  testMock()
    {
        $duble = $this->createMock(AlgumaClasse::class);

        $duble->method('FazAlgo')
        ->willReturn('foo');

        $this->assertSame('foo',$duble->fazAlgo(),"Nao fez algo");

        $duble->method('retornaNumero')
        ->willReturn(5);

        $this->assertEquals(5,$duble->retornaNumero());
    }
    

}


?>