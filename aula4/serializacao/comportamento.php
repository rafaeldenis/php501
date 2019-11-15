<?php

class VirarString{

    public function __construct($mensagem)
    {
        $this->foo = $mensagem;
    }
    public function __toString(){

        return 'E A IRMAO...QUERO VIRAR STRING NAO';
    }

    public function __invoke(){

        echo '<br>4 DIASS DE CURSO E NAO APARENDEU AINDA';
    }
}

$obj = new VirarString('oIiiiii');

echo $obj;

$obj(34);
?>