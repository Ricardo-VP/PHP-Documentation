<?php
    // -- Ambito de variables --
    echo "<h2> 12 - Ambito de las variables </h2>";

    $a = 5;
    $b = 10;

    function test(&$num){ // & antes del parametro es para que sea una referencia
        // global $a;
        // echo $a; // Imprime 5
        $num = $num + 10;
        return $num;
    }
    test($a);
    test($b);

    echo $a . "<br>";
    echo $b . "<br>";

    echo "<br>";
?>
<a href="index.php"> Volver</a>