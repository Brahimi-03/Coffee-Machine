<?php

require_once __DIR__ . '/src/CoffeeMachine.php';

$machine = new CoffeeMachine();

// Quelques ventes
$machine->makeDrink('C', 1, 0.60);
$machine->makeDrink('T', 0, 0.40);
$machine->makeDrink('H', 2, 0.50);
$machine->makeDrink('O', 0, 0.60);

// Afficher le rapport
echo $machine->getReport();


?>