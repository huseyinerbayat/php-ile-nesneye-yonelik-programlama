<?php

include './Models/Phone.php';
include './Models/Application.php';

$phone1 = new Phone('Samsung', 'A250');
$phone1->setSerialNumber('123456789');

//$phone1->brand = 'Samsung';
//$phone1->model = 'A250';

//print_r($phone1);

/*echo $phone1->brand;
echo '<br>';
echo $phone1->model; */
echo '<br>';
echo $phone1->getInformation();

$phone1->downloadApplication(new Application('Instagram', 250));
$phone1->downloadApplication(new Application('Facebook', 150));
$phone1->downloadApplication(new Application('X', 200));
$phone1->downloadApplication(new Application('Whatsapp', 225));


$phone1Apps = $phone1->getApplications();

//print_r($phone1Apps);

echo '<h4>Uygulamalar</h4>';
foreach($phone1Apps as $app) {
    echo $app->getName() . ' ' . $app->getSize();
    //print_r($app);
    echo '<br>';
}

$phone1->removeApplication('X');
$phone1->removeApplication('Facebook');

$phone1Apps = $phone1->getApplications();
echo '<h4>Uygulamalar</h4>';
foreach($phone1Apps as $app) {
    echo $app->getName() . ' ' . $app->getSize();
    //print_r($app);
    echo '<br>';
}