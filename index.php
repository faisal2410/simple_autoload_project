<?php
require_once 'autoload.php';

use Models\User;
use Models\Product;
use Models\Order;

// Create instances of the classes
$user = new User();
echo $user->getInfo();

$product = new Product();
echo $product->getDetails();

$order = new Order();
echo $order->getOrderInfo();
