<?php

namespace Persons\Customers;

use Persons\Person;
use Restaurants\Restaurant;
use Invoices\Invoice;

class Customer extends Person {
    private array $interestedTastes;

    public function __construct(string $name, int $age, string $address, array $interestedTastes) {
        parent::__construct($name, $age, $address);
        $this->interestedTastes = $interestedTastes;
    }

    public function interestedCategories(Restaurant $restaurant): array {
        $menu = $restaurant->getMenu();
        $categories = [];
        foreach ($menu as $item) {
            if (array_key_exists($item->getName(), $this->interestedTastes)) {
                $categories[$item->getName()] = $this->interestedTastes[$item->getName()];
            }
        }
        return $categories;
    }

    public function order(Restaurant $restaurant): Invoice {
        $categories = $this->interestedCategories($restaurant);
        $cashier = $restaurant->getCashier();
        return $cashier->generateOrder($categories, $restaurant);
    }
}
