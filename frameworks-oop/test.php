<?php

include 'Person.php';

$joeyS = new Person('Joey', 'Schmitz');
//$joeyS->firstname = 'Joey';
//$joeyS->lastname = 'Schmitz';

echo 'Hallo ' . $joeyS->getFullname() .  "\n\n";
