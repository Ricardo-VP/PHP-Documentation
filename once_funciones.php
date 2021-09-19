<?php
    // -- Funciones --
    echo "<h2> 11 - Funciones </h2>";
    echo "Raiz cuadrada de 9 : " . sqrt(9) . "<br>";
    echo "Numero aleatoria entre 90 y 100" . rand(90, 100) . "<br>";
    echo "Numero pi: " . pi() . "<br>";
    echo "<br>";

    // Funcion para calcular un factorial   
    function factorial($numero) {
        $factorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $factorial = $factorial * $i;
        }
        return $factorial;
    }
    echo "Factorial de 6: " . factorial(6) . "<br>";
?>
<a href="index.php"> Volver</a>