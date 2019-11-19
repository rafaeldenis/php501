<?php

require_once "objetoInterface";

class Exercicio implements objeto
{

    public function __toString(){
        echo "EStou sendo string";
    }

    public function __invoke(){
        echo "EStou sendo chamado"; 
    }  
  
    public function __set($parametro, $valor){
        echo "Atribuindo a variavel {$parametros} {$valor}";   
    }
    
    public function __get($parametro){
        echo "Acessando o atributo {$parametro}";   
    }
    
    public function __call($metodo, $valores){
        echo "chamando {$metodo}"; 
        //return $this->$metodo();  
    }
    
    public static function metodoStatic($metodo, $valores){
        echo "chamando {$metodo}";    
    }
    
    public function metodo(){
        echo  "nao funciona";   
    }


}

$obj = new Exercicio();

//echo $obj

?>