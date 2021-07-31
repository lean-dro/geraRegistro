<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/meuEstilo.css">
</head>
<?php
function criadorCpf(){

    $vetorCpf = array(
        random_int(1,9),
        random_int(1,9),
        random_int(1,9),
        random_int(1,9),
        random_int(1,9),
        random_int(1,9),
        random_int(1,9),
        random_int(1,9),
        random_int(1,9)
    );

$contador = 10;
    $soma1 = 0;

    for ($i=0; $i < 9; $i++) { 
        $soma1 = $soma1 + ($vetorCpf[$i] * $contador);
        $contador--;
    }
    
    $digito1 = ($soma1 % 11);

    if ($digito1<2) {
        $digito1 = 0;
    }else {
        $digito1 = 11-$digito1;
    }


    $contador = 11;
    $soma2 = 0;

    $vetorCpf[9] = $digito1;
    for ($i=0; $i < 10; $i++) { 
        $soma2 = $soma2 + ($vetorCpf[$i]*$contador);
        $contador--;
    }
    
    $digito2 = ($soma2 % 11);
    if ($digito2<2) {
        $digito2 = 0;
    }else {
        $digito2 = 11-$digito2;
    }

    $vetorCpf[10] = $digito2;

    for ($j=0; $j < 9; $j++) { 
        echo $vetorCpf[$j];
        if ($j==2 || $j==5) {
            echo ".";
        }
    }
    echo "-";
    for ($k=9; $k < 11; $k++) { 
        echo $vetorCpf[$k]; 
    }



//xxx.xxx.xxx-xx
}
?>
</html>
