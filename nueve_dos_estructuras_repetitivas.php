<?php
    // -- Estructuras de repeticion (for y for each) --
    echo "<h2> 9.2 - Estructuras de repeticion (for y for each) </h2>";
    // *
    // **
    // ***
    echo "Ejemplo con for: <br>";
    $filas = 3;
    for ($i = 1; $i <= $filas; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";
    echo "Ejemplo con for each: ";
    $nombres = ['Victor', 'Juan', 'Pedro'];
    echo "<br>";
    foreach ($nombres as $indice => $nombre) {
        echo $indice . ". " . $nombre . "<br>";
    }
?>
<a href="index.php"> Volver</a>