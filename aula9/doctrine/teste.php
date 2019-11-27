<?php

require_once "bootstrap.php";


use Curso\Loja\Entidades\Produto;


$produtos = [

    ['nome'=> 'Tv', 'preco'=> 2500],
    ['nome'=> 'Sound bar', 'preco'=> 650],
    ['nome'=> 'Suporte Tv', 'preco'=> 125]

];


foreach($produtos as $produto){

    $dbProduto = new Produto();

    $dbProduto->setNome($produto['nome']);
    $dbProduto->setPreco($produto['preco']);

    $entityManager->persist($dbProduto);
}
$dbProduto->setName('teste')->where(2);
$entityManager->flush();


/*$produtoRepository = $entityManager
        ->getRepository('Curso\Loja\Entidades\Produto');


$produto = $produtoRepository->find(2);

$produto->setName('Teste');*/

//$entityManager->remove($produto);
//$entityManager->flush();

//$produto = $produtoRepository->find(3);

//var_dump ($produto);

//echo "{$produto->getId()}";



?>