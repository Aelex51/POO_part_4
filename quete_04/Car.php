<?php
class Car extends Vehicle
{
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake=true;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
        return $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): void
    {
        if ($this->hasParkBrake === true) {
            throw new Exception('impossible de démarrer, frein à main actif');
        }
    }

}
