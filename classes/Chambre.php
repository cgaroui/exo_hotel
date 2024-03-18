<?php


class Chambre {
    private int $numeroChambre;
    private int $nbLits;
    private float $prix;
    private bool $wifi;
    private bool $estDispo;
    private array $reservations;
    private Hotel $hotel;
    

    public function __construct(int $numeroChambre, int $nbLits, float $prix, bool $wifi, bool $estDispo, Hotel $hotel){
        $this->numeroChambre = $numeroChambre;
        $this->nbLits = $nbLits;
        $this->prix = $prix;
        $this->wifi = $wifi;
        $this->estDispo = $estDispo;
        $this->reservations = [];
        $this->hotel = $hotel;
        $hotel->addChambre($this);
    }

    public function getNumeroChambre()
    {
        return $this->numeroChambre;
    }


    public function setNumeroChambre($numeroChambre)
    {
        $this->numeroChambre = $numeroChambre;

        return $this;
    }


    public function getNbLits()
    {
        return $this->nbLits;
    }

  
    public function setNbLits($nbLits)
    {
        $this->nbLits = $nbLits;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }


    public function getWifi()
    {
        return $this->wifi;
    }

  
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    public function getEstDispo()
    {
        return $this->estDispo;
    }

  
    public function setEstDispo($estDispo)
    {
        $this->estDispo = $estDispo;

        return $this;
    }

    
    public function getReservations()
    {
        return $this->reservations;
    }

   
    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

    public function getHotel()
    {
        return $this->hotel;
    }

   
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    public function addChambre(Reservation $chambre){
        return $this->reservations[] = $chambre;
    }


   
}