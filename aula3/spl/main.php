<?php 
    function __autoload(string $class)
    {

        $arquivo = "classe/$class.php";
        require_once($arquivo);
    }

    $colecao = new PalavrasCollection;
    $colecao->addItem('PRIMEIRO');
    $colecao->addItem('SEGUNDO');
    $colecao->addItem('TERCEIRO');

    echo "ORDEm  DE iNCLUSAO: <br>";

    foreach($colecao->getIterator() as $item){

        echo "$item <BR>";
    }

?>