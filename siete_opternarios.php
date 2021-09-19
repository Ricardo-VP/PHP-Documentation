<?php
// -- Operadores ternarios --
echo "<h2> 7 - Operadores ternarios </h2>";
$v1 = 5;
$v2 = 5;
$res = $v1 > $v2 ? 'v1 mayor' : 'v2 mayor'; // ? if : else
$res2 = $v1 > $v2 ? 'mayor' : ($v1 < $v2 ? 'menor' : 'igual'); // () else if
echo "El valor de v1 es " . $res2 . " que v2";
echo "<br>";
?>
<a href="index.php"> Volver</a>