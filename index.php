<?php
    $x = 1;
    $sum = 0;
    $n = 3;

    for($i = 0; $i < $n; $i++)
        {
        $sum += $x;
        $x += 2;
        }
    echo 'La suma de los ',$n,' primeros numeros inpares es ',$sum ;
    echo '<hr>';
    $num1 = 7;
    $num2 = 10;
    $num3 = 5;
    
    if ($num1 > $num2) {
        if ($num1 > $num3) {
            echo $num1,'>';
            if ($num2 > $num3) {
                echo $num2,'>';
                echo $num3;
            } else {
                echo $num3,'>';  
                echo $num2;   
            }
        } else {
            echo $num3,'>'; 
            if ($num1 > $num2) {
                echo $num1,'>';
                echo $num2;
            } else {
                echo $num2,'>';  
                echo $num1;   
            }    
        }
    } 
    else{ 
        if ($num2 > $num3) {
            echo $num2,'>';
            if ($num1 > $num3) {
                echo $num1,'>';
                echo $num3;
            } else {
                echo $num3,'>';  
                echo $num1;   
            }
        } else {
            echo $num3,'>';
            if ($num1 > $num2) {
                echo $num1,'>';
                echo $num2;
            } else {
                echo $num2,'>';  
                echo $num1;   
            }    
        }
    }

    echo '<hr>';
    
    $numero = 9.888;
    $cifras = 0; 
    if(is_float($numero))
    {
        $cifras=strlen($numero)-1;
    }
    else
    {
        $cifras=strlen($numero);
    }
    echo 'El numero ',$numero,' tiene ',$cifras,' cifras';

    echo '<hr>';

    $sum = 0;
    echo 'Los 15 primeros números son: ';
    echo "0";
    for($i = 1; $i <= 15 ; $i++)
        {
            echo ',',$i;
            $sum += $i;
        }
    echo '<br>','La suma es ',$sum;
?>