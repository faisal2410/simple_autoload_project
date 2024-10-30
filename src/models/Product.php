<?php

namespace Models;

class Product
{
    public function __construct()
    {
        echo "Product class instantiated.\n";
    }

    public function getDetails()
    {
        return "This is the Product class.\n";
    }
}
