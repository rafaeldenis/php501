<?php
class TrataExcessoes{
    
    public function mensagem(int $msg): int
    {
        if(empty($msg)){
            throw new Exception("Parametro mensagem obrigatorio", 500);         
            
        }
        return $msg;
    }


}


$obj = new TrataExcessoes;


//echo $obj->mensagem('OLA MUNDO');

//echo $obj->mensagem('');


try{
    echo $obj->mensagem('ola');

}catch (Exception $e){
    echo "mensagem obrigatorio";
}catch (ArgumentCountError $e){
    echo "Falta parametros";
}
catch (TypeError $e){
    echo "COnfira o tipo de variavel:{$e}";
}
 finally {
    echo "</br>FIM DA EXECUCAO";
}

?>