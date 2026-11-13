<?php

class CoffeeMachine
{
    private $sales = [
    'C' => 0,
    'T' => 0,
    'H' => 0,
    'O' => 0
    ];

    private $totalRevenue = 0;

  public function makeDrink($drink, $sugar, $money = null)

    {
        $prices = [
            'T' => 0.40,
            'C' => 0.60,
            'H' => 0.50,
            'O' => 0.60,
            'Ch' => 0.60,
            'Hh' => 0.50,
            'Th' => 0.40
        ];

        // Vérifier si le paiement est insuffisant
        if ($money !== null && $money < $prices[$drink]) {
            $missing = $prices[$drink] - $money;

            return 'M:Il manque ' . number_format($missing, 2) . '€';
        }

        // Préparer la boisson
        if ($sugar > 0) {
            $result = $drink . ':' . $sugar . ':0';
        } else {
            $result = $drink . '::';
        }

        // Rendre la monnaie si le client a trop payé
        if ($money !== null && $money > $prices[$drink]) {
            $change = $money - $prices[$drink];

            $result .= "\nM:Monnaie rendue : " . number_format($change, 2) . "€";
        }

        $saleType = str_replace('h', '', $drink);

        $this->sales[$saleType]++;
        $this->totalRevenue += $prices[$drink];

        return $result;
    }

    public function getReport()
    {
    return "Cafés vendus : " . $this->sales['C'] . "\n"
        . "Thés vendus : " . $this->sales['T'] . "\n"
        . "Chocolats vendus : " . $this->sales['H'] . "\n"
        . "Jus d'orange vendus : " . $this->sales['O'] . "\n"
        . "Recettes totales : " . number_format($this->totalRevenue, 2) . " €";
    }
 
}
