<?php 

define("INSERT_IP", "INSERT INTO adresses_ip (adresse_ip, total_visites, premiere_visite) VALUES (?, ?, ?)");
define("UPDATE_IP", "UPDATE adresses_ip SET adresse_ip = ?, total_visites = ?, premiere_visite = ? WHERE id = ?");

define("SELECT_ALL_IP", "SELECT * FROM adresses_ip ORDER BY id DESC");

define("SELECT_ALL_VISITES", "SELECT * FROM visites ORDER BY id DESC");
define("INSERT_VISITE", "INSERT INTO visites (adresse_ip, date_visite) VALUES (?, ?)");

function insertVisite($visite){
    global $bdd;
    $statement = $bdd->prepare(INSERT_VISITE);
    $statement->bindValue(1, $visite->getIpId());
    $statement->bindValue(2, $visite->getDateTime());
    $statement->execute();
}

function selectAllVisites(){
    global $bdd;
    $listeVisites = array();
    $statement = $bdd->prepare(SELECT_ALL_VISITES);
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $visite = new Visite($row['id'], $row['adresse_ip'], $row['date_visite']);
            $listeVisites[] = $visite;
    }
    return $listeVisites;
}

function insertIp($ip){
    global $bdd;
    $statement = $bdd->prepare(INSERT_IP);
    $statement->bindValue(1, $ip->getIpAddress());
    $statement->bindValue(2, $ip->getTotalVisits());
    $statement->bindValue(3, $ip->getFirstVisit());
    $statement->execute();
}

function updateIp($ip){
    global $bdd;
    $statement = $bdd->prepare(UPDATE_IP);
    $statement->bindValue(1, $ip->getIpAddress());
    $statement->bindValue(2, $ip->getTotalVisits());
    $statement->bindValue(3, $ip->getFirstVisit());
    $statement->bindValue(4, $ip->getId());
    $statement->execute();
}

function selectAllIp(){
    global $bdd;
    $listeIp = array();
    $statement = $bdd->prepare(SELECT_ALL_IP);
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $ip = new Ip($row['id'], $row['adresse_ip'], $row['total_visites'], $row['premiere_visite']);
            $listeIp[] = $ip;
    }
    return $listeIp;
}

?>