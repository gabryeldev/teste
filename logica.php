<?php 
    // contador
    $i = 1; 
    $divisiveis = array();
    // laço de repetição
    while($i != 1000){

        // obtém o resto da divisão
        $r1 = $i % 3;
        $r2 = $i % 5;

        //verifica se foi divisível e atribui ao array
        if($r1 == 0){
            array_push($divisiveis, $i);
        }
        if($r2 == 0){
            array_push($divisiveis, $i);
        }
        $i++;
    }

    echo 'A soma de todos os números divisíveis por 3 ou 5 e menor que 1000 é: '.array_sum($divisiveis);
?>