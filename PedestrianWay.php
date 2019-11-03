<?php

    require_once 'HighWay.php';
        final class PedestrianWay extends HighWay
        {
            protected $nbLane = 1;
            protected $maxSpeed = 10;
            public function addVehicule(Vehicule $Vehicule)
            {
                if ($Vehicule instanceof Bicycle || $Vehicule instanceof Skateboard) 
                {
                    $this->setCurrentVehicule($Vehicule);
                }
            }
        }