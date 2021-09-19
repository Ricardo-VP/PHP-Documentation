<?php
    // -- Break y continue --
    echo "<h2> 10 - Break y continue </h2>";
    for ($i=1; $i <= 20; $i++) { 
        // if($i == 11) {
        //     break;
        // }
        if($i == 7 || $i == 15){ // Ignora el numero 7 y el 15
            continue;
        }
        // if($i == 18){
        //     die(); // Termina el script
        // }
        echo $i . "<br>";
    }
    echo "Saliste del bucle";
    echo "<br>";
?>
<a href="index.php"> Volver</a>