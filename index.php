<?php
// index.php
require_once 'Bicycle.php';
require_once 'Cars.php';
require_once 'Truck.php';


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);



// Cars
$car = new Cars('green', 4, 'electric');
echo $car->forward();
var_dump($car);



$truck = new truck ('blue',4,'diesel',120);
var_dump($truck);
echo $truck->forward();
echo '<br> capacité du camion' . $truck->getCapacity() .'tonne' .'<br>';
echo '<br> chargement du camion' . $truck->getLoading() . 'tonne' .'<br>';
echo $truck->loading();
echo '<br> chargement : ' . $truck->getLoading() . 'tonne' . '<br>';
echo $truck->loading();

