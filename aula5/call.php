<?php
class TesteMetodo
{
    function __call(string $metodo, array $args) : string
    {

        if(method_exists(__CLASS__,$metodo))
        {
            echo "CHAMANDO O METODO {$metodo}";
            return $this->$metodo(implode($args));

        }else{

            echo "NAO  foi possivel acessar {$metodo} </br>";
            echo "verifique se o mesmo existe";
        }


        function __callStatic(string $metodo, array $args) : string
        {
    
            if(method_exists(__CLASS__,$metodo))
            {
                echo "CHAMANDO O METODO {$metodo}";
                return self::$metodo(implode($args));
    
            }else{
    
                echo "NAO  foi possivel acessar {$metodo} </br>";
                echo "verifique se o mesmo existe";
            } 
        }
       
        


    }
}

$obj = new TesteMetodo();

$obj->mostraMensagem();

TesteMetodo::mostraMensagem();

?>