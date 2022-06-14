
<?php

class AdministrateurController{
 

  public $id;
 


    public function connexionClient(){
     
      if (isset($_POST['login']) && isset($_POST['Email']) && isset($_POST['Password']) )
      {
        session_start();
          $connection=new Client();
                  
                 
               
                  $connection->setEmail($_POST['Email']);
                  $connection->setPassword($_POST['Password']);  
                  $Email=$connection->getEmail();
                  $Password= $connection->getPassword(); 
                 
                  $sql="SELECT * FROM client WHERE Email LIKE ? AND Password LIKE ? ";
                  $result=$connection->GetData($sql);
                  $result->execute([$Email,$Password]);
                  $res= $result->fetch();
                  
                 
                  
                  if($res)
                  {   
                    
                     
                    $_SESSION['nom']=$res[1];
                    $_SESSION['id_client']=$res[0];
                    $_SESSION['Nom_bus']=$res[2];
                    $_SESSION['Tel']=$res[4];
                    $_SESSION['Adresse']=$res[6];
                    $_SESSION['Ville']=$res[5];
      
      
                    $_SESSION['error']='';
                   
                
                    header('location: home_client');
                   
                    
                  }
                   
                  
                  else 
                  {
                      
                    $_SESSION['errorClient']='erreurClient';
                      
                     
                      header('location: connexion_client');
                  }
                }
    }




    public function colisClient(){
   

 
   if(isset($_POST['saveColis']))
   {
     session_start();
    $client=new Colis();
    $client->setIdClient($_SESSION['id_client']);
      $client->setDes($_POST['nom']);
      $client->setStatut($_POST['statut']);
      $client->setTel_Des($_POST['Tel']);
      $client->setVille_Des($_POST['Ville']);
      $client->setAdresse_Des($_POST['Adresse']);
      $client->setDisponibilité($_POST['Dis']);
      $client->setProduit($_POST['Prod']);
      $client->setPoids($_POST['Poid']);
      $client->setPrix($_POST['Prix']);
      $date=date('l j F Y, H:i');
      
      $client->setDate_C($date);
      
     
         
      

      $client->insert();
   }
    }
    public function connexionAdmin(){
      session_start();
      if (isset($_POST['loginAd']) && isset($_POST['EmailAd']) && isset($_POST['PasswordAd']) )
      {
          $connection=new Admin();
                  
                 
               
                  $connection->setEmail($_POST['EmailAd']);
                  $connection->setPassword($_POST['PasswordAd']);  
                  $Email=$connection->getEmail();
                  $Password= $connection->getPassword(); 
                 
                  $sql="SELECT * FROM inscription_admin WHERE Email LIKE ? AND Password LIKE ? ";
                  $result=$connection->GetData($sql);
                  $result->execute([$Email,$Password]);
                  $res= $result->fetch();
                 
                  
                  if($res)
                  {   
                   
                    
                     
                    $_SESSION['nom']=$res['Nom'];
                   
                   
                    header('location: home_admin');
                   
                    
                      
                  }
                   
                  
                  else 
                  {
                      
                    
                    $_SESSION['errorConnexion']='erreurConnexion';
                      header('location: connexion_admin');
      
                  }
                }
    }

    public function editInfoColis(){
      $colis=new Colis();
      if(isset($_POST['saveEditColis']))
        {
          $colis->setDes($_POST['nom']);
            $colis->setStatut($_POST['statut']);
            $colis->setTel_Des($_POST['Tel']);
            $colis->setVille_Des($_POST['Ville']);
            $colis->setAdresse_Des($_POST['Adresse']);
            $colis->setDisponibilité($_POST['Dis']);
            $colis->setProduit($_POST['Prod']);
            $colis->setPoids($_POST['Poid']);
            $colis->setPrix($_POST['Prix']);
            $colis->setIdColis($_SESSION['id_ed']);
            $date=date('l j F Y, H:i');
            
            $colis->setDate_C($date);
      
            $colis->updateInfoColis();
            
           
        }
      
    
      
      if(isset($_POST['id_del']))
      {
          $param=$_POST['id_del'];
      
          $sql="DELETE FROM colis_a_rammasser WHERE id_colis LIKE ?";
          $colis=new Dbconnect();
          $prepare=$colis->GetData($sql);
         
          $prepare->execute([$param]);
      
          $prepare=$colis->GetData($sql);
      
          $sql="DELETE FROM colis WHERE id LIKE ?";
      
          $prepare=$colis->GetData($sql);
         
          $prepare->execute([$param]);
          
          header('location:colis_client');
      }
        
   }

