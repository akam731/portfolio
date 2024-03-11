<?php

# Récupération de l'ip
$ip_address = $_SERVER['REMOTE_ADDR'];

# Ajout/Modification de la table adresse_ip avec l'adresse du visiteur
$date_actuelle = date("d/m/Y à H:i");
$listeAllIp = selectAllIp();

$isIpNew = true;

$ip_global = new Ip("",$ip_address,1,$date_actuelle);

foreach ($listeAllIp as $ip) {
	if ($ip->getIpAddress() == $ip_address) {
		$isIpNew = false;
		$ip_global = $ip;
		$ip_global->setTotalVisits($ip_global->getTotalVisits() + 1);
		break;
	}
}

if ($isIpNew) {
	insertIp($ip_global);
}

# Ajout de la visite

$visite_Globale = new Visite("",$ip_address, $date_actuelle);

$listeAllVisite = selectAllVisites();

$isVisiteValid = true;

foreach ($listeAllVisite as $visite) {
	if ($visite_Globale->getIpId() == $visite->getIpId()) {

		$heure_moins_une_heure = new DateTime('now');
		$heure_moins_une_heure->modify('-1 hour');

		$heure_a_comparer_str = $visite->getDateTime();
		$heure_a_comparer = DateTime::createFromFormat('d/m/Y \à H:i', $heure_a_comparer_str);

		$heure_moins_une_heure_timestamp = $heure_moins_une_heure->getTimestamp();
		$heure_a_comparer_timestamp = $heure_a_comparer->getTimestamp();

		if ($heure_a_comparer_timestamp > $heure_moins_une_heure_timestamp) {
		    $visite_Globale = $visite;
		    $isVisiteValid = false;
		    break;
		}

	}
}

if($isVisiteValid){
	insertVisite($visite_Globale);
}
if (!$isIpNew AND $isVisiteValid) {
	updateIp($ip_global);
}

?>