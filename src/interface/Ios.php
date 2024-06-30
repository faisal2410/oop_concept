<?php
namespace App\interface;
class Ios implements Phone
{


    public function makeCall($number)
    {
        echo "Making call to {$number} \n";
    }

    public function sendMessage($number, $message)
    {
        echo "Sending {$message} message to {$number} \n";
    }
}