   public function affichEdit()
   { 
    if(isset($_POST['id']))
    {session_start();
        $sql="SELECT *FROM colis WHERE id LIKE ?";
       $colis=new Dbconnect();
        $prepare=$colis->GetData($sql);
       $param=$_POST['id'];
        $prepare->execute([$param]);
        $modification= $prepare->fetch();
        
        $_SESSION['Des']=$modification['Destinataire'];
        $_SESSION['Telephone_Des']=$modification['Telephone_Des'];
        $_SESSION['Ville_Des']=$modification['Ville_Des'];
        $_SESSION['adresse_Des']=$modification['adresse_Des'];
        $_SESSION['Produit']=$modification['Produit'];
        $_SESSION['Poids']=$modification['Poids'];
        $_SESSION['Prix']=$modification['Prix'];
        $_SESSION['id_ed']=$modification['id'];
       
        
    header('location: edit_info_colis');
      
        
    }
   }
  //  ------------------------------------------------------------------------
    public function editRammassage(){
      $rammassage=new Colis;
      if(isset($_POST['saveEditRammassage']))
      {
         
          $rammassage->editInfoRammassage($_POST['Adresse'],$_POST['Tel'],$_POST['Ville']);
      }
    
    
    }
    public function inscriptionAdmin(){
      if(isset($_POST['saveInscriptionAdmin']))
{ 
  $id=2;
  $sql="SELECT Identifecateur FROM identifecateur WHERE id LIKE ?";
  $admin=new Admin();
  $admin=$admin->GetData($sql);
  $admin->execute([$id]);
  $admin=$admin->fetch();
   

   if($_POST['identif']==$admin[0]) 
   {
     $ad=new Admin();
     $ad->setNom($_POST['nom']);
     $ad->setEmail($_POST['Email']);
     $ad->setPassword($_POST['Password']);
     session_start();
     $_SESSION['error']='';
     $ad->insert();

  
   }
   else
   {  session_start();
     $_SESSION['error']='erreur';

   header('location:inscription_admin');
   }
}
    }
    public function inscriptionClient(){
      if(isset($_POST['saveInscriptionClient']))
   {
      $client=new client();
      $client->setNom($_POST['nom']);
      $client->setNom_business($_POST['n_bus']);
      $client->setNumero($_POST['Tel']);
      $client->setVille($_POST['Ville']);
      $client->setAdresse($_POST['Adresse']);
      $client->setType_business($_POST['T']);
      $client->setEmail($_POST['Email']);
      $client->setPassword($_POST['Password']);

      $client->insert();
   }
    }

