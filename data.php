<?php

$hoje = date('d/m/y');
$agora = date('H:i');

echo $hoje . PHP_EOL;
echo $agora . PHP_EOL;

$hoje1 = new DateTime('now');

$maisUmDia = new DateInterval('P1D');

$hoje2 = new DateTimeImmutable();

$amanha = $hoje2->add($maisUmDia);

echo $hoje2->format('d/m') . PHP_EOL;
echo $amanha->format('d/m') . PHP_EOL;


echo $hoje1->format('H:i') . PHP_EOL;