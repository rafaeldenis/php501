<?php

class Profissao
{
    public $salario;
    public $cargo;
    public $tempoDeCasa;
    
   


    
    public function __construct($cargo){
        echo $cargo . " CRiado com sucesso";
        

    }    

    public function __destruct()
    {

        echo "objeto sendo destruido";
    }
    
   
}
    


$pedreiro = new Profissao('Pedreiro');
echo '<br>';
var_dump($pedreiro);
unset($pedreiro);
var_dump($pedreiro);




?>