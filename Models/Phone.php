<?php

class Phone{
    private $brand;
    private $model;

    private $applications;

    private $serialNumber;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
        $this->setDefaultApplications();
        echo 'kurucu method çalıştı';
        echo 'Markası: ' . $brand . ' modeli: ' . $model . ' olan telefon oluşturuldu.';
    }

    public function setSerialNumber($serialNumber) {
        if(!$this->serialNumber) {
            $this->serialNumber = $serialNumber;
            echo 'Seri numarası belirlendi.';
        }else {
            die('Bu telefonun seri numarası önceden belirlenmiştir.');
        }
    }

    public function getInformation() {
        return "Marka:".$this->brand." Model:". $this->model;
    }

    public function downloadApplication(Application $application) {
        //array_push($this->applications, $applicationName);
        $this->applications[] = $application;
    }

    public function removeApplication($applicationName) {
        $index = $this->findApplicationIndex($applicationName);
        if($index !== false)
            array_splice($this->applications, $index, 1);
    }

    public function getApplications(){
        return $this->applications;
    }

    private function setDefaultApplications(){
        $this->applications[] = new Application('Kamera', 275);
        $this->applications[] = new Application('Galeri', 275);
    }

    private function findApplicationIndex($appName) {
        foreach ($this->applications as $key => $application) {
            if($application->getName() == $appName) {
                return $key;
            }
        }

        return false;
    }
}