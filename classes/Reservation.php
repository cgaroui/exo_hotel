<?php

class Reservation{
    private DateTime $dateDebut;
    private DateTime $dateFin;

    

    public function __construct(string $dateDebut, string $dateFin)
    {
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
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

    public function __toString()
    {
        return "du ".$this->dateDebut." au ".$this->dateFin;
    }


    
}