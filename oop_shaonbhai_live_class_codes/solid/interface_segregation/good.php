<?php

interface RideService {
    public function ride($person);
}

interface FoodDeliveryService
{
    public function foodDelivery($foodItem);
}

interface ParcelDeliveryService
{
    public function parcelDelivery($item);
}

class BikeRider implements RideService, ParcelDeliveryService, FoodDeliveryService
{
    public function ride($person)
    {
        // TODO: Implement ride() method.
    }

    public function parcelDelivery($item)
    {
        // TODO: Implement parcelDelivery() method.
    }

    public function foodDelivery($foodItem)
    {
        // TODO: Implement foodDelivery() method.
    }
}

class BicycleRider implements FoodDeliveryService
{
    public function foodDelivery($foodItem)
    {
        // TODO: Implement foodDelivery() method.
    }
}

class CarRider implements RideService
{
    public function ride($person)
    {
        // TODO: Implement foodDelivery() method.
    }
}