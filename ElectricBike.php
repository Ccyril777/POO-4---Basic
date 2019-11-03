<?php

class ElectricBike extends Vehicule Implements RechargeableInterface

{
    public function charge(int $percentage):int
    {}
    
    public function unLoad(int $percentage):int
    {}
}