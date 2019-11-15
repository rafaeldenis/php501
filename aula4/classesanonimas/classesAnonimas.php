<?php
//class $nomeClasse{}
interface  SomeInterface{}
trait SomeTrait{}
var_dump(new class(10) extends SomeClass implements SomeInterface{

    private $num;
    
    public function __construc($num)
    {
        $this->num=$num;
    }

});


?>