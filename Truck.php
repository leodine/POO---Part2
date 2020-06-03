<?php

  // Car.php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    const ALLOWED_ENERGIES = ['fuel','electric'];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;
    
    /**
     * @var int
     */
    private $capacityStock;
    
    /**
     * @var int
     */
    private $currentFilling=0;
    

    public function __construct(string $color, int $nbSeats, string $energy, int $capacityStock)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setCapacityStock($capacityStock);
    }
    
    public function getCurrentFilling(): int
    {
        return $this->currentFilling;
    }
    
    public function setCurrentFilling(int $currentFilling): Truck
    {
    	$this->currentFilling = $currentFilling;
        return $this;
    }
    
    public function isFullFilled(): bool
    {
    	if ($this->getCurrentFilling()<$this->capacityStock)
    	{
    		return false;
    	}
    	else
    	{
    		return true;
    	}
    }
    
    public function getCapacityStock(): int
    {
        return $this->capacityStock;
    }
    
    public function setCapacityStock(int $capacityStock): Truck
    {
    	$this->capacityStock = $capacityStock;
        return $this;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
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

    public function setEnergyLevel(int $energyLevel): Truck
    {
        $this->energyLevel = $energyLevel;
        return this;
    }
}
  
  ?>
