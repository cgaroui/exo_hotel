<?php

class Hotel{
    private string $nom;
    private string $adresse;
    private array $chambres;


    public function __construct(string $nom, string $adresse){
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->chambres = [];
        
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
        "<br> Nombre de chambres dispo : ".$this->countChambresDispo();
    }


}