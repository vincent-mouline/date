<?php

require 'src/TimeTravel.php';

$start = date('1985-12-31');
$end = date('1954-04-23');
$dolorean = new TimeTravel($start, $end);

echo $dolorean->getTravelInfo();

echo "\n";

$time = new DateInterval('PT1000000000S');
echo $dolorean->findDate($time);

echo "\n";

$past = new DateTime('1954-04-23 06:35');
$present = new DateTime('1985-10-26 06:35');
$interval = new DateInterval('P1M1W1D');
$step = new DatePeriod($past,$interval, $present);
$test = $dolorean->backToFutureStepByStep($step);
