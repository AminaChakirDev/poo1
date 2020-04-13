<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $volumeCapacity;

    /**
     * @var int
     */
    private $loading;


// Do not modify the rest of the file

    public function __construct(int $volumeCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }


    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function forward(): string
    {
        $this->loading = 15;
        return "in filling !";
    }

    public function fill(): string
    {
        $sentence = "";
        while ($this->loading < 90) {
            $this->loading+=15;
            $sentence .= "in filling!";
        }

        $sentence .= "full";
        return $sentence;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }
}