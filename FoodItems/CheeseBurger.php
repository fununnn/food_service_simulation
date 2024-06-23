<?php

namespace FoodItems;

class CheeseBurger extends FoodItem {
    private const CATEGORY = 'Burger';

    public function __construct() {
        parent::__construct('Cheese Burger', 'Classic cheeseburger', 9.99);
    }

    public static function getCategory(): string {
        return self::CATEGORY;
    }
}
