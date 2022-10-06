<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    //properties
    protected int $stockCapacity;
    protected int $stockLoaded = 0;

    //methods
    public function __construct(string $color, int $nbSeats, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->stockCapacity = $stockCapacity;
    }

    public function isFull()
    {
        if ($this->getStockCapacity() > 0) {
            echo "in filling";
        } elseif ($this->getStockCapacity() <= 0) {
            echo "full";
        }
    }

    //getters
    public function getStockLoaded(): int
    {
        return $this->stockLoaded;
    }

    public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }

    //setters
    public function setStockLoaded(int $stockLoaded): void
    {
        $this->stockLoaded = $stockLoaded;
    }

    public function setStockCapacity(int $stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    }
}