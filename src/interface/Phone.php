<?php
namespace App\interface;

interface Phone
{
    public function makeCall($number);
    public function sendMessage($number, $message);
}
