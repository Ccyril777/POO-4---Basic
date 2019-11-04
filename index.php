<?php
    
    require_once 'Vehicule.php';
    require_once 'MotorWay.php';
    require_once 'ResidentialWay.php';
    require_once 'PedestrianWay.php';
    require_once 'HighWay.php';   
    require_once 'LightableInterface.php';

    require_once 'Bicycle.php';

        $bike = new Bicycle('purple', 1, 'manual');
        $tornado = new Bicycle('black', 2, 'electric');
        $motorway = new MotorWay();
        $residentialWay = new ResidentialWay();
        $pedestrianWay = new PedestrianWay();
        $motorway->addVehicule($bike);
        $motorway->addVehicule($tornado);
        $residentialWay->addVehicule($bike);
        $residentialWay->addVehicule($tornado);
        $pedestrianWay->addVehicule($bike);
        $pedestrianWay->addVehicule($tornado);

        var_dump($bike);
            
            echo $bike->forward();
            echo $bike->brake();
            
        var_dump($tornado);
            
            echo $tornado->forward();
            echo $tornado->brake();
        
        var_dump($motorway);
        var_dump($residentialWay);
        var_dump($pedestrianWay);

        $bike->setCurrentSpeed(5);
        var_dump($bike->switchOn());
        $bike->setCurrentSpeed(10);
        var_dump($bike->switchOn());

        $tornado->setCurrentSpeed(5);
        var_dump($tornado->switchOn());
        $tornado->setCurrentSpeed(10);
        var_dump($tornado->switchOn());
        
        
    require_once 'Voiture.php';

        $car = new Car('red', 6,'hybrid');
        $clio = new Car('white', 4, 'steam');
        $motorway = new MotorWay();
        $residentialWay = new ResidentialWay();
        $pedestrianWay = new PedestrianWay();
        $motorway->addVehicule($car);
        $motorway->addVehicule($clio);
        $residentialWay->addVehicule($car);
        $residentialWay->addVehicule($clio);
        $pedestrianWay->addVehicule($car);
        $pedestrianWay->addVehicule($clio);
       
        var_dump($car);
            
            echo $car->forward();
            echo $car->brake();

        var_dump($clio);
            
            echo $clio->forward();
            echo $clio->brake();

        var_dump($motorway);
        var_dump($residentialWay);
        var_dump($pedestrianWay);
        var_dump($car->switchOn);
        var_dump($car->switchOff);
        var_dump($clio->switchOn);
        var_dump($clio->switchOff);

    require_once 'Truck.php';

            $truck = new Truck('red',5,'fuel',50);
            $Lord= new Truck('blue', 3,'electric', 75);
            $motorway = new MotorWay();
            $residentialWay = new ResidentialWay();
            $pedestrianWay = new PedestrianWay();
            $motorway->addVehicule($truck);
            $motorway->addVehicule($Lord);
            $residentialWay->addVehicule($truck);
            $residentialWay->addVehicule($Lord);
            $pedestrianWay->addVehicule($truck);
            $pedestrianWay->addVehicule($Lord);

            var_dump($truck);
            
                echo $truck->forward();
                echo $truck->brake();
                echo $truck->full(); 
                
            var_dump($Lord);
            
                echo $Lord->forward();
                echo $Lord->brake();
                echo $Lord->full();

            var_dump($motorway);
            var_dump($residentialWay);
            var_dump($pedestrianWay);
            var_dump($truck->switchOn);
            var_dump($truck->switchOff);
            var_dump($Lord->switchOn);
            var_dump($Lord->switchOff);

                
    require_once 'Skateboard.php';
    
            $skateboard = new Skateboard('red', 4);
            $Silent= new Skateboard('blue', 3);
            $motorway = new MotorWay();
            $residentialWay = new ResidentialWay();
            $pedestrianWay = new PedestrianWay();
            $motorway->addVehicule($skateboard);
            $motorway->addVehicule($Silent);
            $residentialWay->addVehicule($skateboard);
            $residentialWay->addVehicule($Silent);
            $pedestrianWay->addVehicule($skateboard);
            $pedestrianWay->addVehicule($Silent);

            var_dump($skateboard);
            
                echo $skateboard->forward();
                echo $skateboard->brake(); 
                
            var_dump($Silent);
            
                echo $Silent->forward();
                echo $Silent->brake();

            var_dump($motorway);
            var_dump($residentialWay);
            var_dump($pedestrianWay);