<?php

namespace Invoices;

use FoodOrders\Timestamp;

class Invoice {
    private float $finalPrice;
    private string $orderTime;
    private int $estimatedTimeInMinutes;

    public function __construct(float $finalPrice, Timestamp $orderTime, int $estimatedTimeInMinutes) {
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime->generateDate();
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }

    public function printInvoice() :void {
        echo "------------------------------------\n";
        echo "Date: " . $this->orderTime . "\n";
        echo "Final Price: $" . number_format($this->finalPrice, 2) . "\n";
        echo "------------------------------------\n";
    }
}
