<?php
namespace Domain;

//use \Domain\Fleet;
require_once('fleetService.php');

/**
 * Ce service permet de gérer les véhicules
 *
 */
class Vehicle
{
    private $fleet;

    public function __construct()
    {
        $this->fleet = new Fleet();
    }

    /**
     * Enregistre un véhicule dans une flotte
     *
     * @param array $vehicule
     * @param int $fleetId
     * @return boolean
     */
    public function register($vehicle, $fleetId)
    {
        // On vérifie la présence de ce véhicule dans la flotte
        $carInFleet = $this->fleet->getFleetInfosByCar($vehicle['numberplate'], $fleetId);

        if (isset($carInFleet) && $carInFleet == false) {
            // Le véhicule n'est pas présent on l'insert
            $this->fleet->addCarToFleet($vehicle, $fleetId);
            return true;
        } else {
            // Le véhicule est déjà présent!
            return false;
        }
    }

}
