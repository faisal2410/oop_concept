<?php

interface PaymentProcessor {
    public function processPayment($amount);
}

class PayPalPayment implements PaymentProcessor {
    public function processPayment($amount) {
        // PayPal-specific payment logic
        echo "Processing PayPal payment of $" . $amount;
    }
}

class StripePayment implements PaymentProcessor {
    public function processPayment($amount) {
        // Stripe-specific payment logic
        echo "Processing Stripe payment of $" . $amount;
    }
}

class ShoppingCart {
    private $paymentProcessor;

    public function __construct(PaymentProcessor $paymentProcessor) {
        $this->paymentProcessor = $paymentProcessor;
    }

    public function checkout($amount) {
        $this->paymentProcessor->processPayment($amount);
    }
}

// Usage
$paypal = new PayPalPayment();
$stripe = new StripePayment();
$cartWithPayPal = new ShoppingCart($paypal);
$cartWithStripe = new ShoppingCart($stripe);

$cartWithPayPal->checkout(100);  // Works with PayPal
$cartWithStripe->checkout(150);  // Works with Stripe
