<?php
/**  
 *  Classe, metodos e atributos
 */    


class NomeDaClasse{

    /** 
     *Atributos 
    */

    public $atributo1;

    private $atributo2;

    protected $atributo3;


    const ATRIBUTOCONSTANTE = 'x';

    /**
     * Metodos    * 
     
     */

    public function metodoDaClasse(){
        echo "SOu um metodooo!!!!";  

    }



}
// Instancia de um objeto 
$objeto = new NomeDaClasse();


$objeto->metodoDaClasse();










?>