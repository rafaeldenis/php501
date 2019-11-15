<?php
class funcionario{

    public function oi(){
        echo "ola<br>";
    }
    public function __destruct(){

        echo "estou morrrendo finalmente";
    }

    public function __sleep(){

        return ['nome','cargo'];
    }
    public function __wakeup(){

        echo "Morri nao,pois estou aqui pegadinha do malandro <br>";
        $this->sobrenome = 'Atribuido com wakeup';
    }
}

$funcionario = new Funcionario;


$funcionario->nome = 'jOaquim jose';
$funcionario->sobrenome = 'da silva Xavier';
$funcionario->dataNascimento = '1746-11-12';
$funcionario->sexo = 'M';
$funcionario->cargo = 'cOVEIRO';
$funcionario->setor = 'FUNERARIO ';

echo "<pre>";
var_dump($funcionario);

echo serialize($funcionario);
$serializado = serialize($funcionario);

unset($funcionario);

$funcionario = unserialize($serializado);  

$funcionario->oi();

var_dump($funcionario);
?>