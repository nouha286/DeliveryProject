<?php

class Colis extends Dbconnect
{
    public $id;
    public $Des;
    public $Statut;
    public $Tel_Des;
    public $Ville_Des; 
    public $Adresse_Des;
    public $Disponibilité;
    public $Produit;
    public $Poids;
    public $Prix;
    public $Date_C;
    public $Etat;
    public $Nom_Bus;
    public $date;
    public $id_colis;

   
    public function setIdClient($id)
    {

       
        $this->id=$id;
    }

    public function setIdColis($id_colis)
    {

       
        $this->id_colis=$id_colis;
    }

    public function setDes($Des)
    {
         $this->Des=$Des;
    }

    public function setStatut($Statut)
    {
         $this->Statut=$Statut;
    }

   
    public function setTel_Des($Tel_Des)
    {
         $this->Tel_Des=$Tel_Des;
    }

    public function setVille_Des($Ville_Des)
    {
         $this->Ville_Des=$Ville_Des;
    }
    public function setAdresse_Des($Adresse_Des)
    {
         $this->Adresse_Des=$Adresse_Des;
    }

    public function setDisponibilité($Disponibilité)
    {
         $this->Disponibilité=$Disponibilité;
    }

    public function setProduit($Produit)
    {
         $this->Produit=$Produit;
    }
    
    
    public function setPoids($Poids)
    {
         $this->Poids=$Poids;
    }
    
    
    public function setPrix($Prix)
    {
         $this->Prix=$Prix;
    }
     
    public function setDate_C($Date_C)
    {
         $this->Date_C=$Date_C;
    }
    
    
    public function setEtat($Etat)
    {
         $this->Etat=$Etat;
    }
    
    
    public function setNom_Bus($Nom_Bus)
    {
         $this->Nom_Bus=$Nom_Bus;
    }
    





      
    public function getIdClient()
    {

      
           
        return $this->id;
    }

    public function getDes()
    {
        return $this->Des;
    }

    public function getStatut()
    {
        return $this->Statut;
    }

   
    public function getTel_Des()
    {
        return $this->Tel_Des;
    }

    public function getVille_Des()
    {
        return $this->Ville_Des;
    }
    public function getAdresse_Des()
    {
        return $this->Adresse_Des;
    }

    public function getDisponibilité()
    {
        return $this->Disponibilité;
    }

    public function getProduit()
    {
        return $this->Produit;
    }
    
    
    public function getPoids()
    {
        return $this->Poids;
    }
    
    
    public function getPrix()
    {
        return $this->Prix;
    }
     
    public function getDate_C()
    {
        return $this->Date_C;
    }
    
    
    public function getEtat()
    {
        return $this->Etat;
    }
    
    
    public function getNom_Bus()
    {
         return $this->Nom_Bus;
    }
    
    public function getIdColis()
    {
         return $this->id_colis;
    }
    
    
  public function insert()
  {

    try {

      $sql = "INSERT INTO colis VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?)";
      $prepare = $this->GetData($sql);
      $prepare = $prepare->execute([$this->getDes(), $this->getStatut(), $this->getTel_Des(), $this->getVille_Des(), $this->getAdresse_Des(), $this->getDisponibilité(), $this->getProduit(), $this->getPoids(),$this->getPrix(), date('l j F Y, H:i'),'---',$this->getIdClient()]);
    
      if ($prepare) {
        $sql="SELECT id FROM colis order by id desc limit 1 ";
        $res=$this->connect()->query($sql);
        $res=$res->fetch();

        $sql = "INSERT INTO  colis_a_rammasser VALUES (NULL,?)";
        $prepare = $this->GetData($sql);
        $prepare = $prepare->execute([$res['id']]);
      
         
       
        header('location:colis_client');
      } else echo 'erreur!!!!';
    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
  }

  public function affichNvColis()
  {
      $sql="SELECT * FROM colis WHERE id_client LIKE ?";
      $this->setIdClient($_SESSION['id_client']);
      $prepare=$this->GetData($sql);
      $param=$this->getIdClient();
      $prepare->execute([$param]);
      return $prepare->fetchAll();
  }


  public function affichColisRamassage()
  {
      $sql="SELECT * FROM colis WHERE Statut LIKE ? AND id_client LIKE ?";
      $prepare=$this->GetData($sql);
      $param='Attente du rammasage';
      $prepare->execute([$param, $_SESSION['id_client']]);
      return $prepare->fetchAll();
  }

  public function editInfoRammassage($Adresse,$TEL,$Ville)
  {
    try {
      $this->Adresse=$Adresse;
      $this->TEL=$TEL;
      $this->Ville=$Ville;
     
     $ID_client=$_SESSION['id_client'];
      $sql = "UPDATE client SET Adresse=?, Numero=?, Ville=? WHERE id=$ID_client";
      $prepare = $this->GetData($sql);
      $prepare = $prepare->execute([$this->Adresse, $this->TEL,$this->Ville]);

      if ($prepare) {
        header('location:colis_a_rammasser');
      } else echo 'erreur!!!!';


    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
  }


  public function infoClient()
  {
      $sql="SELECT * FROM client WHERE id LIKE ?";
      $prepare = $this->GetData($sql);
      $ID_client=$_SESSION['id_client'];
       $prepare->execute([$ID_client]);
      return $prepare->fetch();


  }

  public function updateInfoColis()
  {
    try {
     
     $date=date('l j F Y, H:i');
      $sql = "UPDATE colis SET Destinataire='$this->Des', Statut='$this->Statut', Telephone_Des='$this->Tel_Des', Ville_Des='$this->Ville_Des', adresse_Des='$this->Adresse_Des', Disponibilite_Des='$this->Disponibilité' ,Produit='$this->Produit', Poids=$this->Poids,Prix=$this->Prix,Date_création='$date' WHERE id=$this->id_colis ";
      
     $prepare=$this->connect()->query($sql);

      if ($prepare) {
        
        header('location:colis_client');
      } else echo 'erreur!!!!';


    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
  }




}
