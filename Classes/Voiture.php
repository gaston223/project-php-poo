<?php

/*
 * Class Voiture : classe représentant une voiture
 */
class Voiture{
    /**
     * @var string 
     */
    
    protected $marque;
    protected $moteur;
    protected $km;

   public function __construct(string $premiereMarque, string $premierMoteur, int $km){
        var_dump('Appel du constructeur');
        $this->marque=$premiereMarque;
        $this->moteur=$premierMoteur;
        $this->km = 0;
    }
    
    public function demarrer(): void
    {
        echo '===== Démarrage =====';
    }
    public function rouler(int $kilometres): void
    {
        echo '<p>J\'avance de '. $kilometres. 'km</p>';
        $this->km = $this->km + $kilometres;
        echo '<p>Kilométrage = '. $this->km .'</p>';
    }
    /**
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @return mixed
     */
    public function getMoteur()
    {
        return $this->moteur;
    }

    /**
     * @param mixed $moteur
     */
    public function setMoteur($moteur)
    {
        $this->moteur = $moteur;
    }

    /**
     * @param string $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

      /**
     * @return int
     */
    public function getKm(): int
    {
        return $this->km;
    }
    /**
     * @param int $km
     */
    public function setKm(int $km): void
    {
        $this->km = $km;
    }
    
}