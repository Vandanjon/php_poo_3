<?php

require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

abstract class HighWay
{
    //properties
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    //methods
    abstract public function addVehicle(Vehicle $vehicle);

    //getters
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    //setters
    public function setCurrentVehicles($currentVehicle): void
    {
        $this->currentVehicles[] = $currentVehicle;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }
}