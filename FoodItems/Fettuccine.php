<?php

namespace FoodItems;

class Fettuccine extends FoodItem {
    private const CATEGORY = 'Pasta';

    public function __construct() {
        parent::__construct('Fettuccine', 'Creamy fettuccine alfredo', 12.99);
    }

    public static function getCategory(): string {
        return self::CATEGORY;
    }
}
