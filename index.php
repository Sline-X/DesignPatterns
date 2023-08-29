<?php
require __DIR__ .'/vendor/autoload.php';

use Structural\Composite\Archer;
use Structural\Composite\Army;

$unit1 = new Archer();
echo '<pre>';
print_r($unit1);
echo '</pre>';
$unit2 = new LaserCannonUnit();
$army  = new Army();
$army->addUnit($unit1);
$army->addUnit($unit2);
print $army->bombardStrength();
