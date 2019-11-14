<?php 

    class MinhaClasse
    {


        public  function __construc()
        {
           
        
        }
        public  function MeuPublico(){
            
        }
        public  function MeuProtegido(){
            
        }
        public  function MeuPrivado(){
           
        }

// Quando n'ao passo visibilidade -> public
        function foo()
        {

            $this->meuPublico();
            $this->MeuProtegido();
            $this->MeuPrivado();
            
        }
    }


    $obj = new MinhaClasse();
    $obj->MeuPublico();
    $obj->MeuPrivado();
    $obj->MeuProtegido();
    $obj->foo();
    
    class MinhaClasse2 extends MinhaClasse
    {

        Function foo2()
        {

            $this->meuPublico();
            $this->MeuProtegido();
            $this->MeuPrivado();
            
        }

    }

    $obj2 = new MinhaClasse2();
    //$obj2->MeuPublico();
    //$obj2->MeuPrivado();
    //$obj2->MeuProtegido();
    $obj2->foo2();

?>