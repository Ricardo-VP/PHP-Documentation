<?php
    // -- 14.3 - Arrays funciones --
    echo "<h2> 14.3 - Arrays funciones </h2>";

    $array = [1,2,3];

    // $a = $array[0];
    // $b = $array[1];
    // $c = $array[2];
    list($a, $b, $c) = $array; // list() es una función que permite asignar variables a un array
    echo "a = $a, b = $b, c = $c";
    echo "<br>";

    $array = range(1,10); // range() es una función que permite crear un array con un rango de números
    var_dump($array);
    echo "<br>";
    echo count($array); // count() es una función que permite contar el número de elementos de un array
    echo "<br>";

    echo "<br>";
    $array = ['Victor', 'Juan', 'Pedro'];
    // in_array() es una función que permite saber si un elemento está en un array
    unset($array[0]); // unset() es una función que permite eliminar un elemento de un array
    if (in_array('Victor', $array)) { 
        echo "El nombre está en el array"; // in_array() devuelve true o false
    } else {
        echo "El nombre no está en el array";
    }
    echo "<br>";

    
    
    echo "<br>";
    ?>
<a href="index.php"> Volver</a>