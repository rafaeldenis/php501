<?php
require_once ('interface.php');
class Template implements iTemplate
{

    private $vars = array();
    public function setVariable(string $nome, $var){

       $this->vars[$nome] = $var;
    }
    public function getHtml($template) : string
    {

       foreach($this->vars as $nome => $value){
            $template = str_replace('{'.$nome . '}',$value ,$template);
        }
        return $template;
    }




}

$objeto =  new Template();

$objeto->setVariable('nome','Philadelpha');
$objeto->setVariable('email','dadfafhajsfha@com.br');
$objeto->setVariable('telefone','11 989797979799');
$objeto->setVariable('endereco','RUA DA CONSOLACAO 777');
$objeto->setVariable('final','FINALdddddd');
?>