<?php

// Interface Segregation principle

interface Rider {
    public function ride($person);
    public function foodDelivery($foodItem);
    public function parcelDelivery($item);
}

class BikeRider implements Rider
{
    public function ride($person)
    {
        // TODO: Implement ride() method.
    }

    public function foodDelivery($foodItem)
    {
        // TODO: Implement foodDelivery() method.
    }

    public function parcelDelivery($item)
    {
        // TODO: Implement parcelDelivery() method.
    }
}