<?php
namespace Domain;

include_once('vehicleService.php');

// On vérifie si on arrive d'une validation du formulaire
if (isset($_POST['submit'])) {
	// On récupère les données du formulaire
	if (isset($_POST['formNumberplate']) && $_POST['formNumberplate'] != '') {
		$numberplate = $_POST['formNumberplate'];
		$fleetId = $_POST['formFleet'];
		$vehicle = new Vehicle();
		if ($vehicle->register($_POST, $fleetId)) {
			$registerOk = '<div class="alert alert-success" role="alert">
				The vehicle <strong>'.$numberplate.'</strong> is now registered in <strong>fleet '.$fleetId.'</strong>.
			</div>';
		} else {
			// Cette voiture est déjà dans la flotte selectionnée!
			$alert = '<div class="alert alert-danger" role="alert">
			    This vehicle <strong>'.$numberplate.'</strong> has already been registered into the <strong>fleet '.$fleetId.'</strong>!
			</div>';
		}
	} else {
		$alert = '<div class="alert alert-danger" role="alert">
			Your numberplate is missing!
		</div>';
	}

}