    public function Etat(){
      if(isset($_POST['id_Retour']))
      {
          
      $Admin=new Admin();
          $id=$_POST['id_Retour'];
          $sql="UPDATE colis SET Etat='Retour' WHERE id=?";
          $prepare = $Admin->GetData($sql);
          $prepare= $prepare->execute([$id]);
          header('location:etat_colis');
      }
      
      if(isset($_POST['id_Livré']))
      {
          
      $Admin=new Admin();
          $id=$_POST['id_Livré'];
          $sql="UPDATE colis SET Etat='Livré' WHERE id=?";
          $prepare = $Admin->GetData($sql);
          $prepare= $prepare->execute([$id]);
          header('location:etat_colis');
          
      }
      if(isset($_POST['id_ramassage']))
      {
         
      $Admin=new Admin();
          $id=$_POST['id_ramassage'];
          $sql="UPDATE colis SET Statut='Ramassé' WHERE id=?";
          $prepare = $Admin->GetData($sql);
          $prepare= $prepare->execute([$id]);
          header('location:demande_ramassage');
          
      }
      
      if(isset($_POST['id_activer']))
      {
         
          $client=new Client();
          $id=$_POST['id_activer'];
          $sql="SELECT * FROM inscription_client WHERE id=?";
          $prepare = $client->GetData($sql);
           $prepare->execute([$id]);
          $c=$prepare->fetch();
        
          $client->setNom($c['Nom']);
          $client->setNom_business($c['Nom_business']);
          $client->setType_business($c['Type_business']);
          $client->setNumero($c['Numero']);
          $client->setVille($c['Ville']);
          $client->setAdresse($c['Adresse']);
          $client->setEmail($c['Email']);
          $client->setPassword($c['Password']);
      
          $sql = "INSERT INTO client  VALUES (null,?,?,?,?,?,?,?,?)";
          $prepare = $client->GetData($sql);
          $prepare = $prepare->execute([$client->getNom(), $client->getNom_business(), $client->getType_business(), $client->getNumero(), $client->getVille(), $client->getAdresse(), $client->getEmail(), $client->getPassword()]);
      
          $sql="DELETE FROM inscription_client WHERE id=?";
          $prepare = $client->GetData($sql);
           $prepare->execute([$id]);
      
          header('location:nouveaux_inscription');
          
      }
      
      if(isset($_POST['id_supprimer']))
      {
          include('Client.php');
          $client=new Client();
          $id=$_POST['id_supprimer'];
         
          $sql="DELETE FROM inscription_client WHERE id=?";
          $prepare = $client->GetData($sql);
           $prepare->execute([$id]);
      
          header('location:nouveaux_inscription');
          
      }
      
    }

    
 public function operatRam()
  { 
      if (isset($_POST['edit_ram']))
      {
     
         header('location:edit_rammassage');
      }
  }


  public function AffichError()
  { 
   
     
      if($_SESSION['error']='erreur'){
     
        echo '<div class="alert alert-danger" role="alert"> Vous n`étes pas un administrateur, vous n`avez pas le droit de s`inscrir !</div>';
       unset($_SESSION['error']);
      }
      
  }


  public function affichNouveauxClient()
  {
    $client=new Client();
   return $client->affichNvClient();
  }
  public function affichRamassageClient()
  {
    $rammassage=new Colis();
    return $rammassage->affichColisRamassage();
  }

  public function InfoClient()
  {
    $info=new Colis();
    return $info->InfoClient();
  }


  public function suiviClient()
  {
    $suivi=new Colis();
   return  $suivi->affichNvColis();

  }


  public function affichColisAdmin()
  {
    $colis=new Admin();
    return $colis->affichNvColis();
  }

 public function affichRamassageAdmin()
 {
   $rammassage=new Admin;
   return $rammassage->affichColisRamassage();
 }

 public function affichClientAdmin()
 {
   $nosClient=new Admin();
   return $nosClient->affichNosClient();
 }


 public function AffichErrorConnexion()
  { 
   
     
      if($_SESSION['errorConnexion']='erreurConnexion'){
     
        echo '<div class="alert alert-danger" role="alert"> Vos information sont incorrect!</div>';
       unset($_SESSION['errorConnexion']);
      }
      
  }

  
 public function AffichErrorClient()
 { 
  
    
     if($_SESSION['errorClient']='erreurClient'){
    
       echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
       <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
           <div>
            vos information sont incorrects veuillez vérifiez votre email ou mot de passe!! 
            Si vous avez récement s inscrire veuillez attendre l activation de votre compte et résseyez aprés une heure
           </div>
       </div>';

       unset($_SESSION['errorClient']);
      
     }
     
 }

 public function ContactUs()
 {
   if(isset($_POST['contacter']))
   { session_start();
     $_SESSION['emailCont']=$_POST['emailCont'];
     $_SESSION['sujetCont']=$_POST['sujetCont'];
     $_SESSION['nameCont']=$_POST['NomCont'];
     header('location: mail');
     
   }
 }

 public function messageEmail()
 {
if(isset($_SESSION['msg']))
{
  echo '<div class="text-start alert alert-success" role="alert">
  '.$_SESSION['msg'].'
</div>';
  unset($_SESSION['msg']);

 }
}
}
?>
