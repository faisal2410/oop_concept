<?php
namespace App\polymorphism;

interface Phone
{
    public function makeCall($number);
    public function sendMessage($number, $message);
}

