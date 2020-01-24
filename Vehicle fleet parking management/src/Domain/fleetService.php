<?php
namespace Domain;

/**
 * Ce service permet de gérer les flottes
 *
 */
class Fleet
{

    public function __construct()
    {

    }

    /**
     * Retourne le contenu d'une flotte
     *
     * @param int $id
     * @return array
     */
    public function getFleetInfosByCar($numberplate, $id)
    {
        return false; // POUR LA DEMO

        $sql = "SELECT COUNT(*)"
        . " FROM `fleet`"
        . " WHERE `numberplate` = `:numberplate` AND `fleet_id` = :id";
        global $dbh;
        $ref = $dbh->prepare($sql);
        $ref->bindParam(':numberplate', $numberplate);
        $ref->bindParam(':id', $id);
        $ref->execute();
        if ($ref->fetchColumn() == 0) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Retourne le contenu d'une flotte
     *
     * @param array $vehicule
     * @param int $id
     * @return array
     */
    public function addCarToFleet($vehicle, $id)
    {
        return true; // POUR LA DEMO

        $sql = "INSERT INTO `fleet`"
        . " (numberplate, fleet_id, ... ) VALUES (`:numberplate`, `:id`, ...)";
        global $dbh;
        $ref = $dbh->prepare($sql);
        $ref->bindParam(':numberplate', $vehicle);
        $ref->bindParam(':id', $id);
        $ref->execute();

        return true;
    }

}