<?php
    // -- 14 - Arrays unidimensionales --
    echo "<h2> 14 - Arrays unidimensionales </h2>";

    $array = [10, 'Ricardo', 15, true];

    $array[] = 10; // Añadir un elemento al final del array
    $array[] = 13;
    $array[] = 14;
    $array[] = 20;
    $array[] = 17;
    echo $array[3];
    echo "<br>";

    $datos = [
        'nombre' => 'Ricardo',
        'email' => 'ricardovak22@gmail.com',
        'celular' => '1234556'
    ];

    echo $datos['nombre'];

    echo "<br>";
?>
<a href="index.php"> Volver</a>