<?php
namespace App\polymorphism;

class IPhone implements Phone
{
    public function makeCall($number)
    {
        echo "Calling {$number} with FaceTime... \n";
    }

    public function sendMessage($number, $message)
    {
        echo "Sending iMessage to {$number}: {$message} \n";
    }
}
