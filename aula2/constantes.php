<?php

class Usuario{


    const STATUS_ATIVO = true;
    const STATUS_INATIVO = false;

    public $ativo = true;


   
 
}

$usuario = new Usuario();
// AQUI USUARIO ESTA ATIVO
var_dump($usuario->ativo === Usuario::STATUS_ATIVO);
// AQUI USUARIO ESTA INATIVO
var_dump($usuario->ativo === Usuario::STATUS_INATIVO);

$usuario->ativo = false;

// AQUI USUARIO ESTA ATIVO
var_dump($usuario->ativo === Usuario::STATUS_ATIVO);
// AQUI USUARIO ESTA INATIVO
var_dump($usuario->ativo === Usuario::STATUS_INATIVO);



?>