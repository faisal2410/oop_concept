<?php

interface PaymentMethod {
    public function process($amount);
}

class PayPalPayment implements PaymentMethod {
    public function process($amount) {
        // PayPal payment processing logic
        echo "Processing PayPal payment of $" . $amount;
    }
}

class CreditCardPayment implements PaymentMethod {
    public function process($amount) {
        // Credit card payment processing logic
        echo "Processing Credit Card payment of $" . $amount;
    }
}

class BankTransferPayment implements PaymentMethod {
    public function process($amount) {
        // Bank transfer payment processing logic
        echo "Processing Bank Transfer payment of $" . $amount;
    }
}

class PaymentProcessor {
    private $paymentMethod;

    public function __construct(PaymentMethod $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment($amount) {
        $this->paymentMethod->process($amount);
    }
}

// Usage
$paypalPayment = new PayPalPayment();
$processor = new PaymentProcessor($paypalPayment);
$processor->processPayment(100);

$creditCardPayment = new CreditCardPayment();
$processor = new PaymentProcessor($creditCardPayment);
$processor->processPayment(150);

$bankTransferPayment = new BankTransferPayment();
$processor = new PaymentProcessor($bankTransferPayment);
$processor->processPayment(200);
