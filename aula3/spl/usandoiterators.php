<?php
class PalavrasCollection implements IteratorAggregate
{

    private $itens = [];

    public function getItens() : array{

        return $this->itens;
    }
    public function addtens(string $item) 
    {
        $this->itens[] = $itens;
    }
    public function getIterator(): Iterator
    {
       return new OrdemAlfabeticaIterator($this);
    }
    public function getReverseIterator(): getIterator
    {
       return new OrdemAlfabeticaIterator($this, true);
    }
}


?>