<?php
namespace App\final;

class User
{
    public function __construct(private string $name, private float $balance = 0)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getBalance(): float
    {
        return $this->balance;
    }

    public function deposit(float $amount): void
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw(float $amount): void
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }
}