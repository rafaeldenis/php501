<?php 

$servidor = 'mysql:host=localhost;dbname=blog';
$usuario = 'developer';
$senha = '4linux';

try{
     $conexao = new PDO($servidor,$usuario,$senha);
     echo '<pre>';
     echo "CONEXAO SUCESSO </br>";

     $res = $conexao->query('SELECT * FROM usuarios');

     //var_dump($conexao);
     foreach($res as $linha){
         
         print_r($linha);

     }
     $conexao = null;
}catch(PDOException $e){
    echo "ERRO {$e->getMessage()}</br>";
}

?>