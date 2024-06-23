<?php

namespace Persons\Employees;

use FoodOrders\FoodOrder;
use Restaurants\Restaurant;
use Invoices\Invoice;

class Cashier extends Employee {
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary) {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function generateOrder(array $categories, Restaurant $restaurant): Invoice {
        $items = [];
        $menu = $restaurant->getMenu();
        foreach ($menu as $item) {
            if (array_key_exists($item->getName(), $categories)) {
                for ($i = 0; $i < $categories[$item->getName()]; $i++) {
                    $items[] = $item;
                }
            }
        }

        $foodOrder = new FoodOrder($items);
        $chef = $restaurant->getChef();
        $chef->prepareFood($foodOrder);

        echo $this->name . " received the order.\n";
        echo $this->name . " made the invoice.\n";

        $timestamp = new \FoodOrders\Timestamp();
        return new Invoice($foodOrder->getTotalPrice(), $timestamp, 7);
    }
}
