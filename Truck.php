<?php

include_once 'Vehicule.php';
class Truck extends Vehicule
{
    const ALLOWED_ENERGIES = ['fuel','electric'];
    const ALLOWED_STOCKAGE =[0,1];
    /**
     * @var string
     */
    private $energy;
    /**
     * @var int
     */
    private $energyLevel;
    private $stockCapacity;
    private $loadLevel;
    private $load = 0;
    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->stockCapacity = $stockCapacity;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return this;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setStockCapacity(int $stockCapacity): int
    {
        $this->stockCapacity = $stockCapacity;
    }
    public function getStockCapacity(int $stockCapacity): int
    {
        $this->stockCapacity = $stockCapacity;
    }
    public function getLoad(int $load): int
    {
        $this->load = $load;
    }
    public function setLoad(int $load): int
    {
        $this->load = $load;
    }
    public function setLoadLevel(int $loadLevel): int
    {
        $this->loadLevel = $loadLevel;
    }
    
    public function getLoadLevel()
    {
        if ($this->loadLevel < $this->stockCapacity){
            return' In filling';
        }else {
            return ' Full';
        }
    }
    public function full(): string
    {
        $sentence = "";
        while ($this->capacity < 100) {
            $this->capacity++;
            $sentence .= "In filling ";
        }        $sentence .= "Full !";
        return $sentence;
    }
}