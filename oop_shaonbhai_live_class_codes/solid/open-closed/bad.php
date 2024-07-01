<?php

class PaymentProcessor {
    public function processPayment($amount, $paymentType) {
        if ($paymentType == 'paypal') {
            $this->processPayPalPayment($amount);
        }
        else {
            throw new Exception("Unsupported payment type");
        }
    }

    private function processPayPalPayment($amount) {
        // PayPal payment processing logic
        echo "Processing PayPal payment of $" . $amount;
    }
}

// Usage
$processor = new PaymentProcessor();
$processor->processPayment(100, 'paypal');
