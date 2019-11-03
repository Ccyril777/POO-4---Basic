<?php

abstract class HighWay
{
    protected $currentVehicule = [];
    protected $nbLane;
    protected $maxSpeed;
    abstract public function addVehicule(Vehicule $Vehicule);
    /**
     * @return array
     */
    public function getCurrentVehicule() : array
    {
        return $this->currentVehicule;
    }
    /**
     * @param array $currentVehicule
     */
    public function setCurrentVehicule($currentVehicule) : void
    {
        $this->currentVehicule []= $currentVehicule;
    }
    /**
     * @return mixed
     */
    public function getNbLane() : int
    {
        return $this->nbLane;
    }
    /**
     * @param mixed $nbLane
     */
    public function setNbLane(int $nbLane) : void
    {
        $this->nbLane = $nbLane;
    }
    /**
     * @return mixed
     */
    public function getMaxSpeed() : int
    {
        return $this->maxSpeed;
    }
    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed) : void
    {
        $this->maxSpeed = $maxSpeed;
    }
}