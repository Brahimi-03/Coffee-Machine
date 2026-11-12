<?php

class CoffeeMachine
{
    public function makeDrink($drink, $sugar)
    {
        if ($sugar > 0) {
            return $drink . ':' . $sugar . ':0';
        }

        return $drink . '::';
    }
}