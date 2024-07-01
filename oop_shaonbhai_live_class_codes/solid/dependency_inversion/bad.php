<?php

class PayPalPayment {
    public function processPayment($amount) {
        // PayPal-specific payment logic
        echo "Processing PayPal payment of $" . $amount;
    }
}

class ShoppingCart {
    private $paymentProcessor;

    public function __construct() {
        $this->paymentProcessor = new PayPalPayment();
    }

    public function checkout($amount) {
        $this->paymentProcessor->processPayment($amount);
    }
}

// Usage
$cart = new ShoppingCart();
$cart->checkout(100);  // Only works with PayPal
