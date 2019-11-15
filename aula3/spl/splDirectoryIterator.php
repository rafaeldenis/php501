<?php 
echo "<pre>";
//percorrer diretorios no php DirectoryIterator 
foreach (new DirectoryIterator('/') as $diretorio){
    
    echo "$diretorio<br>";
    echo gettype($diretorio);
    
    $subpasta = new DirectoryIterator('/');
    var_dump($subpasta);
    /*foreach (new DirectoryIterator("./" .$diretorio) as $subpasta){
        echo "---------$subpasta<br>";
    }  */  
}
echo gettype(new DirectoryIterator('/'));




?>