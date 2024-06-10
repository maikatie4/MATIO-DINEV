<?php
$cars = array(
    array("carBrand" => "BMW", "color" => "black", "number" => 2),
    array("carBrand" => "Mercedes", "color" => "silver", "number" => 4),
    array("carBrand" => "Toyota", "color" => "blue", "number" => 6),
   
);

foreach ($cars as $car) {
    echo "carBrand: " . $car["carBrand"] . ", color: " . $car["color"] . ", number: " . $car["number"] . "<br>";
}
?>
