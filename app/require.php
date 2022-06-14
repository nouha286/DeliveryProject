<?php
require_once('database/connexion.php');

if( basename($_SERVER['REQUEST_URI'])=="home_admin" || basename($_SERVER['REQUEST_URI'])=="Nos_client" || basename($_SERVER['REQUEST_URI'])=="inscription_admin"|| basename($_SERVER['REQUEST_URI'])=="connexion_admin"|| basename($_SERVER['REQUEST_URI'])=="demande_rammassage"|| basename($_SERVER['REQUEST_URI'])=="Nouveaux_colis"|| basename($_SERVER['REQUEST_URI'])=="etat_colis"|| basename($_SERVER['REQUEST_URI'])=="tunnel"){
require_once('models/Admin.php');
}elseif(basename($_SERVER['REQUEST_URI'])=="home_client"|| basename($_SERVER['REQUEST_URI'])=="inscription_client"|| basename($_SERVER['REQUEST_URI'])=="connexion_client"|| basename($_SERVER['REQUEST_URI'])=="nouveaux_inscription"|| basename($_SERVER['REQUEST_URI'])=="tunnel"){
    require_once('models/Client.php');
}elseif(basename($_SERVER['REQUEST_URI'])=="colis_a_rammasser"|| basename($_SERVER['REQUEST_URI'])=="colis_client"|| basename($_SERVER['REQUEST_URI'])=="edit_info_colis"|| basename($_SERVER['REQUEST_URI'])=="edit_rammassage"|| basename($_SERVER['REQUEST_URI'])=="suivi_client"|| basename($_SERVER['REQUEST_URI'])=="tunnel"){
    require_once('models/Colis.php');
}


