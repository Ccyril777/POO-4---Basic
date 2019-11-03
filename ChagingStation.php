<?php

class ChargingStation
{
    public function fullCharge(RechargeableInterface $vehicule)
        {
            $vehicule->charge(100);
        }
}