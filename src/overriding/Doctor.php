<?php

namespace App\overriding;
class Doctor
{
    public function calculateFees($hours): float
    {
        return 10 * $hours;
    }
}
