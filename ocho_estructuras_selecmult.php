<?php
    // -- Estructuras de seleccion multiple --
    echo "<h2> 8 - Estructuras de seleccion multiple </h2>";
    $numdia = 13;
    /*switch ($numdia) { // Estructura switch
            case '1':
                echo 'Lunes';
                break;
            case '2':
                echo 'Martes';
                break;
            case '3':
                echo 'Miercoles';
                break;
            case '4':
                echo 'Jueves';
                break;  
            case '5':
                echo 'Viernes';
                break;      
            case '6':
                echo 'Sabado';
                break;
            case '7':
                echo 'Domingo';
                break; 
            default:
                echo 'Numero de dia incorrecto';
                break;
        }*/
    $numdia = 13;
    echo $numdia;
    echo '<br>';
    echo match($numdia){ // match solo esta en php 8+
        1 => "Lunes",
        2 => "Martes",
        3 => "Miercoles",
        4 => "Jueves",
        5 => "Viernes",
        6 => "Sabado",
        7 => "Domingo",
        default => "Numero de dia incorrecto" // Default 
    };
    echo '<br>';
?>
<a href="index.php"> Volver</a>