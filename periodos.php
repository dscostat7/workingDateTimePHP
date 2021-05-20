<?php

$inicio = new DateTime('21-11-2022');
$intervalo = new DateInterval('P4Y');

$periodo = new DatePeriod($inicio, $intervalo, 5);

foreach ($periodo as $data) {
    echo $data->format('d/m/Y') . PHP_EOL;
}