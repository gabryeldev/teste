<?php 
    // Arrays
    $siglas = ['ES','MG','RJ','SP'];
    $estados = ['São Paulo','Rio de Janeiro','Minas Gerais','Espírito Santo'];
    $count = (count($estados));

    // Percorrendo os valores e criando o terceito vetor
    foreach ($siglas as $s) {
        foreach ($estados as $e) {  
            if($s == "SP" && $e == "São Paulo"){
                $resultado[$s] = $e;
            }else if($s == "RJ" && $e == "Rio de Janeiro"){
                $resultado[$s] = $e;
            }else if($s == "MG" && $e == "Minas Gerais"){
                $resultado[$s] = $e;
            }else if($s == "ES" && $e == "Espírito Santo"){
                $resultado[$s] = $e;
            }
        }
    }
    
    // Imprimindo os valores do array gerado
    foreach($resultado as $r => $valor){
        echo nl2br($r.' - '.$valor."\n");

    }
?>