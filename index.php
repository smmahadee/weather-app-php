<?php

use App\Weather\RandomWeatherFetcher;

require __DIR__ . '/inc/all.inc.php';

$fetcher = new RandomWeatherFetcher();
$info = $fetcher->fetch("Dhaka"); 

// var_dump($info);

require __DIR__ . '/views/index.view.php';  

?>