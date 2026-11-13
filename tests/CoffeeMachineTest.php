<?php

require_once __DIR__ . '/../src/CoffeeMachine.php';

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

    //  préparation de la deuxiéme itération

    public function testInsufficientMoney()
    {
    $machine = new CoffeeMachine();

    $result = $machine->makeDrink('C', 0, 0.30);

    $this->assertEquals('M:Il manque 0.30€', $result);
    }

    public function testReturnChange()
    {
    $machine = new CoffeeMachine();

    $result = $machine->makeDrink('C', 0, 1.00);

    $this->assertEquals(
        "C::\nM:Monnaie rendue : 0.40€",
        $result
    );
    }

    public function testPrepareOrangeJuice()
    {
    $machine = new CoffeeMachine();

    $result = $machine->makeDrink('O', 0, 0.60);

    $this->assertEquals('O::', $result);
    }

    // preparation des boisons extra chaudes

    public function testPrepareExtraHotCoffee()
    {
    $machine = new CoffeeMachine();

    $result = $machine->makeDrink('Ch', 0, 0.60);

    $this->assertEquals('Ch::', $result);
    }

    public function testPrepareExtraHotChocolate()
    {
    $machine = new CoffeeMachine();

    $result = $machine->makeDrink('Hh', 0, 0.50);

    $this->assertEquals('Hh::', $result);
    }

    public function testPrepareExtraHotTea()
    {
    $machine = new CoffeeMachine();

    $result = $machine->makeDrink('Th', 0, 0.40);

    $this->assertEquals('Th::', $result);
    }

    public function testCountSoldDrinks()
    {
    $machine = new CoffeeMachine();

    $machine->makeDrink('C', 0, 0.60);
    $machine->makeDrink('T', 0, 0.40);
    $machine->makeDrink('T', 0, 0.40);

    $report = $machine->getReport();

    $this->assertStringContainsString('Cafés vendus : 1', $report);
    $this->assertStringContainsString('Thés vendus : 2', $report);
    }

    // payement superieure au prix
    public function testRevenueWithExtraPayment()
    {
    $machine = new CoffeeMachine();

    // Le café coûte 0,60 €, le client donne 1 €
    $machine->makeDrink('C', 0, 1.00);

    $report = $machine->getReport();

    $this->assertStringContainsString(
        'Recettes totales : 0.60 €',
        $report
    );
    }

     // payement insuffisant au prix
    public function testNoRevenueWithInsufficientPayment()
    {
    $machine = new CoffeeMachine();

    // Le café coûte 0,60 €, le client donne 0,30 €
    $machine->makeDrink('C', 0, 0.30);

    $report = $machine->getReport();

    $this->assertStringContainsString(
        'Cafés vendus : 0',
        $report
    );

    $this->assertStringContainsString(
        'Recettes totales : 0.00 €',
        $report
    );
    }

    public function testCalculateTotalRevenue()
    {
    $machine = new CoffeeMachine();

    // Trois boissons vendues
    $machine->makeDrink('C', 0, 0.60); // Café : 0,60 €
    $machine->makeDrink('T', 0, 0.40); // Thé : 0,40 €
    $machine->makeDrink('H', 0, 0.50); // Chocolat : 0,50 €

    $report = $machine->getReport();

    // Total attendu : 1,50 €
    $this->assertStringContainsString(
        'Recettes totales : 1.50 €',
        $report
    );
    }



}
