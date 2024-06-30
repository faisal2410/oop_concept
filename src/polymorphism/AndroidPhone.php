<?php
namespace App\polymorphism;

class AndroidPhone implements Phone
{
    public function makeCall($number)
    {
        echo "Calling {$number} using the default dialer...\n";
    }

    public function sendMessage($number, $message)
    {
        echo "Sending SMS to {$number}:{$message} \n";
    }
}
