<?php

$hoje = date('d/m/y');
$agora = date('H:i');

echo $hoje . PHP_EOL;
echo $agora . PHP_EOL;

$hoje1 = new DateTime('now');

echo $hoje1->format('H:i') . PHP_EOL;