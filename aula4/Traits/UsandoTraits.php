<?php 
require_once 'Operacoes.php';


class Calculadora
{

    use Operacoes;
    public function __construct(){
        echo "criando calculadora";
    }
}

$calc = new Calculadora;

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

if (isset($n1) && isset($n2)){

 echo $calc->somar($n1,$n2);
}

/*echo $calc->subtrair(10,5);
echo $calc->multiplicar(10,5);
echo $calc->dividir(10,5);*/
?>