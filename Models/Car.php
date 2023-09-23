<?php 

class Car extends Vehicle implements FuelLoadable {
    private $isRechargable;

    public function __construct($brand, $model, $isRechargable){
        parent::__construct($brand, $model);
        $this->isRechargable = $isRechargable;
    }
    public function moving() {
        echo 'Şu anda gaza basıyorum... ';
    }

    public function getFuel() {
        if($this->isRechargable)
            echo 'Arabayı sarj edildi... ';
        else
            echo 'Arabaya yakıt alındı..';
    }

}