<?php

function getOrderTotal($order)
{
    $total = 0;

    foreach ($order->items as $item) {
        $total += ($item->price * $item->quantity);
    }

    // Add tax
    if ($order->country === 'US') {
        $total += ($total * 0.07);
    } elseif ($order->country === 'EU') {
        $total += ($total * 0.20);
    } elseif ($order->country === 'AU') {
        $total += ($total * 0.08);
    }

    return $total;
}