<?php

$servername = "sql211.infinityfree.com";
$username = "if0_35852107";
$password = "8ZQgDn65Kn97r";
$dbname = "if0_35852107_portfolio";


$bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>