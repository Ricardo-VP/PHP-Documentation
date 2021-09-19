<?php
    // -- 13 - Cadena de caracteres --
    echo "<h2> 13 - Cadena de caracteres </h2>";

    $cadena = "aeiou ";

    echo "Cadena: $cadena <br>";
    echo "Indice 1 : " . $cadena[1]; // Imprime la letra "e"
    echo "<br>";
    echo "Tamaño de la cadena: " . strlen($cadena); // Imprime 6, el tamaño de la cadena
    echo "<br>";
    //echo mb_strlen($cadena); // Imprime 6, el tamaño de la cadena
    echo "Posicion de la letra i: " . strpos($cadena, "i"); // Imprime la posición de la letra "i"
    echo "<br>";


    $cadena2 = "Hola mundo como estas";
    echo "<br>";
    echo "Cadena 2: $cadena2 <br>";
    echo str_contains($cadena2, "mundo") ? "Si se encuentra 'mundo'" : "No se encuentra"; // Imprime "Si se encuentra"
    echo "<br>";
    echo str_starts_with($cadena2, "Mundo") ? "Si empieza con mundo" : "No empieza con mundo"; // No empieza
    echo "<br>";
    echo str_ends_with($cadena2, "estas") ? "Si termina con 'estas'" : "No termina con 'estas'"; // Si termina

    $a = "Prueba";
    $b = "prueba";
    echo "<br>";
    echo "<br> Cadena a: $a <br>";
    echo "Cadena b: $b <br>";
    if(strcmp($a, $b) == 0) {
        echo ("Son iguales");
    }else{
        echo ("No son iguales");
    }
    echo "<br>";
    if(strcasecmp($a, $b) == 0) {
        echo ("Son iguales sin importar mayusculas o minisculas");
    }else{
        echo ("No son iguales");
    }
    echo "<br>";

    echo "<br>";
    $string = "Hola mundo";
    echo "Cadena: $string <br>";
    echo substr($string, 4); // Empieza desde la posición 2
    echo "<br>";
    echo substr($string, 5, 2); // Empieza desde la posición 4 con longitud 2
    echo "<br>";
    echo substr($string, -2); // Imprime los últimos 2 caracteres
    echo "<br>";
    echo str_replace("mundo", "editado", $string); // Reemplaza la palabra "mundo" por "editado"
    echo "<br>";
    echo strtolower($string); // Convierte a minúsculas
    echo "<br>";
    echo strtoupper($string); // Convierte a mayúsculas
    echo "<br>";
    echo str_repeat($string, 2); // Repite la cadena 2 veces
    echo "<br>";
    echo ucfirst($string); // Pone en mayúscula la primera letra
    echo "<br>";
    echo ucwords($string); // Pone en mayúscula la primera letra de cada palabra

    echo "<br>";
?>
<a href="index.php"> Volver</a>