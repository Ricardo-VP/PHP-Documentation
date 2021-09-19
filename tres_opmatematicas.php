<?php
    // -- Operaciones matematicas --
    echo "<h2>Operaciones matematicas</h2>";
    $a = 2;
    $b = 5;
    $c = $a + $b;
    echo "La suma de $a + $b es $c";
    $d = $a - $b;
    echo "<br>La resta de $a - $b es $d";
    $e = $a * $b;
    echo "<br>La multiplicacion de $a * $b es $e";
    $f = $a / $b;
    echo "<br>La division de $a / $b es $f";
    $g = $a % $b;
    echo "<br>El modulo de $a % $b es $g";
    $h = $a * $b;
    echo "<br>La potencia de $a ^ $b es $h";
    $i = pow($a, $b);
    echo "<br>La potencia de $a ^ $b es $i";
    $j = sqrt($a);
    echo "<br>La raiz cuadrada de $a es $j";
    $k = log($a);
    echo "<br>La logaritmo de $a es $k";
    $l = exp($a);
    echo "<br>La exponencial de $a es $l";
    $m = sin($a);
    echo "<br>La seno de $a es $m";
    $n = cos($a);
    echo "<br>La coseno de $a es $n";
    $o = tan($a);
    echo "<br>La tangente de $a es $o";
    $p = asin($a);
    echo "<br>La arcoseno de $a es $p";
    $q = acos($a);
    echo "<br>La arcocoseno de $a es $q";
    $r = atan($a);
    echo "<br>La arctangente de $a es $r";
    $s = sinh($a);
    echo "<br>La seno hiperbolico de $a es $s";
    $t = cosh($a);
    echo "<br>La coseno hiperbolico de $a es $t";
    $u = tanh($a);
    echo "<br>La tangente hiperbolico de $a es $u";
    $v = asinh($a);
    echo "<br>La arcoseno hiperbolico de $a es $v";
    $w = acosh($a);
    echo "<br>La arcocoseno hiperbolico de $a es $w";
    $x = atanh($a);
    echo "<br>La arctangente hiperbolico de $a es $x";

    // Orden de las operaciones matematicas
    $ordenOperaciones = 4 * 5 - 6 + 4 * 2 + 1 * 0;
    // 4 * 5 = 20
    // 20 - 6 = 14
    // 4 * 2 = 8
    // 1 * 0 = 0
    // 14 + 8 + 0 = 22
?>

<a href="index.php"> Volver</a>