<?php


spl_autoload_register(function($class_name) {
    require 'classes/'.$class_name . '.php';
});
$client1 = new Client("Virgile","GIBELO");
$hotel1 = new Hotel("Hilton****Strasbourg","10 route de la gare 67000 STRASBOURG",$client1);

$chambre1 = new Chambre(1,2,120,true,false,$hotel1);
$chambre2 = new Chambre(2,1,110,true ,true,$hotel1);



$reservation1 = new Reservation("01-01-2021","01-03-2021",$client1, $chambre1);
$reservation2 = new Reservation ("11-03-2021", "11-03-2022", $client1, $chambre2);

echo $hotel1->countChambres();

echo $hotel1->countChambresReserves(); 

echo $hotel1->countChambresDispo();
echo $hotel1->getInfos();

echo $hotel1->listeChambres();

echo $hotel1->reservationsHotel();

