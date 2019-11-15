<?php
trait Operacoes
{

    public function somar($n1, $n2)
    {
        return $n1 + $n2;

    }

    public function subtrair($n1, $n2)
    {
        return $n1 - $n2;

    }
    public function multiplicar($n1, $n2)
    {
        return $n1 * $n2;

    }
    public function dividir($n1, $n2)
    {
        return $n1 / $n2;

    }
}

trait A {

    public function a()
    {
        echo "Eu sou a funcao a  da trait a <br>";
    }
    public function b()
    {  
        echo "Eu sou b funcao a  da trait a <br>";    
    }
}

trait B {

    public function b()
    {
        echo "Eu sou a funcao b da trait b<br>";

    }
    public function c()
    { 
        
        echo "Eu sou a funcao c da trait b <br>";
    }
}

var_dump((new class{
    use A,B{
    B::b insteadOf A;
    A::a insteadOf B;
    B::a as mettodoAdaTraitB;
    }
})->mettodoAdaTraitB());

trait C {

    use A,B{
        B::b insteadOf A;
        A::a insteadOf B;
        B::a as mettodoAdaTraitB;
        }

}

var_dump(
    (new class{
    use C;
})->mettodoAdaTraitB());