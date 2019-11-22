<?php

         $servidor = 'mysql:host=localhost;dbname=blog';
         $usuario = 'developer';
         $senha = '4linux';

        /*$this->servidor = $servidor;
        $this->usuario = $usuario;
        $this->senha = $senha;*/
        try {
            $conexao = new PDO($servidor,$usuario,$senha);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->beginTransaction();
            $res = $conexao->query('SELECT * FROM usuarios');

            var_dump($res);
            //$conexao->exec('INSERT INTO vendas VALUES ("X","Y")');
              //$res = $conexao->exec('DELETE FROM usuarios');
            //  echo "{$res}";
            //$conexao->exec('DELTE FROM usuarios');  
            $conexao->commit();
           

            
        } catch (PDOException $erro) {
            $conexao->rollBack();
            echo $erro;

        }




?>