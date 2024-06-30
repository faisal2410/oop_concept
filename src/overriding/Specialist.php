<?php
namespace App\overriding;

class Specialist extends Doctor
{
    public function calculateFees($hours): float
    {
        return 25 * $hours;
    }
}