<?php

require_once __DIR__ . '/../src/cafemachine.php';

use PHPUnit\Framework\TestCase;

class CoffeeMachineTest extends TestCase
{
    public function testPrepareTea()
    {
        $machine = new CoffeeMachine();

        $result = $machine->makeDrink('T', 1);

        $this->assertEquals('T:1:0', $result);
    }

    public function testPrepareCoffee()
    {
        $machine = new CoffeeMachine();

        $result = $machine->makeDrink('C', 2);

        $this->assertEquals('C:2:0', $result);
    }

    public function testPrepareChocolate()
    {
        $machine = new CoffeeMachine();

        $result = $machine->makeDrink('H', 0);

        $this->assertEquals('H::', $result);
    }
}