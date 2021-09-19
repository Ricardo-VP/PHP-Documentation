<?php
    // -- Estructuras de repeticion (while y do while) --
    echo "<h2> 9.1 - Estructuras de repeticion (while y do while) </h2>";
    $i = 8;
    echo  "Ejemplo de while: <br>";
    while($i <= 10){
        echo $i. ". Hola mundo <br>";
        $i++;
    }
    echo "<br>";
    echo "Ejemplo de do while: <br>";
    do{
        echo $i. ". Hola mundo <br>";
        $i++;
    }while($i < 10);
    echo 'Has salido del bloque';
    echo "<br>";

    $base = 2;
    $exp = 5;

    $resultado = 1;
    $i = 1;
    echo "<br>";
    echo "Ejemplo de base y exponente con while: ";
    echo "<br>";
    while($i <= $exp){
        $resultado *= $base;
        $i++;
    }
    echo "El valor de $base elevado a $exp es: $resultado";
    echo "<br>";
?>
<a href="index.php"> Volver</a>