<?php
    // -- Operadores de asignacion combinada --
    echo "<h2> 5 - Operadores de asignacion combinada </h2>";
    $i = 10; // ++ Incrementa el valor -- Disminuye
    $j = ++$i; // Debe ubicarse el ++ o -- antes para cambiar el valor de i
    echo "El valor de i es: $i <br>";
    echo "El valor de j es: $j <br>";
    $e = 10;
    $f = 5;
    $e += $f; // += suma, -=  resta, *= multiplicacion, /= division y %= modulo
    echo $e;
    echo "<br>";
?>

<a href="index.php"> Volver</a>