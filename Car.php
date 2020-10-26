<?php

/*

Crée dans la classe Car un attribut privé de type booléen, représentant l'état du frein à main, hasParkBrake.
Crée une méthode publique qui change l'état du frein à main setParkBrake().
Lève une exception dans Car au niveau de la méthode start(), avec throw(), si le frein à main est actif.
Capture l'erreur avec try lors de l'appel à la start() sur une instance de Car.
Si une exception est attrapée dans le bloc catch, gère le cas en modifiant l'état du frein à main.
Envoie le message “Ma voiture roule comme un donut”, quel que soit le comportement avec finally.

*/

require_once 'Vehicle.php';

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

     /**
     * @var bool
     */
    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
    }


    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(bool $hasParkBrake): bool
    {
       return $this->hasParkBrake = $hasParkBrake;
    
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
{
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
}

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function start()
    {
        try {
           if ($this->hasParkBrake == true) {
            throw new Exception ('Park brake is on');}
        } catch (Exception $e) {
            echo $e->getMessage();
            return $this->setParkBrake(false);
        } finally {
            echo "Ma voiture roule comme un donut";
        }
    }
}