<?php

namespace FoodOrders;

class Timestamp {
    public function generateDate(): string {
        return date('Y/m/d H:i:s');
    }
}
