<?php

class Hotel{
    private string $nom;
    private string $adresse;
    private array $chambres;
    private array $reservations;



    public function __construct(string $nom, string $adresse){
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->chambres = [];
        $this->reservations = [];
        $this->client = $client;
        
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

    public function getAdresse()
    {
        return $this->adresse;
    }


    public function setAdresse($adresse)
    { 
        $this->adresse = $adresse;

        return $this;
    }

   
    public function getChambres()
    {
        return $this->chambres;
    }

   
    public function setChambres($chambres)
    {
        $this->chambres = $chambres;

        return $this;
    }


    public function getReservation()
    {
        return $this->reservation;
    }

    
    public function setReservation($reservation)
    {
        $this->reservation = $reservation;

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

    public function __toString()
    {
        return $this->nom;
        
    }

    public function addChambre(Chambre $chambre){
        
        $this->chambres[] = $chambre;
  
    }

    public function countChambres(){        //methode permetant de calculer le nombre de chambre dans le tableau chambres 
        return count($this->chambres);
    }

     public function countChambresReserves(){
         $nombre = 0;
         echo "<br>";
        foreach($this->chambres as $chambre){
         
            if ($chambre->getEstDispo()==true){
                $nombre+=1;
            }
         }  
        return $nombre;
    }



    public function countChambresDispo(){
        echo "<br>";
        return $this->countChambres() - $this->countChambresReserves();

    }

    public function getInfos(){
        echo $this->nom."<br>".$this->adresse."<br> Nombre de chambres : ".$this->countChambres().
        "<br> Nombre de chambres réservées : ".$this->countChambresReserves().
        "<br> Nombre de chambres dispo : ".$this->countChambresDispo()."<br>";
    }

    public function listeChambres(){
        echo "<br> Statuts des chambres de  ".$this->getNom()."<br> ";
        "<br> chambre       Prix        wifi        Etat    <br> ";
        foreach($this->chambres as $chambre){
            $wifi = $chambre->getWifi() ? "📶" : "";
            $dispo = $chambre->getEstDispo() ? "DISPONIBLE" : "RESERVEE";
            echo "Chambre ".$chambre->getNumeroChambre()."      ".$chambre->getPrix()."€      ".$wifi."     ".$dispo."<br>";

        }
    }

    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }


    public function reservationsHotel(){
        echo "<br> Réservation de l'hotel   ".$this->getNom()."<br> ";

        foreach($this->reservations as $reservation){
            echo $reservation->client->getNom()." ".$reservation->client$client->getPrenom()." - Chambre ".$chambre->getNumeroChambre().$reservation->getInfos();


        }
    
    }


    
}