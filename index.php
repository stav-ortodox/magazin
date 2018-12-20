<?php
require_once 'extends.php';

$monitorBenQ = new Monitor (10, 'BenQ', 10000, 1.5, 'Оргтехника', '27', 'IPS', '25');
$headPhonesSamsung = new HeadPhones (2, 'Samsung', 3000, 0.1, 'Аксессуары', '50', 'Проводные', '0');
$monitorAsus = new Monitor (3, 'Asus', 5000, 1.5, 'Оргтехника', '19', 'IPS', '0');
$monitorAcer = new Monitor (4, 'Acer', 6500, 1.5, 'Оргтехника', '17', 'IPS', '0');
$headPhonesPanasonic = new HeadPhones (5, 'Panasonic', 2700, 0.1, 'Аксессуары', '60', 'Безпроводные', '0');

echo "<pre>";
//echo $monitorBenQ->getFullInfo();
//echo $monitorBenQ->getInfo();
//
//echo $headPhonesSamsung->getFullInfo();
//echo $headPhonesSamsung->getInfo();
//
//echo $monitorAsus->getFullInfo();
//echo $monitorAsus->getInfo();
//
//echo $monitorAcer->getFullInfo();
//echo $monitorAcer->getInfo();
//
//echo $headPhonesPanasonic->getFullInfo();
//echo $headPhonesPanasonic->getInfo();

$arrayProducts = [$monitorBenQ->getArray(), $headPhonesSamsung->getArray(), $monitorAsus->getArray(), $monitorAcer->getArray(), $headPhonesPanasonic->getArray()];
foreach ($arrayProducts as $arrayProduct){
    echo $arrayProduct;
}

