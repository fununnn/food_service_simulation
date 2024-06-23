<?php

namespace FoodOrders;

use FoodItems\FoodItem;

class FoodOrder {
    private array $items;
    private string $orderTime;

    public function __construct(array $items) {
        $this->items = $items;
        $this->orderTime = (new Timestamp())->generateDate();
    }

    public function getItems(): array {
        return $this->items;
    }

    public function getTotalPrice(): float {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }

    public function getOrderTime(): string {
        return $this->orderTime;
    }
}
