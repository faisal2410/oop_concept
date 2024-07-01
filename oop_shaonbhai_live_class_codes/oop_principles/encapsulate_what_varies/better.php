<?php

class Order
{
    protected TaxCalculator $taxCalculator;

    function getOrderTotal($order)
    {
        $total = 0;

        foreach ($order->items as $item) {
            $total += ($item->price * $item->quantity);
        }

        $total += ($total * $this->taxCalculator->getTaxRate($order->country, $order->state));

        return $total;
    }
}

class TaxCalculator
{
    public function getTaxRate($country, $state)
    {
        if ($country === 'US') {
            return $this->getUSTaxRate($state);
        } elseif ($country === 'EU') {
            return $this->getEUTaxRate($country);
        }

        return 0;
    }

    private function getUSTaxRate($state)
    {

    }

    private function getEUTaxRate($country)
    {
        //
    }
}