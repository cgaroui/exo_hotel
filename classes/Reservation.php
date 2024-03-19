<?php

class Reservation{
    private DateTime $dateDebut;
    private DateTime $dateFin;
    private Client $client;
    private Chambre $chambre;

    

    public function __construct(string $dateDebut, string $dateFin, Client $client,Chambre $chambre)
    {
        $this->dateDebut = new datetime($dateDebut);
        $this->dateFin = new datetime ($dateFin);
        $this->client = $client;
        $this->chambre = $chambre;
        $client->addReservation($this);
       $chambre->getHotel()->addreservation($this);

    }

    

    public function getDateDebut()
    {
        return $this->dateDebut;
    }

     
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }
     
    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    
    public function getChambre()
    {
        return $this->chambre;
    }


    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }


    /*public function afficherReservation(){

        
        
    }*/

    public function __toString()
    {
        return  $this->dateDebut." au ".$this->dateFin;
    }

 

    

   
}