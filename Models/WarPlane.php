<?php

class WarPlane extends Plane {

    public function throwBomb() {
        echo 'Bomba atıyorum... ';
        // koordinat gönderebilir

        $this->sendLocation(36, 45, 'Bomba atma işlemi gerçekleştirdim... ');
    }

    public function flying() {
        $this->loadBombs();

        parent::flying();

        // farklı işlemler yaptırılabilir
    }

    private function loadBombs() {
        echo 'Bombaları yükledim... ';
    }
}