<?php

//parametros para conexao
$servidor = 'mysql:host=localhost;dbname=blog';
$usuario = 'developer';
$senha = '4linux';
//teste de conexao
try {
    //cursor de conexão
    $conexao = new PDO($servidor, $usuario, $senha);
    $res = $conexao->query('SELECT * FROM usuarios');
    // traz todos resultados = fetchAll
    var_dump($res->fetchAll(PDO::FETCH_ASSOC));
     
} catch (PDOException $erro) {
    echo $erro;
}
