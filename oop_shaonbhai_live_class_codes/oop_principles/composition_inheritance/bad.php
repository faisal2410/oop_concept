<?php

abstract class Notifier {
    protected $message;

    public function setMessage($message) {
        $this->message = $message;
    }

    abstract public function send();
}

class EmailNotifier extends Notifier {
    public function send() {
        echo "Sending email: {$this->message}\n";
    }
}

class SMSNotifier extends Notifier {
    public function send() {
        echo "Sending SMS: {$this->message}\n";
    }
}

// Usage
$emailNotifier = new EmailNotifier();
$emailNotifier->setMessage("Hello!");
$emailNotifier->send();

$smsNotifier = new SMSNotifier();
$smsNotifier->setMessage("Hi there!");
$smsNotifier->send();