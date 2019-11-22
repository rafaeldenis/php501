<?php

         $servidor = 'mysql:host=localhost;dbname=blog';
         $usuario = 'developer';
         $senha = '4linux';

        /*$this->servidor = $servidor;
        $this->usuario = $usuario;
        $this->senha = $senha;*/
        try {
            $conexao = new PDO($servidor,$usuario,$senha);
            $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //$count = $conexao->exec("DELETE FROM usuarios ");
            $res = $conexao->query('SELECT * FROM usuarios');
            foreach ($res as $usuario){
                echo "Nome:" . $usuario['nome']. "";
                echo "Email:" . $usuario['email']. "</br>";

            }

            //echo "$count linhas apagadas";


            //$this->conexao = $conexao;
            //return $this->conexao;
        } catch (PDOException $erro) {
            

        }




?>