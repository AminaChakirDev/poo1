<?php

require_once ("Bicycle.php");

//$bike = new Bicycle("blue", 1);

//var_dump($bike);




//require_once ("Car.php");

//INSTANCIATION D'UN OBJET
//$suv = new Car("black", 4, "gazoil");
//var_dump($suv);

//echo $suv->forward();
//echo '<br> Vitesse du suv : ' . $suv->getCurrentSpeed() . ' km/h' . '<br>';
//echo $suv->brake();
//echo '<br> Vitesse du suv : ' . $suv->getCurrentSpeed() . ' km/h' . '<br>';
//echo $suv->brake();

//$bicycle = new Bicycle('blue', 1);
//echo $bicycle->forward();
//var_dump($bicycle);

//$car = new Car('green', 4, 'electric');
//echo $car->forward();
//var_dump($car);


require_once ("Truck.php");

//INSTANCIATION D'UN OBJET
$renault = new Truck(90,"black",3,"gazoil");
var_dump($renault);

$renault->setLoading(0);

//PREMIERE METHODE : AUGMENTATION AUTOMATIQUE DU CHARGEMENT (VIA LA METHODE FILL)
echo $renault->fill();

//DEUXIEME METHODE : AUGMENTATION MANUELLE DU CHARGEMENT (VIA LA METHODE SETLOADING)
//echo '<br> Volume du chargement : ' . $renault->getLoading() . ' Tonnes' . '<br>';
//echo $renault->checkVolume();
//$renault->setLoading(45);
//echo '<br> Volume du chargement : ' . $renault->getLoading() . ' Tonnes' . '<br>';
//echo $renault->checkVolume();
//$renault->setLoading(90);
//echo '<br> Volume du chargement : ' . $renault->getLoading() . ' Tonnes' . '<br>';
//echo $renault->checkVolume();

