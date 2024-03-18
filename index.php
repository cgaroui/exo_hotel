<?php


spl_autoload_register(function($class_name) {
    require 'classes/'.$class_name . '.php';
});

$hotel1 = new Hotel("Hilton****Strasbourg","10 route de la gare 67000 STRASBOURG");

$chambre1 = new Chambre(1,2,120,true,false,$hotel1);
$chambre2 = new Chambre(2,1,110,false,true,$hotel1);


echo $hotel1->countChambres();

echo $hotel1->countChambresReserves(); 

echo $hotel1->countChambresDispo();
echo $hotel1->getInfos();