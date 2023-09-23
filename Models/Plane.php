<?php


class Plane extends Vehicle implements FuelLoadable{
    
    public function flying() {
        echo 'Benim markam: ' . $this->brand . ', modelim: ' . $this->model;
        echo '<br>';
        echo 'Uçuyorum... ';
        // koordinat gönderebilir
        $this->sendLocation(45, 35, 'Uçuşu gerçekleştiriyorum... ');
    }

    protected function sendLocation($lat, $long, $message){
        echo 'Şu anki koordinatım (' . $lat . ',' . $long . ') Mesaj: ' . $message;
    }

    public function moving(){
        echo 'Şu anda taksi yapıyorum...';
        echo '<br>';
    }

    public function getFuel() {
        echo 'Uçak yakıtı yüklendi...';
    }
}