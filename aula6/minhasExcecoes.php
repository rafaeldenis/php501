<?php 

class MinhaExcessao extends Exception
{
    public function __construct($mensagem,$code = 0, Exception $previous = null)
    { 
        parent::__construct($mensagem, $code, $previous);

    } 

    public function __toString(){

        return __CLASS__ . ":[{$this->]}:{$this->message}\n";
    }

    public function customFunction()
    {

    }


}



class TesteException
{


    public function mensagem(string $msg): string
    {
        if(empty($msg)){
            throw new MinhaExcessao('PARAMETRO MENSAGEM OBRIGATORIA',500);
        }
    }
}

$teste = new TesteException;

try{
    echo $teste->mensagem('SOFTWARE LIVRE NAO FUNCIONA');
}catch(MinhaExcessao $e){
    echo "olha ela aqui ->:", $e;
    $e->customFunction();
}




?>