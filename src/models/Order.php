<?php

namespace Models;

class Order
{
    public function __construct()
    {
        echo "Order class instantiated.\n";
    }

    public function getOrderInfo()
    {
        return "This is the Order class.\n";
    }
}
