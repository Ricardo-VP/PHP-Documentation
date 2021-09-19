<?php
    // -- 14.2 - Arrays multidimensionales --
    echo "<h2> 14.2 - Arrays multidimensionales </h2>";

    $data = [
        [
            'nombre' => 'Juan',
            'email' => 'juan@gmail.com',
            'telefono' => '123456789',
            'direccion' => [
                'pais' => 'España',
                'ciudad' => 'Madrid'
            ]
        ],
        [
            'nombre' => 'Pepe',
            'email' => 'pepe@gmail.com',
            'telefono' => '222222222',
        ],
        [
            'nombre' => 'Andrea',
            'email' => 'andrea@gmail.com',
            'telefono' => '333333333',
        ],
    ];

    echo $data[0]['nombre']; // Nombre del primer usuario
    echo "<br>";
    echo $data[0]['direccion']['pais']; // País del primer usuario
    echo "<br>";

    echo "<br>";
    foreach ($data as $item) {
        echo $item['nombre'] . " " . $item['email'] . " " . $item['telefono'] . "<br>";
    }

    echo "<br>";
?>
<a href="index.php"> Volver</a>