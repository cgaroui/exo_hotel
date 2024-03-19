<?php
 
class Client{
    private string $nom;
    private string $prenom;
    private array $reservations;


    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->reservations = [];
    }
    


   
    public function getNom()
    {
        return $this->nom;
    }

   
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

   
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

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

    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }


    public function reservationsHotel(){

        echo $this->getNom." ".$this->getPrenom."- Chambre ".$this->getReservations;


    }

  

    public function __toString()
    {
        return $this->nom." ".$this->prenom;
        
    }



}