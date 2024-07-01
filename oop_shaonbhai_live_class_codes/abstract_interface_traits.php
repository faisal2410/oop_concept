<?php
/**
 * This code is related to this video: https://www.youtube.com/watch?v=lovdcW8sKhQ
 */


// Ride sharing service
abstract class Vehicle {
    use Availability;

    public function startRide()
    {
        // fire_event('ride_started');
    }

    public function endRide()
    {
        // fire_event('ride_ended');
    }

    abstract public function getBaseFare();
}

class Car extends Vehicle implements Rentable {
    public function getBaseFare()
    {
        // if (is_weekend(today)) -> 70
        return 50;
    }

    public function getDailyRent()
    {
        // logic
    }
}

class Bike extends Vehicle {
    public function getBaseFare()
    {
        // if (is_weekend(today)) -> 50
        return 30;
    }
}

interface Rentable {
    public function getDailyRent();
}

// House rent
// Rentable -> daily rent
class House implements Rentable {
    use Availability;
    public function getDailyRent()
    {
        // logic
    }
}

// Food delivery service
class Restaurant {
    use Availability;
}

trait Availability {
    private $isAvailable;

    public function markAsAvailable()
    {
        $this->isAvailable = true;
    }

    public function markAsUnavailable()
    {
        $this->isAvailable = false;
    }
}
