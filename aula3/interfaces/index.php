<?php require_once 'classeinterface.php'; ?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta author='RAFAEL DENIS'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>COntato</title>
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card shadow">
            <div class="card-header bg-primary">
                <?= $objeto->getHtml('<h5 class="card-title">{nome}</h1>') ?>
            </div>  

            <div class="card-body">
                <?= $objeto->getHtml('<p class="card-text">{email}</p>') ?>
                <?= $objeto->getHtml('<p class="card-text">{telefone}</p>') ?>
                <?= $objeto->getHtml('<p class="card-text">{endereco}</p>') ?>
            
            </div>  
        </div>
        <div class="card-footer">
            <?= $objeto->getHtml('<p class="card-text">{final}</p>') ?>
        </div>
</div>

    
</body>
</html>