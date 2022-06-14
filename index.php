<?php
if(!isset($_GET['page'])||basename($_SERVER['REQUEST_URI'])=="" ||basename($_SERVER['REQUEST_URI'])=="A_propos_de_nous" || basename($_SERVER['REQUEST_URI'])=="acceuil" || basename($_SERVER['REQUEST_URI'])=="colis_a_rammasser"||basename($_SERVER['REQUEST_URI'])=="colis_client"||basename($_SERVER['REQUEST_URI'])=="connexion_admin"||basename($_SERVER['REQUEST_URI'])=="connexion_client" || basename($_SERVER['REQUEST_URI'])=="contact_client" || basename($_SERVER['REQUEST_URI'])=="demande_ramassage"||basename($_SERVER['REQUEST_URI'])=="edit_info_colis"||basename($_SERVER['REQUEST_URI'])=="edit_rammassage"||basename($_SERVER['REQUEST_URI'])=="etat_colis"||basename($_SERVER['REQUEST_URI'])=="home_admin"||basename($_SERVER['REQUEST_URI'])=="home_client"||basename($_SERVER['REQUEST_URI'])=="inscription_admin"||basename($_SERVER['REQUEST_URI'])=="inscription_client"||basename($_SERVER['REQUEST_URI'])=="Nos_client"||basename($_SERVER['REQUEST_URI'])=="Nos_service"||basename($_SERVER['REQUEST_URI'])=="Nouveaux_colis"||basename($_SERVER['REQUEST_URI'])=="nouveaux_inscription"||basename($_SERVER['REQUEST_URI'])=="suivi_client"){
    include('views/includes/scriipt.php') ;
    include('views/includes/sidebar.php');
}

if(  basename($_SERVER['REQUEST_URI'])=="colis_a_rammasser"||basename($_SERVER['REQUEST_URI'])=="colis_client" || basename($_SERVER['REQUEST_URI'])=="contact_client" ||basename($_SERVER['REQUEST_URI'])=="edit_info_colis"||basename($_SERVER['REQUEST_URI'])=="edit_rammassage"||basename($_SERVER['REQUEST_URI'])=="home_client"||basename($_SERVER['REQUEST_URI'])=="Nos_service"||basename($_SERVER['REQUEST_URI'])=="suivi_client"){
    include('views/includes/side_dash.php') ;
}

if(  basename($_SERVER['REQUEST_URI'])=="home_admin"||basename($_SERVER['REQUEST_URI'])=="Nouveaux_colis" || basename($_SERVER['REQUEST_URI'])=="etat_colis" ||basename($_SERVER['REQUEST_URI'])=="demande_ramassage"||basename($_SERVER['REQUEST_URI'])=="nouveaux_inscription"||basename($_SERVER['REQUEST_URI'])=="Nos_client"){
    include('views/includes/side_dash_admin.php') ;
}

require_once('./autoload.php');
require_once('./controllers/HomeController.php');

$home =new HomeController();
$page=['mail','A_propos_de_nous','logout','Tunnel','acceuil','colis_a_rammasser','colis_client','connexion_admin','connexion_client','contact_client','demande_ramassage','edit_info_colis','edit_rammassage','etat_colis','home_admin','home_client','inscription_admin','inscription_client','Nos_client','Nos_service','Nouveaux_colis','nouveaux_inscription','suivi_client'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$page)){
        $home->index($_GET['page']);
    } else{
      include('views/includes/404.php');
    }
}else{
        $home->index('acceuil');
    }





