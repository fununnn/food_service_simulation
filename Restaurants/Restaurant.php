<?php

namespace Restaurants;

use FoodItems\FoodItem;
use Persons\Employees\Chef;
use Persons\Employees\Cashier;
use Invoices\Invoice;

class Restaurant {
    private array $menu;
    private array $employees;

    public function __construct(array $menu, array $employees) {
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function getMenu(): array {
        return $this->menu;
    }

    public function getChef(): Chef {
        foreach ($this->employees as $employee) {
            if ($employee instanceof Chef) {
                return $employee;
            }
        }
        throw new \Exception("No chef available in the restaurant.");
    }

    public function getCashier(): Cashier {
        foreach ($this->employees as $employee) {
            if ($employee instanceof Cashier) {
                return $employee;
            }
        }
        throw new \Exception("No cashier available in the restaurant.");
    }
}
