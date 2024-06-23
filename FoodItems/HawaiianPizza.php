<?php

namespace FoodItems;

class HawaiianPizza extends FoodItem {
    private const CATEGORY = 'Pizza';

    public function __construct() {
        parent::__construct('Hawaiian Pizza', 'Ham and pineapple pizza', 11.99);
    }

    public static function getCategory(): string {
        return self::CATEGORY;
    }
}
