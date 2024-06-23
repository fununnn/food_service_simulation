<?php

namespace Persons\Employees;

use FoodOrders\FoodOrder;

class Chef extends Employee {
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary) {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function prepareFood(FoodOrder $foodOrder) {
        foreach ($foodOrder->getItems() as $item) {
            echo $this->name . " was cooking " . $item->getName() . ".\n";
        }
        sleep(7); // Simulate cooking time
        echo $this->name . " took 7 minutes to cook.\n";
    }
}
