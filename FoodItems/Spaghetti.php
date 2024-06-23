<?php

namespace FoodItems;

class Spaghetti extends FoodItem {
    private const CATEGORY = 'Pasta';

    public function __construct() {
        parent::__construct('Spaghetti', 'Traditional spaghetti bolognese', 10.99);
    }

    public static function getCategory(): string {
        return self::CATEGORY;
    }
}
