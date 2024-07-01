<?php

function getOrderTotal($order)
{
    $total = 0;

    foreach ($order->items as $item) {
        $total += ($item->price * $item->quantity);
    }

    $total += ($total * getTaxRate($order->country));

    return $total;
}

function getTaxRate($country)
{
    if ($country === 'US') {
        return 0.07;
    } elseif ($country === 'EU') {
        return 0.20;
    }

    return 0;
}