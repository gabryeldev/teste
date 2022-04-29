<?php 
    // contador
    $i = 1; 
    
    // laço de repetição
    $result = 'procurando';
    while($result == 'procurando'){

        // obtém o resto da divisão
        $r1 = $i % 2;
        $r2 = $i % 3;
        $r3 = $i % 10;

        // verifica se o resto da divisão por 2,3,10 é igual a 0 e pausa o laço de repetição
        if($r1 == 0 && $r2 == 0 && $r3 == 0){
            break;
        }

        // incrementa 1 valor ao contador
        $i++;
    }
    
    // impressão do resultado
    echo "O menor número inteiro divisível por 2, 3 e 10 ao mesmo tempo é ".$i;
?>