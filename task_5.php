<?php

$bmw = ['model' => 'X5', 'speed' => '120', 'doors' => '5', 'year' => '2015' ];
$toyota = ['model' => 'Rav4', 'speed' => '110', 'doors' => '4', 'year' => '2010' ];
$opel = ['model' => 'Corsa', 'speed' => '100', 'doors' => '3', 'year' => '2008' ];

$cars = [
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
];

//echo 'Car bmw' , "<br>" . $cars[1][1];
//echo 'Car toyota' , "<br>" . $cars[$toyota];
//echo 'Car opel' , "<br>" . $cars[$opel];

foreach ($cars as $car => $value ) {
    echo "<br> Car " . $car . "<br>";
    foreach ($value as $model => $name ) {
        echo $name . " ";
    }
}